<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de PHP</title>
    <style>
        p{
            border: 1px solid black;
            width: fit-content;
        }
    </style>
</head>
<body>
<h1>Curso de PHP</h1>
<?php
  
$x = 0;

while($x < 10) {

echo "O X é $x <br>";

if($x === 5) {
    echo "Terminando o loop <br>";
    break;
}

$x++;

}

echo "Saiu do loop <br>";
  
?>
</body>
</html>