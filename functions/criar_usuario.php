<?php
require_once('usuario.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    criarUsuario($nome, $email, $idade);
}

?>