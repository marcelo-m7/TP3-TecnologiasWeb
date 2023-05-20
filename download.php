<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Listagem de Arquivos</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <?php include 'menu.html'; ?>

    <h1>Login para download</h1>
    <p>Faça o login para visualizar os arquivos disponíveis para download.</p>

    <form method="POST" action="verificar.php">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>

    <?php 
      if (isset($_COOKIE['erro'])) {
        $erro = $_COOKIE['erro'];
        echo "<p> $erro</p>";
        setcookie('erro', '', time() - 3600, '/');
      }
    ?>

    </body>
</html>