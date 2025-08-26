<?php
$servername = "localhost";  // geralmente é localhost
$username = "root";         // seu usuário do banco
$password = "root";             // senha do banco (deixe vazio se não tiver)
$database = "raiznatural"; // substitua pelo nome do seu banco

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Checando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
?>