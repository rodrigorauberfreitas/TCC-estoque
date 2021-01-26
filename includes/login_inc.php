<?php 

   session_start();
   include_once "./conexao.php";
   $email = $_POST["email"];
   $senha = $_POST["senha"];

   $senha = md5($senha);
   //echo $email. $senha;
  if(empty($email) or empty($senha)){
    $_SESSION['ERROS'] = "Campos não podem se nulos";
   	header('location:../body/');
   	exit();

   }	else{ 
      $email = mysqli_escape_string($conn,$email);
       $senha  = mysqli_escape_string($conn,$senha);
        $query = "SELECT nome_usuarios, id_usuarios, email_usuarios, senha_usuarios, tipo_usuarios, ativo_usuarios from usuarios where email_usuarios = '{$email}' and senha_usuarios = '{$senha}'";
         
        $result = mysqli_query($conn, $query);
        
         $arrayid = $result->fetch_array();


         if($arrayid['ativo_usuarios'] == 1){

         $id = $arrayid['id_usuarios'];

        $row = mysqli_num_rows($result);
        var_dump(mysqli_fetch_assoc($result)); 

        
   if ($row == 1){
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      $_SESSION['id_usuario'] = $id;
       
      //echo $email . $senha;
     

      header('location:../body/pginicial.php'); //usuario logado
     
     
   }else{
   
   $_SESSION['ERROS'] = "Email ou Senha incorretos";
   header('location:../body/');
   
   }
 }else{
   header('location:../body/');

}
}

 ?>