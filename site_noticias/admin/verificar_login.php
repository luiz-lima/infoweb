<?php
session_start(); # inicia a sessão

if($_SESSION['login'] == "") {
  header("location: http://192.168.56.101/site_noticias/login.php");
}