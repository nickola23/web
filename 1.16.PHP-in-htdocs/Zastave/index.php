<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Zastave</title>
</head>
<body>
    <?php
    echo "<h1>Eurosong</h1>";
    $zastave = scandir("images");
    shuffle($zastave);
    foreach($zastave as $zastava){
        echo "<img src=\"./images/$zastava\" alt=\"\">";
    }

    ?> 
</body>
</html>