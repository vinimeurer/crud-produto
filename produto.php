<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <?php include ('config.php');?>
    <link rel="stylesheet" href="styles/produto.css" type="text/css">
    <style>
        .top-left-link {
        position: fixed;
        top: 20px;
        left: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
        }   

        .top-left-link:hover {
        background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div>
        <a href="index.html" class="top-left-link">Voltar para o início</a> <!-- Link adicionado -->
    </div>
    
    <div class="container">
        <form class="form" action="produto.php" method="post" name="produto">
            <h2>Cadastro de Produto</h2>
            <div class="form-group">
                <input type="text" name="nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <input type="number" name="qtde" placeholder="Quantidade" required>
            </div>
            <div class="form-group">
                <input type="number" name="valor" placeholder="Valor" required>
            </div>

            <div class="form-group">
                <input type="date" name="data_compra" placeholder="Data de Compra" required>
            </div>
            <div class="form-group">
                <button type="submit" value="cadastrar" name="botao">Cadastrar</button>
            </div>
        </form>
    </div>
    <?php
        if (@$_POST['botao'] == "cadastrar") 
	        {
		
		        $nome = $_POST['nome'];
		        $qtde = $_POST['qtde'];
		        $valor = $_POST['valor'];
		        $data_compra = $_POST['data_compra'];
		
		        $insere = "INSERT into produto (nome, qtde, valor, data_compra) VALUES ('$nome', '$qtde', '$valor', '$data_compra')";
		        mysqli_query($mysqli, $insere) or die ("Não foi possivel inserir os dados");
	        }

        ?>

    

</body>
</html>
