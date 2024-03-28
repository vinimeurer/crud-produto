<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Produto</title>
    <?php include ('config.php');?>
    <link rel="stylesheet" href="styles/produtodel.css" type="text/css">
</head>
<body>
    <a href="index.html" class="home-link">Home</a>
    <div class="container">
        <h2>Exclusão de Produto</h2>
        <?php
        include('config.php');

        // Verifica se o formulário foi submetido
        if(isset($_POST['botao']) && $_POST['botao'] == "excluir") {
            // Recebe o código do produto a ser excluído
            $codigo = $_POST['codigo'];

            // Monta a query SQL de exclusão
            $query = "DELETE FROM produto WHERE codigo='$codigo'";

            // Executa a query SQL de exclusão
            mysqli_query($mysqli, $query) or die ("Erro ao excluir o produto");
            echo "Produto excluído com sucesso!";
        }
        ?>

        <!-- Formulário de exclusão de produto -->
        <form method="POST" action="produtodel.php" class="form">
            <div class="form-group">
                <input type="text" name="codigo" placeholder="Código do Produto a Excluir" required>
            </div>
            <div class="form-group">
                <button type="submit" value="excluir" name="botao">Excluir Produto</button>
            </div>
        </form>
    </div>
</body>
</html>
