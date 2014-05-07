<?php
include 'conexao.php';

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$autor = $_POST['autor'];
$noticia = $_POST['noticia'];

$sql = "INSERT INTO tab_noticia (titulo, data, autor, noticia)
				VALUES ('$titulo', '$data', '$autor', '$noticia')";

$exec_sql = mysql_query($sql);

if ($exec_sql == '1') {
  $return = 'ok';
} else {
  $return = 'error';
}

header('location: cad_noticia.php?success=' . $return);
?>