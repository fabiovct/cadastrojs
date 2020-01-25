<?php
if(isset($_SESSION['login'])){
$email = $_SESSION['email'];

$query1 = "SELECT * FROM usuarios WHERE EMAIL = '$email'";
$consulta1 = mysqli_query($conexao, $query1);

while($linha = mysqli_fetch_array($consulta1)){
				
//    echo '<td>'.$linha['id_usuarios'].'</td><br>';
//    echo '<td>'.$linha['nome'].'</td><br>';
//    echo '<tr><td >'.$linha['sobrenome'].'</td><br>';
//    echo '<tr><td >'.$linha['telefone'].'</td><br>';
//    echo '<tr><td >'.$linha['CPF'].'</td><br>';
    
    $nome_usuario = utf8_encode($linha['nome']);
    $sobrenome_usuario = utf8_encode($linha['sobrenome']);
    $telefone_usuario = utf8_encode($linha['telefone']);
    $cpf_usuario = utf8_encode($linha['CPF']);
}
?>
<div class="container mt-4">
    <div class="card-deck">
 <div class="card col-4" >
        <!--  <img src="..." class="card-img-top" alt="...">-->
          <div class="card-body">
                <h4 class="card-title"><?php echo $nome_usuario; echo " ".$sobrenome_usuario; ?><hr></h4>
                <p class="card-text"><?php echo "<strong>Email: </strong>". $email; ?></p>
                <p class="card-text"><?php echo "<strong>Telefone: </strong>".$telefone_usuario; ?></p>
                <p class="card-text"><?php echo "<strong>CPF: </strong>".$cpf_usuario; ?></p>
                <a href="edit_user.php" class="btn btn-primary">Editar Dados</a>
                <a href="logout.php" class="btn btn-primary">Logout</a>
          </div>
  </div>
        
         <div class="card col-8" >
        <!--  <img src="..." class="card-img-top" alt="...">-->
          <div class="card-body">
              <form action='sistema_interno.php' method="POST">
              <h4 class="card-title">Buscar Produtos<hr></h4>
            <p class="card-text"><h5>Digite o Código do Produto:</h5>
            <input  class="form-control" id="codigo_produto" name="codigo_produto"  placeholder="codigo">
            </p>
            <p class="card-text"></p>
            <p class="card-text"></p>
           <button type="submit" class="btn btn-primary">Buscar</button>
              </form>
          </div>
  </div>  
</div>  
</div>    

<div class="container mt-4">
    <div class="col-8">
<a href="create_produto.php" class="btn btn-primary">Cadastrar Novo Produto</a>
    </div>
</div>

<?php
}else{
    header('location:index.php');
}