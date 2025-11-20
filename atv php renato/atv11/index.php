<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$alunos = [
    ["Agostinho", 9.5],
    ["Laura", 8.3],
    ["Erison", 10]
];

echo "Aluno: " . $alunos[0][0] . " — Nota: " . $alunos[0][1] . "<br>";
echo "Aluno: " . $alunos[1][0] . " — Nota: " . $alunos[1][1];

?>

</body>
</html>