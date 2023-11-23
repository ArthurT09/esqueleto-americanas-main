<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";// no xamp a senha é $senha = "";
$banco = "americanas";

try {
    $PDO = new PDO("mysql:host={$servidor};dbname={$banco};port=8889;charset=utf8;", $usuario, $senha);
} catch (\Exception $e) {
    echo "<p>Erro ao se conectar no banco</p>";
    echo $e->getMessage();
}