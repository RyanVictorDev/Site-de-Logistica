<?php

$hostname = "127.0.0.1";
$usuario = "root";
$senha = "";
$bancodedados = "lista_db"; 

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>