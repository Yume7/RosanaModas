<?php // Conexão com o banco de dados (substitua as credenciais conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_rosanamodas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
