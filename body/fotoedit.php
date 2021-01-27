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
<body class="blue-grey darken-2">
<nav>
        <div class="nav-wrapper blue-grey darken-4">
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
	<div class="container responsive center z-detph-5">
		<div class="row responsive blue-grey darken-4">
			<div class="col s3"></div>
			<div class="col s6 blue-grey darken-2">
				<div class="fotoedit_size blue-grey darken-4">
					<div class="fotoedit_margin">
						<br><br><br>
						<form action="../includes/fotoedit_inc.php" method="POST" enctype="multipart/form-data">
							<div class="file-field input-field">
								<div class="btn blue-grey darken-2">
									<span>Foto</span>
									<input type="file" name="imagem">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate white-text" type="text">
								</div>
							</div>

							<input type="hidden" name="id" value="<?php echo $id_usuario ?>">
							<button class="waves-effect waves-light btn blue-grey darken-2" type="submit">Enviar</button>
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