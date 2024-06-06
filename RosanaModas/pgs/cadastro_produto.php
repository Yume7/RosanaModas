<?php


// Verifica conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

// Insere os dados na tabela de produtos
$sql = "INSERT INTO produtos (nome, preco, descricao) VALUES ('$nome', '$preco', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o produto: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
