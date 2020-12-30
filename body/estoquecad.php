<html>
<head>
<title>Nome do TCC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/CSS.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <form method="POST" action="../includes/estoquecad_inc.php">
        <div class="container">
            Nome do produto: <input type="text" name="nome_prod">                  <br>
            Quantidade do produto em ml: <input type="number" name="quant_prod">   <br>
            <button type="submit">Criar</button>
        </div>
    </form>
</body>
</html>