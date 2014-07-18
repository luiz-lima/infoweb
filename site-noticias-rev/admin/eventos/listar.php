<?php
require '../../includes/conexao.php';

$sql = 'SELECT * FROM eventos';
$query = mysqli_query($conn, $sql);
?>

<table class="tabela">
  <tr>
    <th>Código</th>
    <th>Título</th>
    <th>Data</th>
    <th>Descrição</th>
    <th></th>
    <th></th>
  </tr>
  <?php
  
  while ($dados = mysqli_fetch_array($query)) {
    echo '<tr>';
    echo '<td class="texto-centralizado">' . $dados[id] . '</td>';
    echo '<td>' . $dados[titulo] . '</td>';
    echo '<td>' . $dados[data] . '</td>';
    echo '<td>' . $dados[descricao] . '</td>';
    echo '<td class="texto-centralizado"><a href=editar.php?id=' . $dados[id] . '>Editar</a></td>';
    echo '<td class="texto-centralizado"><a href=alterar.php?action=delete&id=' . $dados[id] . '>Excluir</a></td>';
    echo '</tr>';
  }
  
  ?>
</table>