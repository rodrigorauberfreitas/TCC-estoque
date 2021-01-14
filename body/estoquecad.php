

<html>
<head>
<title>Nome do TCC</title>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
      
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>

    <link rel = "stylesheet" href = "../css/estilos.css">
</head>
<body class="blue-grey darken-2">
   <nav>
        <div class="nav-wrapper blue-grey darken-4">
        <a href="#" class="brand-logo center">QuimicStock</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="./pginicial.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
        </ul>
        </div>
	</nav>
 
      <form method="POST" action="../includes/estoquecad_inc.php" enctype="multipart/form-data">
         <div class="container white-text">
            <div class="row">
               <div class="cadbar blue-grey darken-4">
                  <div class="center-text">
                    <h4 class="titulo">Cadastro de Produtos</h4> <br>
                     <div class="col s7 center">
                        Nome do produto <input type="text" name="nome_prod"> 
                     </div>  <br>
                     
                     Quantidade do produto
                     <div class="col s7">             
                         <input type="number" name="quant_prod">
                     </div>
                     <div class="col s5"> 
                        <select id="medidas" name="medida_prod">
                           <option value="1" selected>Gramas (g)</option>
                           <option value="2">Quilogramas (KG)</option>
                           <option value="3">Mililitros (mL)</option>
                           <option value="4">Litros (L)</option>
                        </select>
                     </div>
                     
                     <br><br>
                     <div class="col s7 center">
                        Fórmula do produto <input type="text" name="formula_prod">   <br>
                     </div>
                     Local de armazenamento
                     <div class="col s7">
                         <input type="text" name="local_prod">                  <br>
                     </div>
                     Inserir foto
                     <input type="file" name="imagem">
                     <br>
                     Outras observações <textarea name="obs_prod"></textarea>  <br>
                     <button class="btn waves-effect waves-light blue-grey darken-2" type="submit" name="action">Cadastrar
                              <i class="material-icons right">check</i></button>
                  </div>
               </div>
            </div>   
         </div>
      </form>
 

</body>
</html>