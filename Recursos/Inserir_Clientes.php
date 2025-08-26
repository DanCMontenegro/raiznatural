<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);





// Inserir_Clientes.php

include '../Config/conexao.php'; // Conexão com o banco

// Recebendo os dados com fallback para vazio
$nome = $_POST['nome'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$uf = $_POST['uf'] ?? '';
$cep = $_POST['cep'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$endereco = $_POST['endereco'] ?? '';

// Função para exibir mensagem estilizada
function mostrarMensagem($tipo, $mensagem) {
    // $tipo: 'success' ou 'danger'
    $cor = $tipo === 'success' ? 'linear-gradient(135deg, #8dc1a2, #5bbc85)' : 'linear-gradient(135deg, #ff6b6b, #ff3b3b)';
    echo "
    <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Mensagem - Raíz Natural</title>
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
        <!-- Google Font Quicksand -->
        <link href='https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap' rel='stylesheet'>
        <style>
            body { 
                font-family: 'Quicksand', sans-serif; 
                background-color: #f8f9fa;
            }
            .msg-container {
                max-width: 600px;
                margin: 100px auto;
                padding: 30px;
                border-radius: 20px;
                text-align: center;
                color: white;
                background: $cor;
                box-shadow: 0 8px 18px rgba(0,0,0,0.2);
            }
            .msg-container h2 {
                font-weight: 600;
                margin-bottom: 15px;
            }
            .btn-voltar {
                background: white;
                color: black;
                font-weight: 600;
                border-radius: 10px;
                padding: 10px 25px;
                text-decoration: none;
                transition: all 0.3s ease;
            }
            .btn-voltar:hover {
                background: #dee2e6;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class='msg-container'>
            <h2>$mensagem</h2>
            <a href='/raiznatural/Recursos/Listar_Clientes.php' class='btn-voltar mt-3'>Voltar ao site</a>
        </div>
    </body>
    </html>
    ";
    exit;
}

// Validação de campos obrigatórios
if (empty($nome) || empty($cpf) || empty($email) || empty($telefone) || empty($uf) || empty($cep) || empty($cidade) || empty($endereco)) {
    mostrarMensagem('danger', 'Preencha todos os campos obrigatórios!');
}

// Preparando o insert
$sql = "INSERT INTO clientes (nome, cpf, email, telefone, uf, cep, cidade, endereco) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    mostrarMensagem('danger', 'Erro ao preparar a consulta: ' . $conn->error);
}

// Vinculando parâmetros
$stmt->bind_param("ssssssss", $nome, $cpf, $email, $telefone, $uf, $cep, $cidade, $endereco);

// Executando e mostrando resultado
if ($stmt->execute()) {
    mostrarMensagem('success', 'Cadastro realizado com sucesso! Obrigado por entrar em contato.');
} else {
    mostrarMensagem('danger', 'Erro ao cadastrar: ' . $stmt->error);
}

// Fechando conexão
$stmt->close();
$conn->close();
?>
