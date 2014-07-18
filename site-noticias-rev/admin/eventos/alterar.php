<?php

require '../../includes/conexao.php';

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];

$action = $_GET['action'];

switch ($action) {
  case 'insert':
    $sql = 'INSERT INTO eventos VALUES (NULL, ?, ?, ?)';
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $titulo, $data, $descricao);
    mysqli_stmt_execute($stmt);
    break;
  case 'update':
    $id = $_GET['id'];

    $sql = 'UPDATE eventos SET titulo = ?, data = ?, descricao = ? WHERE id = ?';
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssi', $titulo, $data, $descricao, $id);
    mysqli_stmt_execute($stmt);
    break;
  case 'delete':
    $id = $_GET['id'];

    $sql = 'DELETE FROM eventos WHERE id = ?';
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    break;
  default :
    header('location: cadastrar.php');
    break;
}

header('location: cadastrar.php');
