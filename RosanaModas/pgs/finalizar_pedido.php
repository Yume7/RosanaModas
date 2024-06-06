<?php

// Obtém os dados do formulário
$cliente = $_POST['cliente'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

// Insere os dados na tabela de pedidos
$sql = "INSERT INTO pedidos (cliente, endereco, telefone) VALUES ('$cliente', '$endereco', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Pedido finalizado com sucesso!";
} else {
    echo "Erro ao finalizar o pedido: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
