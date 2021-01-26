<?php
    include "./logout_inc.php";
    include "./conexao.php";

    $nome_usuarios  = $_POST['nome_usuarios'];
    $email_usuarios = $_POST['email_usuarios'];
    $senha_usuarios = $_POST['senha_usuarios'];
    $id_usuarios    = $_POST['id_usuarios'];

    $senha_usuarios = md5($senha_usuarios);

   // echo $nome_usuarios . $email_usuarios . $senha_usuarios . $id_usuarios;

    $action = "UPDATE usuarios SET nome_usuarios = '$nome_usuarios', email_usuarios = '$email_usuarios', senha_usuarios = '$senha_usuarios' WHERE id_usuarios = '$id_usuarios';";
    $query = mysqli_query($conn, $action);

    header("location:../body/perfil.php");
?>