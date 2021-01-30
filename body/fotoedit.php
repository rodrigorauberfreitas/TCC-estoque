<?php
    include "../includes/logout_inc.php";
    include "../includes/conexao.php";

	$id_usuario = $_GET['id'];
?>

<html>
<head>
		<title>Editar Foto</title>
		<link rel="stylesheet" type="text/css" href="../css/estilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta charset="utf-8">
</head>
<body class="cyan lighten-4">
<nav>
        <div class="nav-wrapper cyan">
            <a href="./pginicial.php" class="brand-logo center">QuimicStock</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./perfil.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
            <ul id="mobile-navbar" class="sidenav">
				<li><a href="./perfil.php">Voltar</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
	<br>
	<div class="container responsive center input-field">
		<div class="row responsive cyan darken-1">
			<div class="col s3"></div>
			<div class="col s6 cyan lighten-4">
				<div class="fotoedit_size cyan darken-1">
					<div class="fotoedit_margin">
						<br><br><br><br><br>
						<form action="../includes/fotoedit_inc.php" method="POST" enctype="multipart/form-data">
							<div class="file-field">
								<div class="btn cyan lighten-5 blue-grey-text text-darken-4">
									<span>Foto</span>
									<input type="file" name="imagem">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate blue-grey-text text-darken-4" type="text">
								</div>
							</div>

							<input type="hidden" name="id" value="<?php echo $id_usuario ?>">
							<button class="waves-effect waves-light btn cyan lighten-5 blue-grey-text text-darken-4" type="submit">Enviar</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col s3"></div>
		</div>
	</div>
	<script src="../js/mobile.js"></script>
</body>
</html>