<?php
include 'conection.php';
session_start();
if(isset($_SESSION['login'])){
    
    $email = $_SESSION['email'];
    $email_novo = $_POST['email'];
    $password = $_POST['password'];
    $nome_usuario = $_POST['nome_usuario'];
    $sobrenome_usuario = $_POST['sobrenome_usuario'];
    $telefone_usuario = $_POST['telefone_usuario'];
    $cpf_usuario = $_POST['cpf_usuario'];
    
    $query = "UPDATE USUARIOS SET email='$email_novo' WHERE email = '$email'";    
    mysqli_query($conexao, $query);
    }else{
    header('location:index.php');
}

session_destroy();

$query = "SELECT * FROM usuarios WHERE EMAIL = '$email_novo'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

	session_start();
        $email = $email_novo;
	$_SESSION['login'] = true;
	$_SESSION['email'] = $email;
header('location:sistema_interno.php');
}
else{
    echo 'falha';
	header('location:index.php?erro');
}

