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
<title>Nome do TCC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/CSS.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="">
        Nome: <?php echo $array["nome_usuarios"]; ?>
        </div>
    
    
    </div>

</body>
</html>