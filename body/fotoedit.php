<?php
    include "../includes/logout_inc.php";
    include "../includes/conexao.php";

	$id_usuario = $_GET['id'];
?>

<html>
<head>
		<title>Upload de imagens com PHP</title>
		<meta charset="utf-8"/>
</head>
<body>
	<form action="../includes/fotoedit_inc.php" method="POST" enctype="multipart/form-data">
		<label for="imagem">Imagem:</label>
		<input type="file" name="imagem"/>
		<br/>
		<input type="hidden" name="id" value="<?php echo $id_usuario ?>">
		<input type="submit" value="Enviar"/>
	</form>
</body>
</html>