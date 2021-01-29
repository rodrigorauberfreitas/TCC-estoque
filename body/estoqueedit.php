<?php 
   include "../includes/logout_inc.php";
   include "../includes/conexao.php";

   $id_usuario = $_SESSION['id_usuario'];
	
   $consulta2 = "SELECT tipo_usuarios FROM usuarios WHERE id_usuarios = '$id_usuario';";

	$query2 = mysqli_query($conn, $consulta2);

   $tipo_array = $query2->fetch_array();
	$tipo = $tipo_array['tipo_usuarios'];

	if($tipo == 0){
		header("location:./pginicial.php");
	}else{

    $id_prod = $_GET['id_prod'];

    $consulta = "SELECT nome_prodquimico, quantidade_prodquimico, valores_prodquimico, formula_prodquimico, observacao_prodquimico, local_prodquimico, id_foto FROM cadastro_prodquimico where id_prodquimico = '$id_prod';";
    $con = mysqli_query($conn, $consulta);
    
    $array = $con->fetch_array();

    $valor = 0;
    if($array['valores_prodquimico'] == 1){
        $valor = "g";
    }else if($array['valores_prodquimico'] == 2){
        $valor = "Kg";
    }else if($array['valores_prodquimico'] == 3){
        $valor = "ml";
    }else if($array['valores_prodquimico'] == 4){
        $valor = "L";
                    }
?>
<html>
<head>
<title>Editar Produto</title>
   <link rel="stylesheet" type="text/css" href="../css/estilos.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <meta charset="utf-8">
</head>
<body class="blue-grey darken-2">
   <nav>
        <div class="nav-wrapper blue-grey darken-4">
            <a href="./pginicial.php" class="brand-logo center">QuimicStock</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
               <li><a href="./produto.php<?php echo "?id_prod=" . $id_prod; ?>"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
            <ul id="mobile-navbar" class="sidenav">
               <li><a href="./produto.php<?php echo "?id_prod=" . $id_prod; ?>">Voltar</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

      <br>
         <div class="container responsive center z-depth-5 white-text">
            <div class="row responsive blue-grey darken-4">
               <div class="col s3">
                  <form method="POST" action="../includes/estoqueedit_inc.php">
                     <input type="hidden" name="id_prod" value="<?php echo $id_prod;?>">
               </div>

               <div class="col s6 blue-grey darken-2 center">
                  <div class="editbar blue-grey darken-4 center">
                     <div class="editbar2">
                        <br>
                        <h4 class="titulo">Edição de Produtos</h4> <br>
                        
                        Nome do produto 
                        <input class="white-text" type="text" name="nome_prod" value="<?php echo $array['nome_prodquimico']; ?>"> 
                        <br><br>
                        
                        Quantidade do produto         
                        <input class="white-text" type="number" name="quant_prod" value="<?php echo $array['quantidade_prodquimico']; ?>">
                        
                        
                        <label>
                           <input name="medida_prod" class="with-gap" type="radio" value="1" checked>
                           <span>Gramas</span>
                        </label>
                        
                        
                        <label>
                           <input name="medida_prod" class="with-gap" type="radio" value="2">
                           <span>Quilogramas</span>
                        </label>
                        
                        
                        <label>
                           <input name="medida_prod" class="with-gap" type="radio" value="3">
                           <span>Mililitros</span>
                        </label>
                        
                        
                        <label>
                           <input name="medida_prod" class="with-gap" type="radio" value="4">
                           <span>Litros</span>
                        </label>
                        <br><br><br>
                        
                        
                        <br><br>
                        
                        Fórmula do produto 
                        <input class="white-text" type="text" name="formula_prod" value="<?php echo $array['formula_prodquimico']; ?>">   <br> <br>
                        

                        Local de armazenamento
                        <input class="white-text" type="text" name="local_prod" value="<?php echo $array['local_prodquimico']; ?>">                  <br><br>
                        
                        
                        Outras observações <textarea class="white-text" name="obs_prod"><?php echo $array['observacao_prodquimico']; ?></textarea>  <br>
                       
                        <br>
                        <button class="btn waves-effect waves-light blue-grey darken-2" type="submit" name="action">Aplicar
                                 <i class="material-icons right">check</i></button>
                     </div>
                  </div>
               </div>
               <div class="col s3"></div>
            </div>   
         </div>
      </form>
 
      <script src="../js/mobile.js"></script>

</body>
</html>

<?php } ?>