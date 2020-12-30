<?php 
include "../includes/logout_inc.php";
include "../includes/conexao.php";
?>
<html>
<head>
    <title>Nome do TCC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/CSS.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="./perfil.php">Perfil</a></li>
                
                <li><a href="../includes/logouting_inc.php">Sair</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <a href="./estoquecad.php">Criar Novo Estoque:</a>    
       
        <table class="table">
            <thead>	
                <th>Nome do produto</th>
                <th>Quantidade do produto</th>
            </thead>
            <tbody>
            <?php  
            
                $consulta = "SELECT nome_prodquimico, quantidade_prodquimico, id_prodquimico FROM cadastro_prodquimico;";
                $query = mysqli_query($conn, $consulta);
                while($array = $query->fetch_array()){ 
                    ?>
                    <tr>
                        <td><?php echo $array["nome_prodquimico"];?>        </td>
                        
                        <td><?php echo $array["quantidade_prodquimico"];?>  </td>
                        
                        
                        <td><a href="./estoqueedit.php?edit=<?php echo $array['id_prodquimico']?>"><button>Editar</button></a>     </td>
                        <td><a href="../includes/estoquedelete_inc.php?delete=<?php echo $array['id_prodquimico']?>"><button>Excluir</button></a>  </td>   
                    </tr>   
                        <?php   
                        echo "<br>";    
                }
                        ?>
            </tbody>
        </table>
    </div>
</body>
</html> 