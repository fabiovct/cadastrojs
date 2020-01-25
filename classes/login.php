<?php
include 'Conection.php';


$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);


$query = "SELECT * FROM usuarios WHERE EMAIL = '$email' and PASSWORD = '$password'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
	
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['email'] = $email;
	//exit;
//header('location:sistema_interno.php');
//echo 'logado';
echo 1;

}
else{
    //echo 'erro login';
	//header('location:index.php?erro');
	echo 0;
}

