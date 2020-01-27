<?php
switch ($_POST['funcao']) {
    case 'insert':
        insert();
        break;
    case 'delete':
        delete();
        break;
    case 'selectbyid':
        selectbyid();
        break;
    case 'selectbyid':
        edit();
        break;
}

function insert(){
include 'Conection.php';
session_start();
if(isset($_SESSION['login'])){
    
$codigo_produto = $_POST['codigo'];
$linha_produto = $_POST['linha'];
//$descricao_produto = $_POST['descricao'];

$query = "INSERT INTO produto(codigo, Linha) VALUES('$codigo_produto', '$linha_produto')";

mysqli_query($conexao, $query);

echo true;
    
}else{
    echo false;
}
    }


function delete(){

include 'conection.php';
session_start();
if(isset($_SESSION['login'])){  
    
$id_produto = $_POST['id'];

$query = "DELETE FROM produto WHERE id_produto = $id_produto";

mysqli_query($conexao, $query);

echo true; 
    
}else{
    echo false;
}
}

function selectbyid(){
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
}

function edit(){

}
