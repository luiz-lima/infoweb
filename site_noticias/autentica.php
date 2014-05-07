<?php
session_start();

include 'admin/conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tab_login WHERE login = '$login' AND senha = '$senha'";
$executa_query = mysql_query($sql);

$linhas = mysql_num_rows($executa_query);

if($linhas === 1) {
  $_SESSION['login'] = $login;
  header('location: admin/cad_noticia.php');
} else {
  header('location: login.php?err=1');
}
?>