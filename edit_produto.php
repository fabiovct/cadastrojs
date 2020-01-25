<?php
include 'Conection.php';
session_start();

if(isset($_SESSION['login'])){ 
    $id_produto = $_POST['id_produto'];
    $codigo = $_POST['codigo'];
    $linha = $_POST['linha'];
    $descricao = $_POST['descricao'];
    
    
    
$query_edit_produto = "UPDATE produto SET codigo='$codigo', Linha='$linha', Descricao='$descricao' WHERE id_produto = '$id_produto'";    
 mysqli_query($conexao, $query_edit_produto);

 
 
 
 header('location:sistema_interno.php');
 
}else{
    header('location:index.php');
}