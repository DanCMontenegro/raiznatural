<?php
include '../Config/conexao.php';

if (!isset($_GET['id'])) {
    header("Location: Listar_Clientes.php");
    exit();
}

$id = intval($_GET['id']);

// Buscar cliente pelo ID
$sql = "SELECT * FROM clientes WHERE id_clientes = $id LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Cliente não encontrado!";
    exit();
}

$cliente = $result->fetch_assoc();

// Atualizar cliente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];

    $update = "UPDATE clientes SET 
               nome='$nome',
               cpf='$cpf',
               email='$email',
               telefone='$telefone',
               uf='$uf',
               cep='$cep',
               cidade='$cidade',
               endereco='$endereco'
               WHERE id_clientes = $id";

    if ($conn->query($update) === TRUE) {
        header("Location: /raiznatural/Recursos/Listar_Clientes.php?success=1");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Cliente | Raíz Natural</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1>Editar Cliente</h1>
    <form method="POST">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($cliente['nome']) ?>" required>
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" value="<?= htmlspecialchars($cliente['cpf']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($cliente['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($cliente['telefone']) ?>" required>
        </div>
        <div class="mb-3">
            <label>UF</label>
            <input type="text" name="uf" class="form-control" value="<?= htmlspecialchars($cliente['uf']) ?>" required>
        </div>
        <div class="mb-3">
            <label>CEP</label>
            <input type="text" name="cep" class="form-control" value="<?= htmlspecialchars($cliente['cep']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Cidade</label>
            <input type="text" name="cidade" class="form-control" value="<?= htmlspecialchars($cliente['cidade']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" value="<?= htmlspecialchars($cliente['endereco']) ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="Listar_Clientes.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
