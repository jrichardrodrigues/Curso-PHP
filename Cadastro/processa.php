<?php

include 'conexao.php';

$nome = isset($_POST['nome']) == TRUE ? $_POST['nome']:"";
$email = isset($_POST['email']) == TRUE ? $_POST['email'] : "";
$telefone = isset($_POST['telefone']) == TRUE ? $_POST['telefone'] : "";
$estado = isset($_POST['estado']) == TRUE ? $_POST['estado'] : "";
$mensagem = isset($_POST['mensagem']) == TRUE ? $_POST['mensagem'] : "";

$pesql = "SELECT * FROM cadastro WHERE (email = '$email')";
$perow = mysqli_query($link, $pesql);

if (mysqli_num_rows($perow) > 0){
    echo "<script> alert('Email já cadastrado!!!');
        window.location.href='index2.php';
        </script>";
} else {$sql = "INSERT INTO `cadastro`(`nome`, `email`, `telefone`, `estado`, `mensagem`) VALUES('$nome', '$email', '$telefone', '$estado', '$mensagem')";
    
    $query = mysqli_query($link, $sql);
    
    if(mysqli_affected_rows($link)!=0){
        echo "<script> alert('Enviado com Sucesso!!!');
            window.location.href='usuario.php';
            </script>";
    }  
}