<?php

    include "./conexao.php";

    $nome_prod = $_POST['nome_prod'];
    $quant_prod = $_POST['quant_prod'];
    

    $sql = "insert into cadastro_prodquimico (nome_prodquimico, quantidade_prodquimico) values ('$nome_prod', $quant_prod) " ;


    $query = mysqli_query($conn, $sql );

    if ($query){

        header("location:../body/pginicial.php");
    }
    else{
        echo "Erro ao inserir registro." . mysqli_error($conn);
    }

    mysqli_close($conn);
?> 

