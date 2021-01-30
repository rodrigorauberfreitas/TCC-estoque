<html>
<head>

<title>Login e Cadastro</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="../css/CSS.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body class="cyan lighten-4">
    <nav>
        <div class="nav-wrapper cyan">
            <a href="#" class="brand-logo center">QuimicStock</a>
        </div>
    </nav>    
    <br><br><br><br>
    <form method="POST" action="../includes/login_inc.php">
        <div class="container responsive center z-depth-5 white-text">
            <div class="row responsive cyan darken-1">
                <div class="col s6">
                    <div class="log cyan darken-1 input-field">
                        <h4 class="titulo">Login</h4>
                        <input id="icon_email" class="black-text" type="text" name="email" placeholder="E-mail"><br>
                        <input id="icon_senha"class="black-text" type="password" name="senha" placeholder="Senha">     <br><br>
                        <button class="waves-effect waves-light btn cyan lighten-5 blue-grey-text text-darken-4" type="submit">Entrar</button>                        <br><br>

                        Não possui uma conta ainda? Cadastre-se ao lado
                        </form>
                    </div>
                </div>
                
                <div class="col s6 bordinha">
                    <div class="log input-field">
                        <form method="POST" action="../includes/cadastro_inc.php">
                            <h4 class="titulo">Cadastro</h4>
                            <input class="black-text" type="text" name="nome" placeholder="Nome">           <br>
                            <input class="black-text" type="text" name="emailcad" placeholder="E-mail">        <br>
                            <input class="black-text" type="password" name="senhacad" placeholder="Senha">     <br><br>
                            <button class="waves-effect waves-light btn cyan lighten-5 blue-grey-text text-darken-4" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>