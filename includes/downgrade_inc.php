<?php
   include "./logout_inc.php";
   include "./conexao.php";

   $id_usuarios = $_GET['velor2'];

  // echo $id_usuarios; 

   $update = "UPDATE usuarios SET tipo_usuarios = 0 WHERE id_usuarios = '$id_usuarios';";
   $con = mysqli_query($conn, $update);

   header("location:../body/adm/controleusuarios.php");


?>