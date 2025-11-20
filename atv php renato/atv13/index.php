<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$global = 10;

function mostraEscopo() {
    $local = 5;
    global $global;

    echo "Local: $local<br>";
    echo "Global: $global<br>";
}

mostraEscopo();
?>


</body>
</html>
