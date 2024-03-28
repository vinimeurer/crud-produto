<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Produto</title>
    <?php include ('config.php');?>
    <link rel="stylesheet" href="styles/produtoup.css" type="text/css">
</head>
<body>
    <a href="index.html" class="home-link">Home</a>
    <div class="container">
        <h2>Atualização de Produto</h2>
        <?php
        include('config.php');

        // Verifica se o formulário foi submetido
        if(isset($_POST['botao']) && $_POST['botao'] == "atualizar") {
            // Inicializa as variáveis de atualização
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $qtde = $_POST['qtde'];
            $valor = $_POST['valor'];
            $data_compra = $_POST['data_compra'];

            // Monta a query SQL de atualização
            $query = "UPDATE produto SET nome='$nome', qtde='$qtde', valor='$valor', data_compra='$data_compra' WHERE codigo='$codigo'";

            // Executa a query SQL de atualização
            mysqli_query($mysqli, $query) or die ("Erro ao atualizar o produto");
        }
        ?>

        <!-- Formulário de atualização de produto -->
        <form method="POST" action="produtoup.php" class="form">
            <div class="form-group">
                <input type="text" name="codigo" placeholder="Código do Produto" required>
            </div>
            <div class="form-group">
                <input type="text" name="nome" placeholder="Novo Nome do Produto" required>
            </div>
            <div class="form-group">
                <input type="number" name="qtde" placeholder="Nova Quantidade" required>
            </div>
            <div class="form-group">
                <input type="number" name="valor" placeholder="Novo Valor" required>
            </div>
            <div class="form-group">
                <input type="date" name="data_compra" placeholder="Nova Data de Compra" required>
            </div>
            <div class="form-group">
                <button type="submit" value="atualizar" name="botao">Atualizar Produto</button>
            </div>
        </form>
    </div>
</body>
</html>
