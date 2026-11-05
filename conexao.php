<?php
//Este arquivo conecta com o BD mysql
//definir variaveis
$servidor="localhost";
$usuario="root";
$senha="";
$bd="empresa";
//chamar o comando para conectar
$conexao=mysqli_connect($servidor,$usuario,$senha,$bd);
if ($conexao){
    echo "Conexão realizada com sucesso.";
}
else {
    echo mysqli_error($conexao);
}
?>