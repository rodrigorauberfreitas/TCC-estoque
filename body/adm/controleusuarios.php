<?php
   include "../../includes/logout_inc.php";
   include "../../includes/conexao.php";

	
   $filtro = "";
   $nome_usu = "";
 
   if(isset($_POST["nome_usuarios"])) {
	  
	   $nome_usu = strtolower($_POST["nome_usuarios"]);
	   $filtro = " WHERE LOWER (nome_usuarios) like '%$nome_usu%'";
   }

   $consulta = "SELECT nome_usuarios, email_usuarios, id_usuarios, tipo_usuarios, ativo_usuarios FROM usuarios $filtro";
   $con = mysqli_query($conn, $consulta); 

?>
<html>
<head>
<title>Administração de Usuários</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue-grey darken-2">
	<nav>
        <div class="nav-wrapper blue-grey darken-4">
        <a href="#" class="brand-logo center">QuimicStock</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="../pginicial.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
        </ul>
        </div>
	</nav>
	<center>
		<h3 class="white-text">Administração de Usuários</h3>
	</center>
	<div class="container">
	
	<nav>
            <div class="nav-wrapper blue-grey darken-4">
            <form method="POST">
                <div class="input-field">
                <input id="search" name="nome_usuarios" type="search" placeholder="Buscar Usuário" value="<?php echo $nome_usu;?>">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
                </div>
            </form>
            </div>
        </nav>
		
		<table class="striped">
			
			<thead>	
			<th>Nome</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Status da Conta</th>
			<th>Tornar Professor</th>
			<th>Tornar Aluno</th>
			<th>Ativar/Desativar Conta</th>
			</thead>

			
			<tbody>
			<?php while($dado = $con->fetch_array()){ ?>
				
				<?php if($dado["tipo_usuarios"] == 0){
						$tipousu = "Aluno";
				}else if($dado["tipo_usuarios"] == 1){
						$tipousu = "Professor";                    
				}else {
						$tipousu = "Administrador";
				}
				
				if($dado["ativo_usuarios"] == 1){
					$status = "Ativo";
				}else{
					$status = "Desativado";
				}
				?>
				
			<tr>
				<td><?php echo $dado["nome_usuarios"];?></td>
				<td><?php echo $dado["email_usuarios"];?></td>
				<td><?php echo $tipousu;?></td>
				<td><?php echo $status;?></td>

				<?php if($dado["ativo_usuarios"] == 1){
						?>
						<td><a href="../../includes/upgrade_inc.php?velor1=<?php echo $dado['id_usuarios']?>"class="waves-effect waves-light btn black">Upgrade</a></td> <br>
						<td><a href="../../includes/downgrade_inc.php?velor2=<?php echo $dado['id_usuarios']?>"class="waves-effect waves-light btn black">Downgrade</a></td> <br>
						<td><a href="../../includes/desativar_inc.php?velor3=<?php echo $dado['id_usuarios']?>"class="waves-effect waves-light btn black">Desativar</a></td>
					<?php	
				}else {
					?>
					<td><a href="../../includes/upgrade_inc.php?velor1=<?php echo $dado['id_usuarios']?>"class="waves-effect waves-light btn black">Upgrade</a></td> <br>
					<td><a href="../../includes/downgrade_inc.php?velor2=<?php echo $dado['id_usuarios']?>"class="waves-effect waves-light btn black">Downgrade</a></td> <br>
					<td><a href="../../includes/ativar_inc.php?velor3=<?php echo $dado['id_usuarios']?>"class="waves-effect waves-light btn black">Ativar</a></td>
					<?php
				} 
				?>
				
			</tr>
			</tbody>
				<?php } ?>



		</table>
	</div>


</body>
</html