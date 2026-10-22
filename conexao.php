<?php
//Este arquivo conecta com o BD mysql
//definir variaveis
$servidor="localhost";
$usuario="root";
$senha="";
$bd="empresa";
//chamar o comando para conectar
$result-mysqli_connect($servidor,$usuario,$senha,$bd);
if ($result){
    echo "Conexão realizada com sucesso.";
}
else {
    echo mysqli_error($result);
}
?>