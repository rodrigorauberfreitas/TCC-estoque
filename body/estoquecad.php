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
?>

<html>
<head>
<title>Nome do TCC</title>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
              
      
      
       
     



   <link rel="stylesheet" type="text/css" href="../css/estilos.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body class="blue-grey darken-2">
      <nav>
        <div class="nav-wrapper blue-grey darken-4">
            <a href="./pginicial.php" class="brand-logo center">QuimicStock</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./pginicial.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
            <ul id="mobile-navbar" class="sidenav">
                <li><a href="./pginicial.php">Voltar ao Início</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   <br>   
   <div class="container responsive center z-depth-5 white-text">
      <div class="row responsive blue-grey darken-4">
               
         <div class="col s3">
            <form method="POST" action="../includes/estoquecad_inc.php" enctype="multipart/form-data">
               <input type="hidden" value=" " id="horas" name="horas">
         </div>
            

         <div class="col s6 blue-grey darken-2 center white-text">
            <div class="cadbar blue-grey darken-4 center white-text"> 
               <div class="cadbar2">
                  <br>
                  
                  <h4 class="titulo">Cadastro de Produtos</h4> <br>
                           
                  Nome do produto 
                  <input type="text" name="nome_prod" class="white-text"> <br><br>
                           
                  Quantidade do produto            
                  <input type="text" name="quant_prod" class="white-text">

                  
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
                  
                    
                     
                           
                  Fórmula do produto 
                  <input type="text" name="formula_prod" class="white-text">   <br><br>
                           
                  Local de armazenamento
                  <input type="text" name="local_prod" class="white-text">                  <br><br>
                  
                  Inserir foto
                  <input type="file" name="imagem"> <br><br>
                           
                  Outras observações 
                  <textarea name="obs_prod" class="white-text"></textarea>  <br><br>

                  <button class="btn waves-effect waves-light blue-grey darken-2" type="submit" name="action">Cadastrar
                  <i class="material-icons right">check</i></button>

            </form>
               </div>
            </div>
         </div>
         <div class="col s3"></div>

      </div>
   </div>  
      
 
   <script type="text/javascript" src="../js/mobile.js"></script>
</body>
</html>

<?php } ?>