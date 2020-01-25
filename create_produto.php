<?php
include 'header.html';
include 'Conection.php';
session_start();
if(isset($_SESSION['login'])){



?>

<body>
    <div class="container  mt-4 col-4">    
        <form action='insert_product_bd.php' method="POST">
          <div class="form-group">
              <h3>Codigo</h3>
            <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <h3>Linha</h3>
            <input type="text" class="form-control" id="linha" name="linha">
          </div>
            <div class="form-group">
              <h3>Descrição</h3>
            <input type="text" class="form-control" id="descricao" name="descricao">
          </div>         
            <button type="submit" class="btn btn-primary">Inserir Novo Registro</button>
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

