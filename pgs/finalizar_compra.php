<?php
session_start();
$total = 0;

if (isset($_SESSION['carrinho'])) {
  $carrinho = $_SESSION['carrinho'];
} else {
  $carrinho = [];
}

foreach ($carrinho as $produto) {
  $total += $produto['preco'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finalizar Compra</title>
  <link rel="stylesheet" href="../css/style.css">
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
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h2>Finalizar Compra</h2>
    </div>
  </section>

  <section class="features">
    <div class="container">
      <h3>Produtos no Carrinho</h3>
      <div class="product-list">
        <?php foreach ($carrinho as $produto) : ?>
          <div class="product-card">
            <h3><?= htmlspecialchars($produto['nome']) ?></h3>
            <p><?= htmlspecialchars($produto['descricao']) ?></p>
            <p>Preço: R$<?= htmlspecialchars($produto['preco']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <h3>Total: R$<?= number_format($total, 2, ',', '.') ?></h3>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2024 Rosana Modas. Todos os direitos reservados.</p>
    </div>
  </footer>
</body>

</html>