<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
class Carro {
    public $marca;
    public $modelo;

    public function mover() {
        return "O carro está andando!";
    }
}

$c = new Carro();
$c->marca = "Honda";
$c->modelo = "Civic";

echo $c->mover();
?>


</body>
</html>
