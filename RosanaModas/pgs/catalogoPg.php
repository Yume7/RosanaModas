<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h2>Roupas Disponíveis</h2>
    
    <!-- Formulário de Filtro -->
    <form action="" method="GET">
        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria">
            <option value="camisetas">Camisetas</option>
            <option value="calcas">Calças</option>
            <option value="sapatos">Sapatos</option>
            <!-- Adicione mais opções conforme necessário -->
        </select>
        
        <label for="preco_min">Preço Mínimo:</label>
        <input type="number" id="preco_min" name="preco_min" step="0.01">
        
        <label for="preco_max">Preço Máximo:</label>
        <input type="number" id="preco_max" name="preco_max" step="0.01">
        
        <input type="submit" value="Filtrar">
    </form>
    
