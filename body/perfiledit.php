<?php

    include "../includes/logout_inc.php";
    include "../includes/conexao.php";
    
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    
    $consulta = mysqli_query($conn, "SELECT id_usuarios, email_usuarios, senha_usuarios FROM usuarios WHERE email_usuarios='{$email}' and senha_usuarios='{$senha}'");
    $arrayid = $consulta->fetch_array();
    $id_session = $arrayid["id_usuarios"];
    
    //deu trabalho pegar esse id, não APAGAR
    //$_session["login"] = $login_user;
    
    
    
    $sql = "SELECT nome_usuarios, email_usuarios, tipo_usuarios FROM usuarios where id_usuarios = '$id_session'";
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
<body class="nav-wrapper blue-grey darken-2">
    <nav>
        <div class="nav-wrapper blue-grey darken-4">
            <a href="#" class="brand-logo center">QuimicStock</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./perfil.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
        </div>
	</nav>
    <div class="container blue-grey darken-2">
        <div class="log blue-grey darken-4"> 
            <div class="center-text">
            <form method="POST" action="../includes/perfiledit_inc.php" class="form-inline">
                <center><h4 class="titulo"> Perfil </h4>
            
                    <br>
                    <div class="borda2">Nome do usuário</div>
                    <input type="text" name="nome_usuarios" value="<?php echo $array["nome_usuarios"]; ?>">
                    <br><br>

                    E-mail
                    <input type="text" name="email_usuarios" value="<?php echo $array["email_usuarios"]; ?>"> 
                    <br><br>

                    Senha
                    <input name="senha_usuarios" type="password" value="<?php echo $senha;?>">
                    <br><br><br><br>
                    
                    <input type="hidden" name="id_usuarios" value="<?php echo $arrayid['id_usuarios'];?>">

                    <button class="btn waves-effect waves-light blue-grey darken-2" type="submit" name="action">Aplicar
                    <i class="material-icons right">check</i></button>

                </center>
            </form>
    </div>   
</body>
</html>