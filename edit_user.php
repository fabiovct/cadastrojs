<?php
include 'header.html';
include 'Conection.php';
session_start();
if(isset($_SESSION['login'])){

    $email = $_SESSION['email'];

$query1 = "SELECT * FROM usuarios WHERE EMAIL = '$email'";
$consulta1 = mysqli_query($conexao, $query1);

while($linha = mysqli_fetch_array($consulta1)){
    
    $nome_usuario = utf8_encode($linha['nome']);
    $senha_usuario = utf8_encode($linha['password']);
    $sobrenome_usuario = utf8_encode($linha['sobrenome']);
    $telefone_usuario = utf8_encode($linha['telefone']);
    $cpf_usuario = utf8_encode($linha['CPF']);
}


?>

<body>
    <div class="container  mt-4 col-4">    
        <form action='editar_dados_usuarios.php' method="POST">
          <div class="form-group">
              <h3>Email</h3>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <h3>Senha: </h3>
            <input type="text" class="form-control" id="password" name="password" value="<?php echo $senha_usuario; ?>">
          </div>
            <div class="form-group">
              <h3>Nome</h3>
            <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" value="<?php echo $nome_usuario; ?>">
          </div>
            <div class="form-group">
              <h3>Sobrenome</h3>
            <input type="text" class="form-control" id="email" name="sobrenome_usuario" aria-describedby="emailHelp" value="<?php echo $sobrenome_usuario; ?>">
          </div>
            <div class="form-group">
              <h3>Telefone</h3>
            <input type="text" class="form-control" id="email" name="telefone_usuario" aria-describedby="emailHelp" value="<?php echo $telefone_usuario; ?>">
          </div>
            <div class="form-group">
              <h3>CPF</h3>
            <input type="text" class="form-control" id="email" name="cpf_usuario" aria-describedby="emailHelp" value="<?php echo $cpf_usuario; ?>">
          </div>
            <button type="submit" class="btn btn-primary">Alterar Dados</button>
            <a href="sistema_interno.php" class="btn btn-primary">Voltar</a>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </form>
    </div>
</body>

<?php
}else{
    header('location:index.php');
}
include 'footer.html';
?>