<?php 
    
    include "conexao.php";

    $idprod = $_GET['delete'];

    $action = "DELETE from cadastro_prodquimico where id_prodquimico = '$idprod'";
    mysqli_query($conn, $action);

    header("location:../body/pginicial.php");

?>