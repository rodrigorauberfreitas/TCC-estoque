<?php

    include "./conexao.php";

    $id_foto = $_POST['id'];

    $select = "SELECT id_prodquimico FROM cadastro_prodquimico WHERE id_foto ='$id_foto';";
    $query = mysqli_query($conn, $select);

    $array = $query->fetch_array();
    $id_prod = $array['id_prodquimico'];

    //echo "<h1> id= $id_usuario </h1>";
    $imagem = $_FILES["imagem"];
    $diretorio = "../fotos_prod/";
    //echo getcwd();
    
    if($imagem != NULL) {
        $nomeFinal = $id_foto.'.jpg';
       echo $imagem['tmp_name'];
        if (move_uploaded_file($imagem['tmp_name'], $diretorio . $nomeFinal)) {
        
            header("location:../body/produto.php?id_prod=$id_prod");
        }
    }
    else {
        echo"Você não realizou o upload de forma satisfatória.";
    }

?>