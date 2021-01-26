<?php
    include "./logout_inc.php";
    include "./conexao.php";

    date_default_timezone_set('America/Sao_Paulo');
    
    $id_session = $_SESSION['id_usuario'];


    $nome_prod = $_POST['nome_prod'];
    $quant_prod = $_POST['quant_prod'];
    $medida_prod = $_POST['medida_prod'];
    $formula_prod = $_POST['formula_prod'];
    $local_prod = $_POST['local_prod'];
    $obs_prod = $_POST['obs_prod'];

    $horas = $_POST['horas'];

    $quant_prod = str_replace(',', '.', $quant_prod);

    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");
   
    $data = $dia . "/" . $mes . "/" . $ano;
    
    $hora = date("H") - 1;
    $min  = date("i"); 

    $hora_atual = $hora . ":" . $min;

    $first_sql = "SELECT id_foto FROM cadastro_prodquimico";
    $con = mysqli_query($conn, $first_sql);
    
    //id para criar foto
    $soma = 1;
    while($array_foto = $con->fetch_array()){
        if($array_foto['id_foto'] >= $soma){
            $soma = $array_foto['id_foto'] + 1;
        }
    }

    $sql = "INSERT INTO cadastro_prodquimico (nome_prodquimico, quantidade_prodquimico, valores_prodquimico, formula_prodquimico, local_prodquimico, observacao_prodquimico, id_foto) VALUES ('$nome_prod', $quant_prod, $medida_prod, '$formula_prod', '$local_prod', '$obs_prod', $soma);" ;
    $sql2 = "INSERT INTO historico (acao_historico, quantidade_historico, valor_historico, nomeprod_historico, usuario_historico, data_historico, hora_historico) VALUES (2, $quant_prod, $medida_prod, '$nome_prod', $id_session, '$data', '$hora_atual');";

    $query = mysqli_query($conn, $sql);
    $query2 = mysqli_query($conn, $sql2);

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

