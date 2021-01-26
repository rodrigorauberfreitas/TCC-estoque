<?php
   include "./logout_inc.php";
   include "./conexao.php";

   $id_usuario = $_SESSION['id_usuario'];
	
   $consulta2 = "SELECT tipo_usuarios FROM usuarios WHERE id_usuarios = '$id_usuario';";

	$query2 = mysqli_query($conn, $consulta2);

   $tipo_array = $query2->fetch_array();
	$tipo = $tipo_array['tipo_usuarios'];

	if($tipo == 2){
		

      $id_usuarios = $_GET['velor1'];

      // echo $id_usuarios; 

      $update = "UPDATE usuarios SET tipo_usuarios = 1 WHERE id_usuarios = '$id_usuarios';";
      $con = mysqli_query($conn, $update);

      header("location:../body/adm/controleusuarios.php");
      
   }else{
      header("location:./pginicial.php");
   }
?>