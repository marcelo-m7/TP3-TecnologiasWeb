<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Gerenciador de Arquivos</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
      <?php include 'menu.html'; ?>

    
      <h1>TP3 CTESP Em Sistemas Informáticos</h1>
      <p>Marcelo Santos</p>

      <h2> Funcionamento do Site </h2>
        <p>O site é um gesto de arquivos no servidor. Para upload não é necessário login, todavia é necessário para a visualização dos arquivos para download e baixar. Para isso, o usuário é levada a página para login ao acender em "Download".</p>
        <p>Ao tentar realizar o login, caso efeituado o usuário é levado à página "listar.php", caso não é salvo o cookie com o erro de login e exibido na página de login. A varificação é feita atravez do usuário e senha presente na base de dados "usuários", pelo que pode usar o <strong> login e senha "test"</strong> para acesso.</p>
        <p>Ao momento, é possível acender aos ficheiros no servidor diretamente pelo caminho do servidor, todavia foi bloquado o acesso à pasta "/uploads" no servidor Nginx usando a seguinte configuração em "lagon.config": 
        <p>location /caminho-para-o-diretorio {
      deny all;
      } </p></p>  
        <br>
        <p>Marcelo Santos (a79433).</p>

    </body>
  </html>
  