<?php

$contador = 1;

while ($contador <= 10) {
    echo "$contador <br>";
    $contador++; // $contador = $contado + 1
}

$cont = 11;

do {
    echo 'Ola <br>';
    $cont++;
} while($cont <= 10);

for ($contador1=0; $contador1 < 30; $contador1++) { 
    echo $contador1 . '<br>';
}

$cidades = [
    'São Paulo',
    'Paris',
    'Taboão da Serra',
    'Guarulhos',
    'Osasco',
    'Diadema'
];

// echo $cidades[2];

echo '<br>';

foreach ($cidades as $chave => $cidade) {
    if ($chave === 2) {
        continue;
    }
    echo $chave . $cidade . '<br>';
    // if ($chave === 2) {
    //     break;
    // }

}
