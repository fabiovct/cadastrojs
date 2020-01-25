<?php
include 'Conection.php';
session_start();
if(isset($_SESSION['login'])){
    
$codigo_produto = $_POST['codigo'];
$linha_produto = $_POST['linha'];
$descricao_produto = $_POST['descricao'];

$query = "INSERT INTO produto(codigo, Linha, Descricao) VALUES('$codigo_produto', '$linha_produto', '$descricao_produto')";

mysqli_query($conexao, $query);

header('location:sistema_interno.php');
    
}else{
    header('location:index.php');
}