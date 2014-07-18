<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Eventos</title>
    <link rel="stylesheet" href="../../css/estilos.css">
    <script src="../../js/libs/jquery/jquery.js"></script>
    <script src="../../js/main.js"></script>
  </head>
  <body>
    <div id="principal">
      <div class="container container-reduzido-4 centralizado">
        <form id="form-cadastrar" method="post" action="alterar.php?action=insert">
          <label for="ev-titulo">Título</label>
          <input type="text" id="ev-titulo" class="campo-form" name="titulo">
          <label for="ev-data">Data</label>
          <input type="date" id="ev-data" class="campo-form" name="data">
          <label for="ev-desc">Descrição</label>
          <textarea id="ev-desc" class="campo-form" name="descricao"></textarea>
          <input type="submit" class="botao" value="Inserir">
        </form>
      </div>
      <div id="lista-cadastrados" class="container">
        <?php include 'listar.php'; ?>
      </div>
    </div>
  </body>
</html>