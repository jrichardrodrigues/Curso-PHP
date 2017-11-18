<?php
include_once 'conexao.php';

$id = $_GET ['id'];

$sql = "DELETE FROM cadastro WHERE ID = $id";
$query = mysqli_query($link, $sql);

echo "<script> alert('O cliente foi EXCLUIDO com sucesso!!!');
      window.location.href = 'usuario.php';
      </script>";
