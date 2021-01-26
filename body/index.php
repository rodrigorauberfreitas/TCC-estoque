<html>
<head>

<title>Login e Cadastro</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="../css/CSS.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body class="blue-grey darken-2">
    <nav>
        <div class="nav-wrapper blue-grey darken-4">
            <a href="#" class="brand-logo center">QuimicStock</a>
        </div>
    </nav>    
    <br><br><br><br>
    <form method="POST" action="../includes/login_inc.php">
        <div class="container responsive center z-depth-5 white-text">
            <div class="row responsive blue-grey darken-4">
                <div class="col s6">
                    <div class="log blue-grey darken-4">
                        <h4 class="titulo">Login</h4>
                        <input id="icon_email" class="white-text validate" type="text" name="email" placeholder="E-mail"><br>
                        <input id="icon_senha"class="white-text validate" type="password" name="senha" placeholder="Senha">     <br><br>
                        <button class="waves-effect waves-light btn blue-grey darken-2" type="submit">Entrar</button>                        <br><br>

                        Não possui uma conta ainda? Cadastre-se ao lado
                        </form>
                    </div>
                </div>
                
                <div class="col s6 bordinha">
                    <div class="log">
                        <form method="POST" action="../includes/cadastro_inc.php">
                            <h4 class="titulo">Cadastro</h4>
                            <input class="white-text" type="text" name="nome" placeholder="Nome">           <br>
                            <input class="white-text" type="text" name="emailcad" placeholder="E-mail">        <br>
                            <input class="white-text" type="password" name="senhacad" placeholder="Senha">     <br><br>
                            <button class="waves-effect waves-light btn blue-grey darken-2" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>