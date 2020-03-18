<?php
// // Procedural!
// try {
//     $con = new PDO('mysql:dbname=aulapdo;port=3306;host=localhost', 'root', '');

//     // lança exception quando for erro de SQL
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $sql = 'SELECT * FROM clientes WHERE id < ?';

//     $stmt = $con->prepare($sql);

//     $stmt->execute([12]);

//     while ($cliente = $stmt->fetch(PDO::FETCH_OBJ)) {
//         // echo $cliente->nome . '<br>';
//     }

// } catch(PDOException $erro) {
//     echo $erro->getMessage();
// }

// Nossa classe facilitando os comando SQL
class Database
{
    /**
     * Conexão do database
     */
    protected $conexao;

    /**
     * Ultimo id inserido na tabela
     */
    protected $lastId;

    public function __construct($banco, $schema, $user, $senha, $porta='3306', $host='localhost')
    {
        try {
            $this->conexao = new PDO("$banco:dbname=$schema;port=$porta;host=$host", $user, $senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch(PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function getConexao()
    {
        return $this->conexao;
    }

    public function prepare($sql, $dados)
    {
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute($dados);

        return $stmt;
    }

    public function select(string $tabela, string $campos='*', $filtro='true', $dados=[])
    {
        $sql = "SELECT $campos FROM $tabela WHERE $filtro";

        $stmt = $this->prepare($sql, $dados);

        return $stmt->fetchAll();
    }

    public function insert(string $tabela, array $dados)
    {
        $sql = "INSERT INTO $tabela";

        $colunas = array_keys($dados);
        $valores = array_values($dados);

        $sqlColunas = implode(',', $colunas);

        $sql .= " ($sqlColunas)";

        $placeholders = [];

        foreach ($valores as $valor) {
            $placeholders[] = '?';
        }

        $sqlPlaceholders = implode(',', $placeholders);

        $sql .= " VALUES ($sqlPlaceholders)";

        $stmt = $this->prepare($sql, $valores);

        $this->lastId = $this->conexao->lastInsertId();

        // conversão de tipo, int > bolean (1+=true/0=false)
        return (bool)$stmt->rowCount();
    }

    public function getLastInsertId()
    {
        return $this->lastId;
    }

    public function update(string $tabela, array $dados, int $id)
    {
        // fazer implementação
    }

    public function delete(int $id)
    {
        // implementar
    }
}