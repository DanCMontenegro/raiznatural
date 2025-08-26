<?php
session_start();

// Usuário e senha fixos (para teste)
$USUARIO = "admin";
$SENHA = "123456";

// Se o usuário já estiver logado, redireciona para a lista
if (isset($_SESSION['usuario_logado'])) {
    header("Location: /raiznatural/Recursos/Listar_Clientes.php");
exit();

}

// Verifica envio do formulário
$erro = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($login === $USUARIO && $senha === $SENHA) {
        $_SESSION['usuario_logado'] = $login;
        header("Location: /raiznatural/Recursos/Listar_Clientes.php");
exit();

    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Raíz Natural</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { 
      background: #fff8f0; 
      font-family: 'Quicksand', sans-serif; 
      display: flex; 
      justify-content: center; 
      align-items: center; 
      height: 100vh;
    }
    .login-box {
      background: white; 
      padding: 40px; 
      border-radius: 20px; 
      box-shadow: 0 8px 18px rgba(0,0,0,0.2); 
      width: 100%; 
      max-width: 400px;
      text-align: center;
    }
    .login-box h2 { margin-bottom: 30px; }
  </style>
</head>
<body>

<div class="login-box">
    <h2>Login Administrador</h2>

    <?php if($erro): ?>
      <div class="alert alert-danger"><?= $erro ?></div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3 text-start">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario" autocomplete="off" required>
        </div>
        <div class="mb-3 text-start">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Entrar</button>
    </form>
</div>

</body>
</html>
