<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 45;
    $y = 20;
    saberi();
    oduzmi($x, $y);
    mnozi($x, $y);
    deli($x, $y);
    function saberi() {
        global $x, $y;
        echo "Zbir je ".$x + $y. "<br>";
    }
    function oduzmi($x, $y) {
        echo "Razlika je ".$x - $y. "<br>";
    }
    function mnozi($x, $y) {
        echo "Proizvod je ".$x * $y. "<br>";
    }
    function deli($x, $y) {
        echo "Podeljeno je ".$x / $y. "<br>";
    }
    ?> 
</body>
</html>