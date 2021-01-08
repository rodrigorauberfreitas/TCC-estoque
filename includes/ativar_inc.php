<?php
   include "./logout_inc.php";
   include "./conexao.php";

   $id_usuarios = $_GET['velor3'];

  // echo $id_usuarios; 

   $update = "UPDATE usuarios SET ativo_usuarios = 1 WHERE id_usuarios = '$id_usuarios';";
   $con = mysqli_query($conn, $update);

   header("location:../body/adm/controleusuarios.php");


?>