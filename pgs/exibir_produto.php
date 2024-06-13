<?php
// Inclua o arquivo que estabelece a conexão com o banco de dados
require_once 'connect.php';

// Verifique se a variável $conn está definida
if (!isset($conn)) {
    die('A conexão com o banco de dados falhou.');
}

// Filtro de produtos
$categoria = $_GET['categoria'] ?? '';
$preco_min = $_GET['preco_min'] ?? 0;
$preco_max = $_GET['preco_max'] ?? 999999;

// Construir a consulta
$query = "SELECT * FROM produtos WHERE preco BETWEEN ? AND ?";
$params = [$preco_min, $preco_max];
$types = "dd";

if (!empty($categoria)) {
    $query .= " AND categoria = ?";
    $params[] = $categoria;
    $types .= "s";
}

// Preparar a consulta
$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('Erro na preparação da consulta: ' . $conn->error);
}

// Vincular os parâmetros
$stmt->bind_param($types, ...$params);

// Executar a consulta
$stmt->execute();

// Obter os resultados
$result = $stmt->get_result();
$produtos = $result->fetch_all(MYSQLI_ASSOC);

foreach ($produtos as $produto) {
    echo '<div class="product-card">';
    echo '<h3>' . htmlspecialchars($produto['nome']) . '</h3>';
    echo '<p>' . htmlspecialchars($produto['descricao']) . '</p>';
    echo '<p>Preço: R$' . htmlspecialchars($produto['preco']) . '</p>';
    echo '<button class="add-to-cart" data-id="' . htmlspecialchars($produto['id_produto']) . '">Comprar</button>';
    echo '</div>';
}

$stmt->close();
$conn->close();
