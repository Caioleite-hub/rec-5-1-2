<?php

function calcularformula($x,$y)
{

if(($x+ $y) ==0){
    return"Não é possível dividir por zero";
}

$resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);
    return $resultado;


}

$x = 6;
$y = 25;

echo "O valor de X: $x <br>";
echo "O valor de Y: $y <br>";
echo "O resultado da fórmula é: " . calcularformula($x,$y);
