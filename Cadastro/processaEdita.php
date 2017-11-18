<?php
include 'conexao.php';

$id = isset($_POST['id']) == TRUE ? $_POST['id']:"";
$nome = isset($_POST['nome']) == TRUE ? $_POST['nome']:"";
$email = isset($_POST['email']) == TRUE ? $_POST['email'] : "";
$telefone = isset($_POST['telefone']) == TRUE ? $_POST['telefone'] : "";
$estado = isset($_POST['estado']) == TRUE ? $_POST['estado'] : "";
$mensagem = isset($_POST['mensagem']) == TRUE ? $_POST['mensagem'] : "";

$sql = "UPDATE cadastro SET nome='$nome', email='$email', telefone='$telefone', estado='$estado', mensagem='$mensagem' WHERE id='$id' ";
    $query = mysqli_query($link, $sql);
if(mysqli_affected_rows($link) !=0){
        echo "<script> alert('Atualizado com Sucesso!!!');
            window.location.href='usuario.php';
            </script>";
    }  
//header("location:usuario.php");
