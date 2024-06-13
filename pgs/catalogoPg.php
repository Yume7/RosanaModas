<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1>Rosana Modas</h1>
            <nav>
                <ul>
                    <li><a href="../index.php">Início</a></li>
                    <li><a href="catalogoPg.php">Produtos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="finalizar_compra.php" class="btn">Finalizar Compra</a></li>
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
            <div class="flex-container">
                <!-- Formulário de Filtro -->
                <form id="filter-form">
                    <div class="feature-item">
                        <label for="categoria">Categoria:</label>
                        <select id="categoria" name="categoria">
                            <option value="">Todas</option>
                            <option value="camisetas">Camisetas</option>
                            <option value="calcas">Calças</option>
                            <option value="sapatos">Sapatos</option>
                            <option value="vestidos">Vestidos</option>
                            <option value="jaquetas">Jaquetas</option>
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

                <!-- Lista de Produtos -->
                <div class="products" id="product-list">
                    <!-- Produtos serão exibidos aqui -->
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Rosana Modas. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Carregar todos os produtos ao carregar a página
            $.ajax({
                url: 'exibir_produto.php',
                type: 'GET',
                success: function(data) {
                    $("#product-list").html(data);
                }
            });

            // Filtrar produtos ao enviar o formulário
            $("#filter-form").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: 'exibir_produto.php',
                    type: 'GET',
                    data: $(this).serialize(),
                    success: function(data) {
                        $("#product-list").html(data);
                    }
                });
            });

            // Função para adicionar produtos ao carrinho
            $(document).on('click', '.add-to-cart', function() {
                const productId = $(this).data('id');
                $.ajax({
                    url: 'adicionar_ao_carrinho.php',
                    type: 'POST',
                    data: { id: productId },
                    success: function(response) {
                        alert('Produto adicionado ao carrinho');
                    }
                });
            });
        });
    </script>
</body>

</html>
