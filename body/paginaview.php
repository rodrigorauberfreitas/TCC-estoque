<?php 
    include "../includes/logout_inc.php";
    include "../includes/conexao.php";

    query

?>
<html>
<head>
    <title>Produtos Cadastrados</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue-grey darken-2">
    <nav>
        <div class="nav-wrapper blue-grey darken-4">
            <a href="#" class="brand-logo center">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                
                <li><a href="./adm/controleusuarios.php">Administração de Usuários</a></li>
                
                <li><a href="./perfil.php">Perfil</a></li>
                
                <li><a href="../includes/logouting_inc.php">Sair</a></li>
            </ul>
        </div>
    </nav>


    <br>
    <div class="container">
        <a href="./estoquecad.php" class="waves-effect waves-light btn blue-grey darken-4"><i class="material-icons right">add_circle</i>Adicionar Produto </a>    
       
        <div class="container">
        <div class="row">
        <br><br>

            <?php 
            $i = 10;
            while($i < 15){ ?>
             <div class="col s4">
            <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="../imagens/imagem1.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div> </div>
            <?php $i++;}; ?>
       
        </div>
    </div>
</body>
</html> 






<?php  
            
                $consulta = "SELECT nome_prodquimico, quantidade_prodquimico, id_prodquimico FROM cadastro_prodquimico;";
                $query = mysqli_query($conn, $consulta);
                while($array = $query->fetch_array()){ 
                    ?>