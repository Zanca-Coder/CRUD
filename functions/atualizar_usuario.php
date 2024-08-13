<?php
require_once('usuario.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    atualizarUsuario($id, $nome, $email, $idade);
}
?>