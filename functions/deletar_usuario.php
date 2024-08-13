<?php 
require_once('usuario.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    deletarUsuario($id);
}

?>