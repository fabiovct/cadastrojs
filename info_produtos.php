<?php
include 'header.html';
include 'Conection.php';
session_start();
if(isset($_SESSION['login'])){ 
    
$query_consulta_produtos = "SELECT * FROM produto";
$consulta_produtos = mysqli_query($conexao, $query_consulta_produtos);
//$query_consulta_produtos1 = "SELECT Fornecedor FROM cadastro_fornecedores WHERE indice";
?>

<?php while($linha = mysqli_fetch_array($consulta_produtos)){ ?>
		<?php if($linha['id_produto'] == $_GET['editar']){
                    $indice = $linha['Indice'];
                    $query_consulta_produtos1 = "SELECT Fornecedor FROM cadastro_fornecedores WHERE indice = '$indice'";
                    $consulta_produtos1 = mysqli_query($conexao, $query_consulta_produtos1);
                    
                    
                    ?>
<div class="container">

			<h1>Editar produtos</h1>
			<form method="post" action="edit_produto.php">                                

                            <div class="row">
                                <div class="col-12">
				<input type="hidden" name="id_produto" value="<?php echo $linha['id_produto']; ?>">
                                </div>
                               
				<br>
                                <div class="col-6">
				<label class="">Codigo</label><br>
				<input class="form-control" type="text" name="codigo" placeholder="" value="<?php echo $linha['codigo']; ?>">
                                </div>
				<br><br>
                                <div class="col-6">
				<label class="">Linha</label><br>
				<input class="form-control" type="text" name="linha" placeholder=""  value="<?php echo $linha['Linha']; ?>">
                                </div>
                                <br><br>
                                <div class="col-12">
				<label class="">Descrição</label><br>
                                <textarea class="form-control" rows="5" name="descricao">  <?php echo $linha['Descricao']; ?>   </textarea>
				</div>
                                <br><br>
                                
                                <?php while($linha1 = mysqli_fetch_array($consulta_produtos1)){?>
                                    
                                <label class="">Fornecedor</label><br>
				<input class="form-control" type="text" name="fornecedor" placeholder="" value="<?php echo $linha1['Fornecedor']; ?>">
				<br><br>
                                   
                                    
                                    
                                   
                                
                                <?php }   ?>
                                   
                                </div>
                            <br>
                                                           <button type="submit" class="btn btn-primary">editar</button>
<!--                                <input class="btn btn-primary" type="submit" value="Editar">-->
                                <a href="sistema_interno.php" class="btn btn-primary">Voltar</a>
                                <a href="logout.php" class="btn btn-primary">Logout</a>
			 </form>
                        </div>
		<?php } ?>
	<?php } ?>
    <?php
    }else{
        header('location:index.php');
    }

include 'footer.html';
?>




