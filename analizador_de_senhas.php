<?php

function contarMaiusculas(string $senha): int
{
    $contador = 0;
    for ($i = 0; $i < strlen($senha); $i++) {
        if (preg_match('/[A-Z]/', $senha[$i])) {
            $contador++;
        }
    }

    return $contador;
}

function contarMinusculas(string $senha): int
{
    $contador = 0;
    for ($i = 0; $i < strlen($senha); $i++) {
        if (preg_match('/[a-z]/', $senha[$i])) {
            $contador++;
        }
    }

    return $contador;
}

function contarNumeros(string $senha): int
{
    $contador = 0;
    for ($i = 0; $i < strlen($senha); $i++) {
        if (preg_match('/[0-9]/', $senha[$i])) {
            $contador++;
        }
    }

    return $contador;
}

function contarEspeciais(string $senha): int
{
    $contador = 0;
    for ($i = 0; $i < strlen($senha); $i++) {
        if (!preg_match('/[A-Za-z0-9]/', $senha[$i])) {
            $contador++;
        }
    }

    return $contador;
}

function classificarSenha(string $senha): string
{
    $criterios = 0;
    if (strlen($senha) >= 8) {
        $criterios++;
    }
    if (contarMaiusculas($senha) > 0) {
        $criterios++;
    }
    if (contarMinusculas($senha) > 0) {
        $criterios++;
    }
    if (contarNumeros($senha) > 0) {
        $criterios++;
    }
    if (contarEspeciais($senha) > 0) {
        $criterios++;
    }
    if ($criterios <= 2) {
        return "Fraca";
    } elseif ($criterios == 3) {
        return "Média";
    } elseif ($criterios == 4) {
        return "Forte";
    } else {
        return "Muito Forte";
    }
}




function analisarSenha(string $senha): array
{

    return [
        "Senha" => $senha,
        "Maiusculas" => $contarMaiusculas($senha),
        "Minusculas" => contarMinusculas($senha),
        "Numeros" => contarNumeros($senha),
        "Especiais" => $contarEspeciais($senha),
        "Tamanho" => $strlen($senha),
        "Seguranca" => classificarSenha($senha)
    ];
}

?>

<form method="POST" action="">
    Digite a senha:
    <input type="password" name="senha">
    <input type="submit" value="Enviar">
</form>

<?php

if (isset($_POST["senha"])) {

    $senha = $_POST["senha"];
    $quantidade = analisarSenha($senha);

    echo "Senha: " . $quantidade["Senha"] . "<br>";
    echo "Quantidade de letras maiúsculas: " . $quantidade["Maiusculas"] . "<br>";
    echo "Quantidade de letras minúsculas: " . $quantidade["Minusculas"] . "<br>";
    echo "Quantidade de números: " . $quantidade["Numeros"] . "<br>";
    echo "Quantidade de caracteres especiais: " . $quantidade["Especiais"] . "<br>";
    echo "Tamanho da senha: " . $quantidade["Tamanho"] . "<br>";
    echo "Nível de segurança: " . $quantidade["Seguranca"] . "<br>";
    }









?>