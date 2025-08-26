<?php
session_start();
include '../Config/conexao.php';

// Mensagens de sucesso
$mensagem = '';
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $mensagem = "Cliente atualizado com sucesso!";
} elseif (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
    $mensagem = "Cliente excluído com sucesso!";
}

// Buscar clientes
$busca = isset($_GET['busca']) ? $_GET['busca'] : '';

if ($busca != '') {
    $sql = "SELECT * FROM clientes 
            WHERE nome LIKE '%$busca%' 
            OR cpf LIKE '%$busca%' 
            OR cidade LIKE '%$busca%'";
} else {
    $sql = "SELECT * FROM clientes";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientes Cadastrados | Raíz Natural</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-md d-flex align-items-center justify-content-between position-relative">
      <div class="d-flex align-items-center">
        <img class="rounded-circle" src="/raiznatural/Imagens_Index/logo.jpeg" alt="Logo da loja"
             style="width: 100px; height: auto; margin-right: 10px;">
      </div>
      <div class="position-absolute top-50 start-50 translate-middle text-center">
        <a class="navbar-brand fw-bold fs-2" href="#">
          <span class="text-success">R</span>aíz
          <span class="text-danger">N</span>atural
        </a>
      </div>
      <div class="text-end" style="width: 100px;">
        <a href="/raiznatural/Index.php" class="btn btn-success w-100">Voltar</a>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <h1>Clientes Cadastrados</h1>

    <!-- Alerta -->
    <?php if($mensagem != ''): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= htmlspecialchars($mensagem) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif; ?>

    <!-- Busca -->
    <form method="GET" class="mb-3">
      <div class="input-group">
        <input type="text" name="busca" class="form-control" placeholder="Buscar por nome, CPF ou cidade" value="<?= htmlspecialchars($busca) ?>">
        <button type="submit" class="btn btn-primary">Buscar</button>
      </div>
    </form>

    <!-- Tabela -->
    <table class="table table-striped table-bordered mt-3">
      <thead class="table-success">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>UF</th>
          <th>CEP</th>
          <th>Cidade</th>
          <th>Endereço</th>
          <th>Data Cadastro</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php if($result->num_rows > 0): ?>
          <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['id_clientes'] ?></td>
            <td><?= htmlspecialchars($row['nome']) ?></td>
            <td><?= htmlspecialchars($row['cpf']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['telefone']) ?></td>
            <td><?= htmlspecialchars($row['uf']) ?></td>
            <td><?= htmlspecialchars($row['cep']) ?></td>
            <td><?= htmlspecialchars($row['cidade']) ?></td>
            <td><?= htmlspecialchars($row['endereco']) ?></td>
            <td><?= htmlspecialchars($row['data_cadastro']) ?></td>
            <td>
              <a href="/raiznatural/Recursos/Editar_Cliente.php?id=<?= $row['id_clientes'] ?>" class="btn btn-warning btn-sm">Editar</a>
              <a href="/raiznatural/Recursos/Excluir_Cliente.php?id=<?= $row['id_clientes'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
          </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="11" class="text-center">Nenhum cliente encontrado.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <footer class="text-black text-center py-3 mt-5 bg-warning">
    &copy; 2025 Raíz Natural - Todos os direitos reservados
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
