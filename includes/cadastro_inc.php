<?php

include "./conexao.php";

$nome = $_POST['nome'];
$email = $_POST['emailcad'];
$senha = $_POST ['senhacad'];
$senha = md5($senha);
$sql = "insert into usuarios  (nome_usuarios, email_usuarios, senha_usuarios) values ('$nome'  , '$email', '$senha')";


$query = mysqli_query($conn, $sql );

if ($query){

	header("location:../body/");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($conn);
}

mysqli_close($conn);
?> 

