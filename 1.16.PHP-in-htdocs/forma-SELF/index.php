<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Ime: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Telefon: <input type="text" name="phone"><br><br>
        <input type="submit" value="Potvrdi">
    </form>
    <ul>
        <li>Ime: <?php echo $_POST['name']?></li>
        <li>Email: <?php echo $_POST['email']?></li>
        <li>Telefon: <?php echo $_POST['phone']?></li>
    </ul>
</body>
</html>