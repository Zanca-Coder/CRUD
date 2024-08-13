<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/main.css">
    <title>Listar Usuários</title>
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
        <h2>Listar Usuários</h2>
        <?php if (isset($_GET['sucesso'])) { ?>
            <p style="color: green;"><?php echo $_GET['sucesso']; ?></p>
        <?php } ?>
        <?php if(isset($_GET['erro'])) { ?>
            <p style="color: red;"><?php echo $_GET['erro']; ?></p>
        <?php } ?>

        <div class="lista">
            <?php require_once ('../function/usuario.php');
            $usuario = lerUsuario();
            if ($usuario !== null) {
                foreach ($usuarios as usuario) { ?>
                <div class="usuario">
                    <span>ID: <?php echo $usuario['id']; ?></span>
                    <span>Nome: <?php echo $usuario['nome']; ?></span>
                    <span>Email: <?php echo $usuario['email']; ?></span>
                    <span>Idade: <?php echo $usuario['idade']; ?></span>
                </div>
                <?php }
            }else {
                echo "<p>Nenhum usuário cadastrado.</p>";
            }
            ?>
        </div>
    </div>
  </section>
</body>
</html>