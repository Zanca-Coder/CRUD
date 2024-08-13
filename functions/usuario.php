<?php
require_once('connection.php');

function criarUsuario($nome, $email, $idade) {
    global $conexao;

    $sql = "INSERT INTO usuarios (nome, email, idade) VALUES ('$nome', '$email', $idade)";

    if ($conexao->query($sql) === TRUE) {
        header("Location: ../pages/listar_usuarios.php?sucesso=Usuário criado com sucesso.");
    } else {
        headerheader("Location: ../pages/criar_usuario.php?erro=Erro ao criar usuário: " . $conexao->error);
    }
}

function atualizarUsuario($id, $nome, $email, $idade)
{
    global $conexao;

    $sql = "UPDATE usuarios SET nome='$nome', email='$email', idade=$idade WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        header("Location: ../pages/listar_usuarios.php?sucesso=Usuário atualizado com sucesso.");
    } else {
        header("Location: ../pages/atualizar_usuario.php?erro=Erro ao atualizar usuário: " . $conexao->error);
    }
}

function deletarUsuario($id)
{
    global $conexao;

    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        header("Location: ../pages/listar_usuarios.php?sucesso=Usuário deletado com sucesso.");
    } else {
        header("Location: ../pages/listar_usuarios.php?erro=Erro ao deletar usuário: " . $conexao->error);
    }
}

function lerUsuarios(){
    global $conexao;

    $sql = "SELECT * FROM usuarios";

    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $usuario = array();

        while ($rows = $result->fetch_assoc()) {
            $usuario[] = $row;
        }

        return $usuario;
    } else {
        return [];
    }
}

?>