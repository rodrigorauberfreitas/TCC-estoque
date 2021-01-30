<?php

    include "../includes/logout_inc.php";
    include "../includes/conexao.php";
    
    $id_session = $_SESSION['id_usuario'];
 
    
    
    $sql = "SELECT nome_usuarios, email_usuarios, senha_usuarios, tipo_usuarios FROM usuarios where id_usuarios = '$id_session'";
	$con = mysqli_query($conn, $sql);
    
    $array = $con->fetch_array();
 
?>

<html>
<head>
<title>Editar Perfil</title>
    
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <meta charset="utf-8">
</head>
<body class="cyan lighten-4">
<nav>
        <div class="nav-wrapper cyan">
            <a href="./pginicial.php" class="brand-logo center">QuimicStock</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./perfil.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
            <ul id="mobile-navbar" class="sidenav">
                <li><a href="./perfil.php">Voltar</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <br>
    <div class="container cyan darken-1 responsive center white-text input-field">
        <div class="row responsive cyan darken-1">
            <div class="col s3"></div>

            <div class="col s6 cyan lighten-4 center">
                <div class="perfil_edit cyan darken-1 white-text"> 
                    <div class="perfil_edit2">
                        <form method="POST" action="../includes/perfiledit_inc.php" class="form-inline">
                            
                            <h4 class="titulo"> Perfil </h4>
                            
                            <br>
                            Nome do usuário
                            <input class="blue-grey-text text-darken-4" type="text" name="nome_usuarios" value="<?php echo $array["nome_usuarios"]; ?>">
                            <br><br>

                            E-mail
                            <input class="blue-grey-text text-darken-4" type="email" name="email_usuarios" value="<?php echo $array["email_usuarios"]; ?>"> 
                            <br><br>

                            Senha
                            <input class="blue-grey-text text-darken-4" name="senha_usuarios" type="password">
                            <br><br><br><br>
                                
                            <input type="hidden" name="id_usuarios" value="<?php echo $id_session;?>">

                            <button class="btn waves-effect waves-light cyan lighten-5 blue-grey-text text-darken-4" type="submit" name="action">Aplicar
                            <i class="material-icons right">check</i></button>

                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col s3"></div>
        </div>
    </div>   
    <script src="../js/mobile.js"></script>
</body>
</html>