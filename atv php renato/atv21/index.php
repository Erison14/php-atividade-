<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Estudantil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f2f2f2;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
        }
        input, textarea, button, select {
            width: 100%;
            padding: 8px;
            margin: 6px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .agenda {
            margin-top: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            max-width: 500px;
        }
    </style>
</head>
<body>

    <h2>Agenda Estudantil</h2>

    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label for="curso">Curso/Disciplina:</label>
        <input type="text" id="curso" name="curso">

        <label for="data">Data do Compromisso:</label>
        <input type="date" id="data" name="data" required>

        <label for="compromisso">Compromisso:</label>
        <textarea id="compromisso" name="compromisso" rows="4" required></textarea>

        <button type="submit">Salvar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = htmlspecialchars($_POST['nome']);
        $idade = htmlspecialchars($_POST['idade']);
        $email = htmlspecialchars($_POST['email']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $curso = htmlspecialchars($_POST['curso']);
        $data = htmlspecialchars($_POST['data']);
        $compromisso = htmlspecialchars($_POST['compromisso']);

        echo "<div class='agenda'>";
        echo "<h3>Dados da Agenda:</h3>";
        echo "<strong>Nome:</strong> $nome<br>";
        echo "<strong>Idade:</strong> $idade<br>";
        echo "<strong>E-mail:</strong> $email<br>";
        echo "<strong>Telefone:</strong> $telefone<br>";
        echo "<strong>Curso/Disciplina:</strong> $curso<br>";
        echo "<strong>Data do Compromisso:</strong> $data<br>";
        echo "<strong>Compromisso:</strong> $compromisso<br>";
        echo "</div>";
    }
    ?>

</body>
</html>
