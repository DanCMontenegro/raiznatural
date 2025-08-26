<?php
session_start();
include '../Config/conexao.php';

// Verifica se o ID foi enviado
if (!isset($_GET['id'])) {
    header("Location: /raiznatural/Recursos/Listar_Clientes.php");
    exit();
}

$id = intval($_GET['id']); // segurança

// Executa a exclusão
$stmt = $conn->prepare("DELETE FROM clientes WHERE id_clientes = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: Listar_Clientes.php?deleted=1");
} else {
    header("Location: Listar_Clientes.php?deleted=0");
}
exit();
