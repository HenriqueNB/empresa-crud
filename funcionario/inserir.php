<?php
require_once("../conexao.php"); // chama o arq de conexão

// Receber dados do formulário via POST
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$cargo = isset($_POST['cargo']) ? trim($_POST['cargo']) : '';
$salario = isset($_POST['salario']) ? floatval($_POST['salario']) : 0;
$admissao = isset($_POST['data_admissao']) ? $_POST['data_admissao'] : '';

// Validar campos obrigatórios
if (empty($nome) || empty($email) || empty($cargo) || $salario <= 0 || empty($admissao)) {
    echo "Todos os campos são obrigatórios.";
    exit;
}

// Usar prepared statement para evitar SQL Injection
$sql = "INSERT INTO funcionarios (nome, email, cargo, salario, `data_admissao`) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sssds", $nome, $email, $cargo, $salario, $admissao);

$resposta = mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

if ($resposta) {
    header("Location: listar.php"); // REDIRECIONA
    exit;
} else {
    echo "Erro ao inserir funcionário: " . mysqli_error($conexao);
}
?>