<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Adicionar Funcionário</title>
</head>
<body>
    <?php include("../menu.php"); 
    // OBTER ID
        $id - $_GET['id'];
    // EXECUTAR O SELECT
        $sql = "select * from funcionarios where id=$id";
        require_once("../conexao.php"): // Carrega a conexao
        $linha = mysql_query($conexao,$sql);
        $funcionario = mysql_fetch_assoc($result); // Associa o resultado da variavelw
    // JOGAR OS DADOS EM VARIAVEIS
    ?>
    <div class="container mt-4">
        <h2>Adicionar Funcionário</h2>
        <form action="inserir.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required value="<?php echo $funcionario['nome']?>">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value="<?php echo $funcionario['email']?>">
            <label>Cargo</label>
            <input type="text" name="cargo" class="form-control" required value="<?php echo $funcionario['cargo']?>">
            <label>Salário</label>
            <input type="number" name="salario" class="form-control" step="0.01" required value="<?php echo $funcionario['salario']?>">
            <label>Data de Admissão</label>
            <input type="date" name="data_admissao" class="form-control" required value="<?php echo $funcionario['data_admissao']?>">
            <label>Ativo</label>
            <input type="checkbox" name="ativo" <?php if ($funcionario['ativo'] == 1) { echo "checked"; } ?>>
            <br>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Atulizar">

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
