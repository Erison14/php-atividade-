<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$texto = "PHP é massa";

echo strtoupper($texto) . "<br>";
echo strtolower($texto) . "<br>";
echo strlen($texto) . "<br>";
echo str_replace("massa", "incrível", $texto);
?>

</body>
</html>
