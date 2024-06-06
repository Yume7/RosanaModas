HTML da finalização de pedidos.

html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalização de Pedido</title>
</head>
<body>
    <h2>Finalização de Pedido</h2>
    <form action="finalizar_pedido.php" method="POST">
        <label for="cliente">Nome do Cliente:</label><br>
        <input type="text" id="cliente" name="cliente" required><br><br>
        
        <label for="endereco">Endereço de Entrega:</label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>
        
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required><br><br>
        
        <input type="submit" value="Finalizar Pedido">
    </form>
</body>
</html>
