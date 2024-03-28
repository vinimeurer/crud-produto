
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <?php include ('config.php');?>
    <link rel="stylesheet" href="styles/produtolst.css" type="text/css">
</head>
<body>
    <a href="index.html" class="home-link">Home</a>
    <div class="container">
        <h2>Listagem de Produtos</h2>
        <form method="POST" action="produtolst.php" class="search-form">
            <input type="text" name="search_nome" placeholder="Pesquisar por nome">
            <input type="text" name="search_valor" placeholder="Pesquisar por valor">
            <input type="date" name="search_data_compra" placeholder="Pesquisar por data de compra">
            <button type="submit" name="botao" value="pesquisar">Pesquisar</button>
        </form>
        <?php
include('config.php');

// Inicializa as variáveis de pesquisa
$search_nome = "";
$search_valor = "";
$search_data_compra = "";
$result = null;

// Verifica se os parâmetros de pesquisa foram enviados por POST
if(isset($_POST['botao']) && $_POST['botao'] == "pesquisar") {
    if(!empty($_POST['search_nome'])) {
        $search_nome = $_POST['search_nome'];
    }
    if(!empty($_POST['search_valor'])) {
        $search_valor = $_POST['search_valor'];
    }
    if(!empty($_POST['search_data_compra'])) {
        $search_data_compra = $_POST['search_data_compra'];
    }

    // Monta a query SQL de acordo com os parâmetros de pesquisa
    $query = "SELECT * FROM produto WHERE 1=1";
    if(!empty($search_nome)) {
        $query .= " AND nome LIKE '%$search_nome%'";
    }
    if(!empty($search_valor)) {
        $query .= " AND valor = '$search_valor'";
    }
    if(!empty($search_data_compra)) {
        $query .= " AND data_compra = '$search_data_compra'";
    }

    // Executa a consulta SQL
    $result = mysqli_query($mysqli, $query);
}
?>

        <?php if($result) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Data de Compra</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($result) > 0) {
                        // Exibe os resultados em uma tabela
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['codigo'] . '</td>';
                            echo '<td>' . $row['nome'] . '</td>';
                            echo '<td>' . $row['qtde'] . '</td>';
                            echo '<td>' . $row['valor'] . '</td>';
                            echo '<td>' . $row['data_compra'] . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        // Se não houver resultados, exibe uma mensagem
                        echo '<tr><td colspan="5">Nenhum produto encontrado</td></tr>';
                    } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</body>
</html>
