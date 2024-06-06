<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include("cadastro_produto.php");
    ?>
    <title>Cadastro de Produto</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    <form action="cadastro_produto.php" method="POST">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>
        
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
