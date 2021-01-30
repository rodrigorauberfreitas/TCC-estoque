<?php 
    include "../includes/logout_inc.php";
    include "../includes/conexao.php";

    $id_usuario = $_SESSION['id_usuario'];
	
    $consulta2 = "SELECT tipo_usuarios FROM usuarios WHERE id_usuarios = '$id_usuario';";

	$query2 = mysqli_query($conn, $consulta2);

    $tipo_array = $query2->fetch_array();
    $tipo = $tipo_array['tipo_usuarios'];
    


    $id_prod = $_GET['id_prod'];

    $consulta = "SELECT nome_prodquimico, quantidade_prodquimico, valores_prodquimico, formula_prodquimico, observacao_prodquimico, local_prodquimico, id_foto FROM cadastro_prodquimico where id_prodquimico = '$id_prod';";
    $con = mysqli_query($conn, $consulta);
    
    $array = $con->fetch_array();

    $nome_prod = $array['nome_prodquimico'];

    $valor = 0;
    if($array['valores_prodquimico'] == 1){
        $valor = "g";
    }else if($array['valores_prodquimico'] == 2){
        $valor = "Kg";
    }else if($array['valores_prodquimico'] == 3){
        $valor = "ml";
    }else if($array['valores_prodquimico'] == 4){
        $valor = "L";
                    }
?>
<html>
<head>
    <title>Produto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="cyan lighten-4">
    <nav>
        <div class="nav-wrapper cyan">
            <a href="./pginicial.php" class="brand-logo center">QuimicStock</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./pginicial.php"><i class="material-icons left">chevron_left</i>Voltar</a></li>
            </ul>
            <ul id="mobile-navbar" class="sidenav">
                <li><a href="./pginicial.php">Voltar ao Início</a></li>
            </ul>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <br>
        <div class="container responsive center">
            <div class="row responsive cyan darken-1">
                <div class="col s3">
                    <br>
                    <form method="POST" action="./fotoprodedit.php?id_foto=<?php echo $array['id_foto'];?>">
                        <img class="responsive-img" src="../fotos_prod/<?php echo $array['id_foto']. ".jpg"; ?>">
                        <br><br>
                        <input type="hidden" name="id_prod" value="<?php echo $id_prod ?>">
                        <?php if($tipo == 0){} else{?>
                        <button type="submit" class="waves-effect waves-light btn cyan lighten-5 blue-grey-text text-darken-4"><i class="material-icons right">add_to_photos</i>Alterar Foto</button>
                         <?php }?>
                    </form>
                </div>


                <div class="col s6 cyan lighten-4 center">
                    <div class="viewprod cyan darken-1 white-text center">
                        <br>
                        Nome do Produto <br>
                        <div class="borda blue-grey-text text-darken-4"><?php echo $array["nome_prodquimico"]; ?> </div>
                        <br><br>
                        Quantidade do Produto <br>
                        <div class="borda blue-grey-text text-darken-4"><?php echo $array["quantidade_prodquimico"] . $valor; ?> </div>
                        <br><br>
                        Fórmula do Produto <br>
                        <div class="borda blue-grey-text text-darken-4"><?php echo $array["formula_prodquimico"]; ?> </div>
                        <br><br>
                        Local de Armazenamento <br>
                        <div class="borda blue-grey-text text-darken-4"><?php echo $array["local_prodquimico"]; ?> </div>
                        <br><br>
                        Observações <br>
                        <textarea class="blue-grey-text text-darken-4" disabled><?php echo $array["observacao_prodquimico"]; ?></textarea>
                        <br><br>
                        <?php if($tipo == 0){} else{?>
                        <a href="./estoqueedit.php?id_prod=<?php echo $id_prod;?>" class="waves-effect waves-light btn cyan lighten-5 blue-grey-text text-darken-4"><i class="material-icons right">edit</i>Editar</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col s3">
                    <br>
                    <br><br><br><br><br><br><br>
                    <?php if($tipo == 0){} else{?>
                    <form action="../includes/entrada_inc.php?nome_prod=<?php echo $nome_prod;?>" method="POST">
                        <div class="input-field inline">
                            <input class="blue-grey-text text-darken-4" id="entrada_inline" type="text" name="valor_entrada">
                            <label for="entrada_inline" class="white-text">Adicionar Produto</label>
                        </div>
                        <button type="submit"  class="waves-effect waves-light btn cyan lighten-5 blue-grey-text text-darken-4"><i class="material-icons right">swap_vert</i>Adicionar</button>
                    </form>
                   
                   
                    <br> <br>  
                    <form action="../includes/saida_inc.php?nome_prod=<?php echo $nome_prod;?>" method="POST">                
                        <div class="input-field inline">
                            <input class="blue-grey-text text-darken-4" id="email_inline" type="text" name="valor_saida">
                            <label for="email_inline" class="white-text">Retirar Produto</label>
                        </div>
                        <button type="submit" class="waves-effect waves-light btn cyan lighten-5 blue-grey-text text-darken-4"><i class="material-icons right">swap_vert</i>Retirar</btton>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>

    
  


    <script src="../js/mobile.js"></script>
</body>
</html>