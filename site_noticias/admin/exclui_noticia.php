<?php
include 'conexao.php';

$cod_noticia = $_GET['cod_noticia'];
$sql = 'DELETE FROM tab_noticia WHERE cod_noticia = ' . $cod_noticia;
$exec_sql = mysql_query($sql);

header('location: cad_noticia.php?success=deleted');
?>