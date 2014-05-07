<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Notícias</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div id="principal">
      <div id="topo">

      </div>
      <div id="conteudo">
        <h1>
          Notícias
        </h1>
        <ul id="lista-noticia">
          <?php
          include 'admin/conexao.php';
          $sql = "SELECT * FROM tab_noticia ORDER BY cod_noticia DESC";
          $executa_query = mysql_query($sql);

          while($dados = mysql_fetch_array($executa_query)) {
          ?>
          <li>
            <a href="<?php echo 'admin/visualiza_noticia.php?cod_noticia=' . $dados['cod_noticia']; ?>">
              <?php echo $dados['titulo']; ?>
            </a>
            <p>
              <?php echo $dados['data']; ?>
            </p>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div id="rodape">

      </div>
    </div>
  </body>
</html>