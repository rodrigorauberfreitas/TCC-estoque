<?php

    include "../includes/logout_inc.php";
    include "../includes/conexao.php";
    
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $id = $_SESSION['id_usuario'];
    
	
    $consulta20 = "SELECT tipo_usuarios FROM usuarios WHERE id_usuarios = '$id';";

	$query20 = mysqli_query($conn, $consulta20);

    $tipo_array = $query20->fetch_array();
	$tipo = $tipo_array['tipo_usuarios'];
    
    $consulta = mysqli_query($conn, "SELECT id_usuarios, email_usuarios, senha_usuarios FROM usuarios WHERE email_usuarios='{$email}' and senha_usuarios='{$senha}'");
    $arrayid = $consulta->fetch_array();
    $id_session = $arrayid["id_usuarios"];
    //deu trabalho pegar esse id, não APAGAR
    //$_session["login"] = $login_user;

    
    
    $sql = "SELECT nome_usuarios, email_usuarios, tipo_usuarios FROM usuarios where id_usuarios = '$id'";
	$con = mysqli_query($conn, $sql);
    
    $array = $con->fetch_array();
   
?>

<html>
<head>
    <title>Perfil</title>
    
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
                <li><a href="./pginicial.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
            <ul id="mobile-navbar" class="sidenav">
                <li><a href="./pginicial.php">Voltar ao Início</a></li>
                
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
    <div class="container responsive center z-depth-5 white-text">
        <div class="row responsive blue-grey darken-4">
            <div class="foto_area">    
                <div class="col s3">
                    <br>
                    <img class="responsive-img" src="../fotos/<?php echo $id . ".jpg"; ?>">
                    <br><br>
                    <a class="waves-effect waves-light btn blue-grey darken-2" href="./fotoedit.php?id=<?php echo $id;?>"><i class="material-icons right">add_to_photos</i>Alterar Foto</a>
                </div>
            </div>

            <div class="col s6 blue-grey darken-2 center">
                <div class="log blue-grey darken-4 center"> 
                    <br>
                    <h4 class="titulo"> Perfil </h4>
                
                    <br>
                    Nome do usuário
                    <div class="borda"><?php echo $array["nome_usuarios"]; ?> </div>
                    <br><br>

                    E-mail
                    <div class="borda"><?php echo $array["email_usuarios"]; ?> </div>
                    <br><br>

                    Senha
                    <div class="borda">********** </div>
                    <br><br><br><br>
                    <a href="./perfiledit.php" class="waves-effect waves-light btn blue-grey darken-2"><i class="material-icons right">edit</i>Editar</a>
                </div> 
            </div> 

            <div class="col s3"></div>

        </div>
    </div>  
    <script src="../js/mobile.js"></script>
</body>
</html>