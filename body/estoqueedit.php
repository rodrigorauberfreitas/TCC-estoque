<?php
    include "../includes/conexao.php";

    $id = $_GET['edit'];
    $consulta = "SELECT nome_prodquimico, quantidade_prodquimico, id_prodquimico FROM cadastro_prodquimico WHERE id_prodquimico = $id";
    $query = mysqli_query($conn, $consulta);
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
    <form method="POST" action="../includes/estoqueedit_inc.php">
        <div class="container">
            <table class="table">
                <thead>
                    <th>Nome do Produto</th>
                    <th>Quantidade do Produto</th>
                <thead>
                <tbody>
                    <tr>
                        <?php while($array = $query->fetch_array()) { ?>
                            <td><input type="text" name="nomeprod" value="<?php echo $array['nome_prodquimico'];?>"></td>
                            <td><input type="number" name="quantprod" value="<?php echo $array['quantidade_prodquimico'];?>"></td>
                            <input type="hidden" name="idprod" value="<?php echo $array['id_prodquimico'];?>">
                        <?php } ?>
                        <td><button type="submit">Atualizar</button>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>    
</body>
</html>