<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Notícias</title>
    <link rel="stylesheet" type="text/css" href="estilos_admin.css">
  </head>
  <body>
    <div id="principal">
      <div id="topo">
        <?php echo $_SESSION['login']; ?>
      </div>
      <div id="conteudo">
        <h1>
          Cadastro de notícias
        </h1>
        <form id="form-cad-noticia" name="form-cad-noticia" method="post" action="grava_noticia.php">
          <?php
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
          <input type="text" id="cn-titulo" class="campo-texto" name="titulo" required autofocus>
          <label for="cn-data">Data</label>
          <input type="text" id="cn-data" class="campo-texto" name="data" required>
          <label for="cn-autor">Autor</label>
          <input type="text" id="cn-autor" class="campo-texto" name="autor" required>
          <label for="cn-noticia">Notícia</label>
          <textarea id="cn-titulo" class="campo-texto campo-textarea" name="noticia" required></textarea>
          <input type="submit" id="cn-botao-enviar" class="botao" value="Enviar">
        </form>
        <?php
				include 'conexao.php';

				$sql = 'SELECT * FROM tab_noticia';
				$exec_query = mysql_query($sql);
				?>
        <table id="tabela-noticias" class="tabela">
          <tr>
          	<th>Código</th>
            <th>Título</th>
            <th>Data</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <?php while($dados = mysql_fetch_array($exec_query)) { ?>
          <tr>
            <td><?php echo $dados['cod_noticia']; ?></td>
            <td class="esquerda"><?php echo $dados['titulo']; ?></td>
            <td><?php echo $dados['data']; ?></td>
            <td><a href="exclui_noticia.php?cod_noticia=<?php echo $dados['cod_noticia']; ?>">Excluir</a></td>
            <td><a href="edita_noticia.php?cod_noticia=<?php echo $dados['cod_noticia']; ?>">Editar</a></td>
            <td><a href="visualiza_noticia.php?cod_noticia=<?php echo $dados['cod_noticia']; ?>">Visualizar</a></td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <div id="rodape">

      </div>
    </div>
  </body>
</html>