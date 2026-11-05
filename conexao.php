<?php
//Este arquivo conecta com o BD mysql
//definir variaveis
$servidor="localhost";
$usuario="root";
$senha="";
$bd="empresa";
//chamar o comando para conectar
$conexao=mysqli_connect($servidor,$usuario,$senha,$bd);
if (!$conexao){
    die("Erro na conexão: " . mysqli_connect_error());
}
?>