<?php

include 'conection.php';
session_start();
if(isset($_SESSION['login'])){
    
    
    $id_produto = $_GET['id_produto'];

$query = "DELETE FROM produto WHERE id_produto = $id_produto";

mysqli_query($conexao, $query);

header('location:sistema_interno.php');  
    
}else{
    header('location:index.php');
}

