<?php
$nome = "noah";
$email = "noah@gmail.com";
$cargo = "DBA";
$salario = 10000;
$admissao = "2026-11-05";
// criar a instrução SQL

$sql = "insert into funcionarios (nome, email, cargo, salario, data-admissao) values('$nome','$email','$cargo','$salario','$admissao')";

require_once("../conexao.php"); // chama o arq de conexão

$resposta = mysqli_quary($conexao, $sql);

if ($resposta == true)
{
    header("Location:listar.php"); // REDIRECIONA
}
?>