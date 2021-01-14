<?php

    include "./conexao.php";

    $nome_prod = $_POST['nome_prod'];
    $quant_prod = $_POST['quant_prod'];
    $medida_prod = $_POST['medida_prod'];
    $formula_prod = $_POST['formula_prod'];
    $local_prod = $_POST['local_prod'];
    $obs_prod = $_POST['obs_prod'];

    

    $first_sql = "SELECT id_foto FROM cadastro_prodquimico";
    $con = mysqli_query($conn, $first_sql);
    
    //id temporário para criar foto
    $soma = 1;
    while($array_foto = $con->fetch_array()){
        if($array_foto['id_foto'] >= $soma){
            $soma = $array_foto['id_foto'] + 1;
        }
    }

    $sql = "insert into cadastro_prodquimico (nome_prodquimico, quantidade_prodquimico, valores_prodquimico, formula_prodquimico, local_prodquimico, observacao_prodquimico, id_foto) values ('$nome_prod', $quant_prod, $medida_prod, '$formula_prod', '$local_prod', '$obs_prod', $soma) " ;


    $query = mysqli_query($conn, $sql);

    if ($query){

        $imagem = $_FILES["imagem"];
        $diretorio = "../fotos_prod/";
        //echo getcwd();
        
        if($imagem != NULL) {
            $nomeFinal = $soma.'.jpg';
           echo $imagem['tmp_name'];
            if (move_uploaded_file($imagem['tmp_name'], $diretorio . $nomeFinal)) {
            
                header("location:../body/pginicial.php");    
            }
        }
        else {
            echo"Você não realizou o upload de forma satisfatória.";
        }






        
    }
    else{
        echo "Erro ao inserir registro." . mysqli_error($conn);
    }

    mysqli_close($conn);
?> 

