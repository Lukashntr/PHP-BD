<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/registro.css">  
    <title>Registro de notas</title>
</head>
<body>
    <header>
        <h1>Registro de Notas</h1>
    </header>
    <main>
        <?php
            $nome = $_POST['nome'] ?? '';
            $idade = $_POST['idade'] ?? '';
            $turma = $_POST['turma'] ?? '';
            $nota1 = $_POST['nota1'] ?? '';
            $nota2 = $_POST['nota2'] ?? '';
            $nota3 = $_POST['nota3'] ?? '';
            $nota4 = $_POST['nota4'] ?? '';
            echo "<p>Nome: $nome</p><p>Idade: $idade</p><p>Turma: $turma</p><p>Nota 1: $nota1</p><p>Nota 2: $nota2</p><p>Nota 3: $nota3</p><p>Nota 4: $nota4</p>"; 
        ?>

    </main>
</body>
</html>