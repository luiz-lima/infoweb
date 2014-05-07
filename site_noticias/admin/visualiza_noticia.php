<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Visualizar de Notícias</title>
    <link rel="stylesheet" href="estilos_admin.css">
  </head>
  <body>
    <div id="principal">
      <div id="topo">

      </div>
      <div id="conteudo">
        <h1>
          Visualiza notícia
        </h1>
        <?php
				include 'conexao.php';

				$sql = 'SELECT * FROM tab_noticia WHERE cod_noticia = ' . $_GET['cod_noticia'];
				$exec_query = mysql_query($sql);
				$dados = mysql_fetch_array($exec_query);
				?>

        <table id="tabela-visualiza" class="tabela">
          <tr>
            <td class="texto">Título</td>
            <td><?php echo $dados['titulo']; ?></td>
          </tr>
          <tr>
            <td class="texto">Data da Postagem<br></td>
            <td><?php echo $dados['data']; ?></td>
          </tr>
          <tr>
            <td class="texto">Autor</td>
            <td><?php echo $dados['autor']; ?></td>
          </tr>
          <tr>
            <td class="texto">Notícia</td>
            <td><?php echo $dados['noticia']; ?></td>
          </tr>
          <tr>
            <td></td>
            <td><a href="exclui_noticia.php?cod_noticia=<?php echo $dados['cod_noticia']; ?>">Excluir</a></td>
          </tr>
          <tr>
            <td></td>
            <td><a href="edita_noticia.php?cod_noticia=<?php echo $dados['cod_noticia']; ?>">Editar</a></td>
          </tr>
        </table>
        <a href="../index.php">Voltar a página inicial</a>
      </div>
      <div id="rodape">

      </div>
    </div>
  </body>
</html>