<?php
function invertertexto($texto): string {
return implode(array_reverse(mb_str_split($texto)));

echo "A escrita invertida resulta em : <br>";
echo strrev($texto);


}


$textoOriginal = "gadotti";
$textoInvertido = inverterTexto($textoOriginal);
$quantidade = mb_strlen($textoOriginal, 'UTF-8');
