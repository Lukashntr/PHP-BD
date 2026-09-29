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
            $id = uniqid();
            $nome = $_POST['nome'] ?? '';
            $idade = $_POST['idade'] ?? '';
            $turma = $_POST['turma'] ?? '';
            $nota1 = $_POST['nota1'] ?? '';
            $nota2 = $_POST['nota2'] ?? '';
            $nota3 = $_POST['nota3'] ?? '';
            $nota4 = $_POST['nota4'] ?? '';
            $media = $_POST['media'] ?? '';
            
            if (!empty($nome) && !empty($idade) && !empty($turma) && !empty($nota1) && !empty($nota2) && !empty($nota3) && !empty($nota4)) {
                include 'config/conect.php';

                $sql = "INSERT INTO alunos (ID, nome, idade, turma, nota1, nota2, nota3, nota4, media) VALUES ('$nome', '$idade', '$turma', '$nota1', '$nota2', '$nota3', '$nota4', '$media')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p>Registro inserido com sucesso!</p>";
                } else {
                    echo "<p>Erro ao inserir registro: " . $conn->error . "</p>";
                }

                $conn->close();
            } else {
                echo "<p>Por favor, preencha todos os campos.</p>";
            }
        ?>

    </main>
</body>
</html>