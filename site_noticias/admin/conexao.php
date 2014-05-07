<?php
$con = mysql_connect('localhost', 'luiz', '123456') or die('Erro de conexão');

# mysql_connect - cria a conexão com o mysql
# localhost - computador local
# luiz - meu usuário
# 123456 - senha
# or die - retorna o erro especificado caso não consiga se conectar

$bd = mysql_select_db('bd_noticia', $con);

# mysql_select_db - seleciona a base de dados
# 'bd_noticia' - base de dados
# $con - é a variável que possui a conexão com o banco
?>