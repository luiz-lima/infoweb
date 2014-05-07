<?php
include 'conexao.php';

$cod_noticia = $_POST['cod_noticia'];

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$autor = $_POST['autor'];
$noticia = $_POST['noticia'];

$sql = "UPDATE tab_noticia
				SET titulo = '$titulo',
        		data = '$data',
            autor = '$autor',
            noticia = '$noticia'
        WHERE cod_noticia = '$cod_noticia'";

$exec_sql = mysql_query($sql);

if ($exec_sql == '1') {
  $return = 'ok';
} else {
  $return = 'error';
}

header('location: cad_noticia.php');
?>