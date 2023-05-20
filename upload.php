<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Upload de Arquivos</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

  <?php include 'menu.html'; ?>

<h1>Upload de Arquivos</h1>

  <form method="POST" enctype="multipart/form-data">
        <label for="arquivo">Selecione um arquivo:</label>
        <input type="file" id="arquivo" name="arquivo" required>

        <input type="submit" value="Enviar">
    </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $diretorio = 'uploads/';

        if (!is_dir($diretorio)) {
            mkdir($diretorio);
        }

        $nomeArquivo = $_FILES['arquivo']['name'];
        $caminhoArquivo = $diretorio . $nomeArquivo;

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminhoArquivo)) {
            echo "<p>Envio realizado com sucesso!</p>";
        } else {
            echo "<p>Ocorreu um erro ao fazer o upload do arquivo.</p>";
        }
    }
    ?>

    
    
    </body>
  </html>