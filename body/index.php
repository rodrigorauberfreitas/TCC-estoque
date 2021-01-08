<html>
<head>

<title>Login e Cadastro</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="../css/CSS.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
    
    <form method="POST" action="../includes/login_inc.php">
    
        <div class="log">
            <h4>Login:</h4>
            <input type="text" name="email" placeholder="E-mail">        <br>
            <input type="password" name="senha" placeholder="Senha">     <br>
            <button type="submit">Entrar</button>                        <br><br>

            Não possui uma conta ainda? <a href=cadastro.php>Cadastre-se</a>
        </div>
    
    </form>
</body>
</html>