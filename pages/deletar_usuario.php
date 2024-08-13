<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/main.css">
    <title>Deletar Usuário</title>
</head>

<body>
    <nav class="navigation">
        <ul class="menu">
            <li class="menu-item">
                <a href="../" class="menu-link">Home</a>
            </li>
            <li class="menu-item">
                <a href="../pages/criar_usuario.php" class="menu-link">Criar</a>
            </li>
            <li class="menu-item">
                <a href="../pages/atualizar_usuario.php" class="menu-link">Atualizar</a>
            </li>
            <li class="menu-item">
                <a href="../pages/deletar_usuario.php" class="menu-link">Deletar</a>
            </li>
            <li class="menu-item">
                <a href="../pages/listar_usuarios.php" class="menu-link">Listar</a>
            </li>
        </ul>
    </nav>
    <section class="container">
        <div class="content">
            <h2>Deletar Usuário</h2>
            <!-- Formulário para deletar um usuário -->
            <form class="form" action="../functions/deletar_usuario.php" method="post">
                <div class="input">
                    <label for="id">ID do Usuário:</label>
                    <input type="number" id="id" name="id" placeholder="Informe o ID"><br>
                </div>
                <input class="button" type="submit" value="Deletar">
            </form>
        </div>
    </section>
</body>

</html>