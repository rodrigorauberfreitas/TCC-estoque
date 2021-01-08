<?php

    include "./conexao.php";

    $id_usuario = $_POST['id'];
    echo "<h1> id= $id_usuario </h1>";
    $imagem = $_FILES["imagem"];
    $diretorio = "../fotos/";
    //echo getcwd();
    
    if($imagem != NULL) {
        $nomeFinal = $id_usuario.'.jpg';
       echo $imagem['tmp_name'];
        if (move_uploaded_file($imagem['tmp_name'], $diretorio . $nomeFinal)) {
        
            header("location:../body/perfil.php");
        }
    }
    else {
        echo"Você não realizou o upload de forma satisfatória.";
    }

?>