<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Rosana Modas</h1>
            <nav>
                <ul>
                    <li><a href="../index.php">Início</a></li>
                    <li><a href="pgs/catalogoPg.php">Produtos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Roupas Disponíveis</h2>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <!-- Formulário de Filtro -->
            <form action="exibir_produto.php" method="GET">
                <div class="feature-item">
                    <label for="categoria">Categoria:</label>
                    <select id="categoria" name="categoria">
                        <option value="camisetas">Camisetas</option>
                        <option value="calcas">Calças</option>
                        <option value="sapatos">Sapatos</option>
                        <!-- Adicione mais opções conforme necessário -->
                    </select>
                </div>

                <div class="feature-item">
                    <label for="preco_min">Preço Mínimo:</label>
                    <input type="number" id="preco_min" name="preco_min" step="0.01">
                </div>

                <div class="feature-item">
                    <label for="preco_max">Preço Máximo:</label>
                    <input type="number" id="preco_max" name="preco_max" step="0.01">
                </div>

                <div class="feature-item">
                    <input type="submit" value="Filtrar" class="btn">
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Rosana Modas. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>