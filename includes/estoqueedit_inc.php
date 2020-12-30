<?php
    include "./conexao.php";

    $nomeprod = $_POST['nomeprod'];
    $quantprod = $_POST['quantprod'];
    $idprod = $_POST['idprod'];

    $action = "UPDATE cadastro_prodquimico SET nome_prodquimico = '$nomeprod', quantidade_prodquimico = '$quantprod' WHERE id_prodquimico = '$idprod';";
    $query = mysqli_query($conn, $action);

    header("location:../body/pginicial.php");
?>