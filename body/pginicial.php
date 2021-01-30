<?php 
    include "../includes/logout_inc.php";
    include "../includes/conexao.php";

    $id_usuario = $_SESSION['id_usuario'];

    $filtro = "";
    $nome_prod = "";
  
    if(isset($_POST["nome_prodquimico"])) {
       
        $nome_prod = strtolower($_POST["nome_prodquimico"]);
        $filtro = " WHERE LOWER (nome_prodquimico) like '%$nome_prod%'";
    }
    $consulta = "SELECT nome_prodquimico, quantidade_prodquimico, id_prodquimico, id_foto, valores_prodquimico FROM cadastro_prodquimico $filtro;";
    
    $query = mysqli_query($conn, $consulta);


    $consulta2 = "SELECT tipo_usuarios FROM usuarios WHERE id_usuarios = '$id_usuario';";

    $query2 = mysqli_query($conn, $consulta2);

    $tipo_array = $query2->fetch_array();
    $tipo = $tipo_array['tipo_usuarios'];
  

?>
<html>
<head>
    <title>Produtos Cadastrados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="cyan lighten-4">
   
    <nav class="cyan" role="navigation">
        <div class="nav-wrapper">
            <a id="logo-container" href="#" class="brand-logo center">QuimicStock</a>
            <ul class="right hide-on-med-and-down">
                <?php if($tipo == 2){ ?>
                    <li><a href="./adm/controleusuarios.php">Administração de Usuários</a></li>
                <?php } ?>
                
                
                <li><a  href="./historico.php">Histórico de Transações</a></li>
                
                <li><a  href="./perfil.php">Perfil</a></li>
              
                <li><a  href="../includes/logouting_inc.php">Sair</a></li>
            </ul>
        
            <ul id="mobile-navbar" class="sidenav">
                <li><a href="./perfil.php">Perfil</a></li>
                
                <li><a href="./historico.php">Histórico de Transações</a></li>

                <?php if($tipo == 2){ ?>
                <li><a href="./adm/controleusuarios.php">Administração de Usuários</a></li>
                <?php } ?>  

                <li><a href="../includes/logouting_inc.php">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

  





    <br>
    <div class="container">
      
        <nav>
            <div class="nav-wrapper cyan lighten-5">
            <form method="POST">
                <div class="input-field">
                <input id="search" name="nome_prodquimico" class="blue-grey-text text-darken-4" type="search" placeholder="Buscar Produto" value="<?php echo $nome_prod;?>">
                <label class="label-icon" for="search"><i class="material-icons blue-grey-text text-darken-4">search</i></label>
                <i class="material-icons">close</i>
                </div>
            </form>
            </div>
        </nav>


        <p></p>
        <?php if($tipo == 0){ 
         
         }else{  ?>
         <a href="./estoquecad.php" class="waves-effect waves-light btn cyan white-text"><i class="material-icons right">add</i>Adicionar Produto</a>    

         <?php } ?>
        <div class="container">
            <div class="row">
                <br><br>

                <?php 
                while($array = $query->fetch_array()){ 
                    
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
                    
                    <div class="col s4">
                        <div class="card small cyan darken-1">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../fotos_prod/<?php echo $array['id_foto'] . ".jpg"; ?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator white-text"><?php echo $array['nome_prodquimico'];?><i class="material-icons right">more_vert</i></span>
                                <p><a class="blue-grey-text text-darken-4" href="./produto.php?id_prod=<?php echo $array['id_prodquimico'];?>">Clique para ver mais!</a></p>
                            </div>
                            <div class="card-reveal cyan darken-1">
                                <span class="card-title white-text"><?php echo $array['nome_prodquimico'];?><i class="material-icons right">close</i></span>
                                <p class="white-text">Quantidade do produto em estoque: <?php echo $array['quantidade_prodquimico']. $valor;?> <br><a class="cyan-text text-darken-4" href="./produto.php?id_prod=<?php echo $array['id_prodquimico'];?>">Clique para ver mais!</a></p></p>
                            </div>
                        </div>
                    </div>
                    
                <?php } ?>
        
            </div>
        </div>
    </div>

    <script src="../js/mobile.js"></script>
</body>
</html> 


