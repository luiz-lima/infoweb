<?php
require '../../includes/conexao.php';

$id = $_GET['id'];

$sql = 'SELECT * FROM eventos WHERE id = ?';
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'd', $id);
echo mysqli_stmt_execute($stmt);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Eventos</title>
    <link rel="stylesheet" href="../../css/estilos.css">
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
          <input type="submit" class="botao" value="Alterar">
        </form>
      </div>
    </div>
  </body>
</html>