<?php
 include 'Conection.php';
 session_start();
 if(isset($_SESSION['login'])){
     $id_produto = $_POST['id_produto'];
//Consultando banco de dados
 $qryLista = mysqli_query($conexao, "SELECT * FROM produto WHERE id_produto=$id_produto");    
 while($resultado = mysqli_fetch_assoc($qryLista)){
     $vetor[] = array_map('utf8_encode', $resultado); 
 }    
 //Passando vetor em forma de json
 echo json_encode($vetor);
 }