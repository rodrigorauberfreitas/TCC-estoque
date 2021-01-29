<?php
   include "../includes/logout_inc.php";
   include "../includes/conexao.php";

   $id_usuario = $_SESSION['id_usuario'];
	
   $consulta2 = "SELECT tipo_usuarios FROM usuarios WHERE id_usuarios = '$id_usuario';";

   $query2 = mysqli_query($conn, $consulta2);

   $tipo_array = $query2->fetch_array();
   $tipo = $tipo_array['tipo_usuarios'];
   
   //$dia = date("d");
   //$mes = date("m");
   //$ano = date("Y");
   
   //$hora = date("H");
   //$min  = date("i"); 

   $filtro = "";
   $nomeprod_his = "";
 
   if(isset($_POST["nomeprod_historico"])) {
	  
	   $nomeprod_his = strtolower($_POST["nomeprod_historico"]);
	   $filtro = " WHERE LOWER (nomeprod_historico) like '%$nomeprod_his%'";
   }

   $consulta = "SELECT id_historico, acao_historico, quantidade_historico, valor_historico, nomeprod_historico, usuario_historico, data_historico, hora_historico FROM historico $filtro ORDER BY id_historico DESC";
   $con = mysqli_query($conn, $consulta); 

?>
<html>
<head>
<title>Histórico de Transações</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue-grey darken-2">
	<nav>
        <div class="nav-wrapper blue-grey darken-4">
            <a href="#" class="brand-logo center">QuimicStock</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./pginicial.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
            <ul id="mobile-navbar" class="sidenav">
                <li><a href="./pginicial.php">Voltar ao Início</a></li>

                <li><a href="./perfil.php">Perfil</a></li>
                <?php if($tipo == 2){ ?>
                <li><a href="./adm/controleusuarios.php">Administração de Usuários</a></li>
                <?php } ?>
                <li><a href="../includes/logouting_inc.php">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
	
		<h3 class="white-text center">Histórico de Transações</h3>
	
	<div class="container">
	
		<nav>
            <div class="nav-wrapper blue-grey darken-4">
            <form method="POST">
                <div class="input-field">
                <input id="search" name="nomeprod_historico" type="search" placeholder="Buscar Produto" value="<?php echo $nomeprod_his;?>">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
                </div>
            </form>
            </div>
        </nav>
        <br><br>
		
		<table class="striped centered">
			
			<thead class="white-text"> 	
			<th>Nome do Produto</th>
			<th>Quantidade do Produto que Entrou/Saiu</th>
			<th>Data da Transação</th>
			<th>Usuário que Realizou a Transação</th>
			<th>Tipo de Transação</th>
			</thead>

			
			<tbody>
			<?php while($dado = $con->fetch_array()){ ?>
				
                <?php 
                $idusu = $dado['usuario_historico'];
                $consultausu = "SELECT nome_usuarios FROM usuarios WHERE id_usuarios = '$idusu'";
                $con2 = mysqli_query($conn, $consultausu);
                
                $dado2 = $con2->fetch_array();
                $usuario = $dado2['nome_usuarios'];


                if($dado["valor_historico"] == 1){
						$valorprod = "g";
				}else if($dado["valor_historico"] == 2){
						$valorprod = "KG";                    
				}else if($dado["valor_historico"] == 3){
						$valorprod = "mL";
				}else if($dado["valor_historico"] == 4){
                        $valorprod = "L";
                }
				
				if($dado["acao_historico"] == 1){
					$status = "Entrada";
				}else if($dado["acao_historico"] == 2){
					$status = "Cadastro";
				}else{
                    $status = "Saída";
                }
				?>
				
			<tr>
				<td><?php echo $dado["nomeprod_historico"];?></td>
				<td><?php echo $dado["quantidade_historico"] . $valorprod;?></td>
				<td><?php echo $dado["data_historico"] . " às " . $dado["hora_historico"];?></td>
				<td><a href="./perfil2.php?id_outrousu=<?php echo $idusu;?>" class="black-text"><?php echo $usuario;?></a></td>
                <td><?php echo $status;?></td>

				
				
			</tr>
			</tbody>
				<?php } ?>



		</table>
	</div>

    <script src="../js/mobile.js"></script>
</body>
</html