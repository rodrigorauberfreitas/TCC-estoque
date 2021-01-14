<?php 
    include "../includes/logout_inc.php";
    include "../includes/conexao.php";

    $filtro = "";
    $nome_prod = "";
  
    if(isset($_POST["nome_prodquimico"])) {
       
        $nome_prod = strtolower($_POST["nome_prodquimico"]);
        $filtro = " WHERE LOWER (nome_prodquimico) like '%$nome_prod%'";
    }
    $consulta = "SELECT nome_prodquimico, quantidade_prodquimico, id_prodquimico, id_foto FROM cadastro_prodquimico $filtro;";
    
    $query = mysqli_query($conn, $consulta);

  

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
<body class="blue-grey darken-2">
   
    <nav class="blue-grey darken-4" role="navigation">
        <div class="nav-wrapper">
            <a id="logo-container" href="#" class="brand-logo center">QuimicStock</a>
            <ul class="right hide-on-med-and-down">
                
                <li><a href="./adm/controleusuarios.php">Administração de Usuários</a></li>
                
                <li><a href="./perfil.php">Perfil</a></li>
                
                <li><a href="../includes/logouting_inc.php">Sair</a></li>
            </ul>

            <ul id="mobile-navbar" class="sidenav">
                <li><a href="./adm/controleusuarios.php">Administração de Usuários</a></li>
                    
                <li><a href="./perfil.php">Perfil</a></li>
                    
                <li><a href="../includes/logouting_inc.php">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

  





    <br>
    <div class="container">
      
        <nav>
            <div class="nav-wrapper blue-grey darken-4">
            <form method="POST">
                <div class="input-field">
                <input id="search" name="nome_prodquimico" type="search" placeholder="Buscar Produto" value="<?php echo $nome_prod;?>">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
                </div>
            </form>
            </div>
        </nav>


        <p></p>

        <a href="./estoquecad.php" class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons right">add</i>Adicionar Produto</a>    
        
        <div class="container">
            <div class="row">
                <br><br>

                <?php 
                while($array = $query->fetch_array()){ 
                    ?>
                    <div class="col s4">
                        <div class="card small">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="../fotos_prod/<?php echo $array['id_foto'] . ".jpg"; ?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><?php echo $array['nome_prodquimico'];?><i class="material-icons right">more_vert</i></span>
                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><?php echo $array['nome_prodquimico'];?><i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on. <br><a href="#">Clique para ver mais!</a></p></p>
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


