<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Adicionar Funcionário</title>
</head>
<body>
    <?php include("../menu.php"); ?>
    <div class="container mt-4">
        <h2>Adicionar Funcionário</h2>
        <form action="inserir.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
            <label>Cargo</label>
            <input type="text" name="cargo" class="form-control" required>
            <label>Salário</label>
            <input type="number" name="salario" class="form-control" step="0.01" required>
            <label>Data de Admissão</label>
            <input type="date" name="data_admissao" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
