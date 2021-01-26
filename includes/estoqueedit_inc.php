<?php
    include "./logout_inc.php";
    include "./conexao.php";

    $id_prod = $_POST['id_prod'];
    $nome_prod = $_POST['nome_prod'];
    $quant_prod = $_POST['quant_prod'];
    $medida_prod = $_POST['medida_prod'];
    $formula_prod = $_POST['formula_prod'];
    $local_prod = $_POST['local_prod'];
    $obs_prod = $_POST['obs_prod'];

    $action = "UPDATE cadastro_prodquimico SET nome_prodquimico = '$nome_prod', quantidade_prodquimico = '$quant_prod', valores_prodquimico = '$medida_prod', formula_prodquimico = '$formula_prod', local_prodquimico = '$local_prod', observacao_prodquimico = '$obs_prod' WHERE id_prodquimico = '$id_prod';";
    $query = mysqli_query($conn, $action);

    header("location:../body/produto.php?id_prod=$id_prod");
?>