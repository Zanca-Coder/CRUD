<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_crud';

$connection = new mysqli($host, $usuario, $senha, $banco);

if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

?> 