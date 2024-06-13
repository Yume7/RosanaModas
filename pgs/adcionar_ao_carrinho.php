<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

$id = $_POST['id'];

// Conexão com o banco de dados
require 'connect.php';

$query = "SELECT * FROM produtos WHERE id_produto = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$produto = $result->fetch_assoc();

if ($produto) {
    $_SESSION['carrinho'][] = $produto;
}

echo json_encode(['success' => true]);

$stmt->close();
$conn->close();
?>
