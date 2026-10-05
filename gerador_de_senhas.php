<?php

function gerarSenha($digitos) {

$letras = 'ABCDEFGHIJKMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789!@#$%^&*()-_=+[]{};:,.<>?';


$caracteresLength = strlen($letras);
$senha = '';

for ($i = 0; $i < $digitos; $i++) {
    $indiceAleatorio = random_int(0, $caracteresLength - 1);
    $senha .= letras[$indiceAleatorio];

}

return $senha;

}

$tamanhoDesejado = 10;
$senhaGerada = gerarsenha($tamanhoDesejado);

echo "Senha gerada: ".$senhaGerada;



?>