<?php
  
    // Consulta SQL para selecionar produtos com base nos filtros
    $sql = "SELECT * FROM produtos WHERE categoria = 'vestuario'";
    
    // Adicionar filtros conforme necessário
    if(isset($_GET['categoria'])) {
        $categoria = $_GET['categoria'];
        $sql .= " AND categoria = '$categoria'";
    }
    if(isset($_GET['preco_min']) && isset($_GET['preco_max'])) {
        $preco_min = $_GET['preco_min'];
        $preco_max = $_GET['preco_max'];
        $sql .= " AND preco BETWEEN $preco_min AND $preco_max";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibe os produtos encontrados
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["nome"] . " - R$" . $row["preco"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum produto encontrado.";
    }

    // Fecha a conexão
    $conn->close();
    ?>
</body>
</html>
