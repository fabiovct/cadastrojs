<?php
/*if($_POST['funcao']=='insert'){
    insert();
}else{
    echo false;
}*/
switch ($_POST['funcao']) {
    case 'insert':
        insert();
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
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


function teste(){

}
