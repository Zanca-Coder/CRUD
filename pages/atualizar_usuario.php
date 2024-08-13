<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/main.css">
    <title>Atualizar Usuário</title>
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
            <h2>Atualizar Usuário</h2>
            <!-- Formulário para atualizar os dados de um usuário -->
            <form class="form" action="../functions/atualizar_usuario.php" method="post">
                <div class="input">
                    <label for="id">ID do Usuário:</label>
                    <input type="number" id="id" name="id" placeholder="Infome o ID" required><br>
                </div>

                <div class="input">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Informe o nome" required><br>
                </div>
                <div class="input">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Informe o e-mail" required><br>
                </div>
                <div class="input">
                    <label for="idade">Idade:</label>
                    <input type="number" id="idade" name="idade" placeholder="Informe a idade" required><br>
                </div>
                <input class="button" type="submit" value="Atualizar">
            </form>
        </div>
    </section>
</body>

</html>