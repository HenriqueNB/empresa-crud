<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("../menu.php");
    ?>
    <div class="container">
        <h1>Listagem de funcionarios</h1>
    <table class="table"></table>
    <thead>
        <tr>
            <td>Nome</td>
            <td>Carro</td>
            <td>Salario</td>
            <td>Operação</td>
        </tr>
    </thead>
    </div>
</body>
<tbody>
    <?php
        require_once("../conexao.php");
        $sql = "select * from funcionario";
        $result = mysql_query($conexao,$sql);
        while ($linha = mysql_fetch_assoc($result))
    ?>
    <tr>
        <td><?php echo"$linha['Nome']"?></td>
        <td><?php echo"$linha['Carro']"?></td>
        <td><?php echo"$linha['Salario']"?></td>
        <td>
            <a href="" class="btn btn-warning">Editar</a>
            <button class="btn btn-danger">Remover</button>
        </td>
    </tr>
</tbody>
</html>