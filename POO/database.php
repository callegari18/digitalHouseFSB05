<?php
//Procedural
try{
    $con = new PDO('mysql:dbname=aulapdo','vinicius','0709');

    //lança excepition quando for erro SQL
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPITION);

    $sql = 'SELECT * FROM tabela WHERE id=?';

    $stmt = $con->prepare($sql);
    
    $result = $stmt->execute([12]);

    while ($cliente = $result->fetch(PDO::FETCH_OBJ)){
        echo $cliente->nome.'<br>';
    }

} catch(PDOException $erro){
    echo $erro->getMessage();
}

//--------------------------------------------------------------------------------------------------//

class Database
{
    protected $conexao;

   // public function __construct($banco, $schema, $user, $senha, $porta='3306', $host='localhost')
   public function __construct($banco, $schema, $user, $senha, $porta='3306', $host='localhost')
   {
        try {
            $this->conexao = new PDO("$banco:dbname=$schema;port=$porta;host=$host", $user, $senha);  
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }
   public function getConexao()
   {
       return $this->conexao;
   }
   public function select ($tabela, $campos='*',$filtro='true',$dados=[])
   {
  
       $sql = "SELECT $campos FROM $tabela WHERE $filtro";

       $stmt = $this->conexao->prepare($sql);

       $stmt->execute($dados);
   
       return $stmt->fetchAll();
    }

}

$database = new Database('mysql','aulapdo', 'vinicius','0709','3306','localhost');

//SELECT nome FROM clientes
