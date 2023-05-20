<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Listagem de Arquivos</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <?php include 'menu.html'; ?>
    <h1>Listagem de Arquivos</h1>
        <table>
          <tbody>
            <tr>
              <th>Nome do Arquivo</th>
              <th>Tamanho do Arquivo</th>
              <th>Data de Modificação</th>
              <th>Download</th>
            </tr>
            <?php
            session_start();

            if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
                header('Location: download.php');
                exit();
            }

            $diretorio = 'uploads/';

            if (is_dir($diretorio)) {
                if ($handle = opendir($diretorio)) {
                    while (($file = readdir($handle)) !== false) {
                        if ($file != '.' && $file != '..') {
                            $caminho = $diretorio . $file;

                            $tamanho = filesize($caminho);
                            $nome = basename($caminho);
                            $data =date('d/m/Y H:i:s', filemtime($caminho));


                            echo "<tr>";
                            echo "<td>$nome</td>";
                            echo "<td>$tamanho bytes</td>";
                            echo "<td>$data</td>";
                            echo "<td><a href='$caminho' download>Download</a></td>";
                            echo "</tr>";
                            }
                          }
                      closedir($handle);
                    }
                }
            ?>
        </tbody>
      </table>
    </body>
  </html>