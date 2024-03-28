<?php
$hostname = "localhost";
$username = "root";
$password = '';
$database = "atividade_27_03_2024";
$port = 3307;

$mysqli = new mysqli($hostname, $username, $password, $database, $port);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar ao MySQL: " . $mysqli->connect_error;
    exit();
}
?>

