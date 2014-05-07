<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Edição de Notícias</title>
    <link rel="stylesheet" type="text/css" href="estilos_admin.css">
  </head>
  <body>
    <div id="principal">
      <div id="topo">
        <?php echo $_SESSION['login']; ?>
      </div>
      <div id="conteudo">
        <h1>
          Editar notícia
        </h1>
        <form id="form-cad-noticia" name="form-cad-noticia" method="post" action="grava_edita_noticia.php">
          <?php
					include 'conexao.php';
					$sql = 'SELECT * FROM tab_noticia WHERE cod_noticia = ' . $_GET['cod_noticia'];
					$exec_sql = mysql_query($sql);
					$dados = mysql_fetch_array($exec_sql);

          $return = $_GET['success'];
          if (isset($return)) {
            if ($return == 'ok') {
              echo '<h2 class="mensagem sucesso">Notícia inserida com sucesso!</h2>';
            } elseif ($return == 'deleted') {
							echo '<h2 class="mensagem sucesso">Notícia excluída com sucesso!</h2>';
            } else {
              echo '<h2 class="mensagem erro">Erro ao inserir notícia!</h2>';
            }
          }
          ?>
          <label for="cn-titulo">Título da notícia</label>
          <input type="text" id="cn-titulo" class="campo-texto" name="titulo" value="<?php echo $dados['titulo']; ?>" required autofocus>
          <label for="cn-data">Data</label>
          <input type="text" id="cn-data" class="campo-texto" name="data" value="<?php echo $dados['data']; ?>" required>
          <label for="cn-autor">Autor</label>
          <input type="text" id="cn-autor" class="campo-texto" name="autor" value="<?php echo $dados['autor']; ?>" required>
          <label for="cn-noticia">Notícia</label>
          <textarea id="cn-titulo" class="campo-texto campo-textarea" name="noticia" required><?php echo $dados['noticia']; ?></textarea>
          <input type="hidden" name="cod_noticia" id="hiddenfield" value="<?php echo $dados['cod_noticia']; ?>">
          <input type="submit" id="cn-botao-enviar" class="botao" value="Enviar">
        </form>
      </div>
      <div id="rodape">

      </div>
    </div>
  </body>
</html>