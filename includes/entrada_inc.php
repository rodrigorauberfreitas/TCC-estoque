<?php
    include "./logout_inc.php";
    include "./conexao.php";

    date_default_timezone_set('America/Sao_Paulo');

    $id_session = $_SESSION['id_usuario'];

    $nome_prod = $_GET['nome_prod'];
    $entrada = $_POST['valor_entrada'];

    $entrada = str_replace(',', '.', $entrada);


    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");
   
    $data = $dia . "/" . $mes . "/" . $ano;
    
    $hora = date("H") - 1;
    $min  = date("i"); 

    $hora_atual = $hora . ":" . $min;



    $sql = "SELECT valores_prodquimico, id_prodquimico, quantidade_prodquimico FROM cadastro_prodquimico WHERE nome_prodquimico = '$nome_prod';";
    $query = mysqli_query($conn, $sql);

    $array = $query->fetch_array();

    $medida_prod = $array['valores_prodquimico']; 
    $id_prod = $array['id_prodquimico'];
    $soma_prod = $array['quantidade_prodquimico'] + $entrada;


    $sql2 = "INSERT INTO historico (acao_historico, quantidade_historico, valor_historico, nomeprod_historico, usuario_historico, data_historico, hora_historico) VALUES (1, $entrada, $medida_prod, '$nome_prod', $id_session, '$data', '$hora_atual');";
    $query2 = mysqli_query($conn, $sql2);

    if($query2){

        $sql3 = "UPDATE cadastro_prodquimico SET quantidade_prodquimico = '$soma_prod' WHERE id_prodquimico = '$id_prod';";
        $query3 = mysqli_query($conn, $sql3);

        if($query3){
            header("location:../body/produto.php?id_prod=$id_prod");    
        }
    }



?>

