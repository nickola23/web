<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Porucivanje palacinki</h1>
    <?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $PrvoPolje = "";
    $DrugoPolje = "";
    $TrecePolje = "";
    $CetvrtoPolje = "";
    $kraj = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Ime = test_input($_POST["Ime"]);
        $Adresa = test_input($_POST["Adresa"]);
        $Grad = test_input($_POST["Grad"]);
        $Postanski_broj = test_input($_POST["Redovan"]);

        if (empty($_POST["Ime"]))
            $PrvoPolje = "Ime je obavezno polje";
        else if (!(preg_match("/^[A-Za-z]*$/", $Ime)))
            $PrvoPolje = "Ime moze da sadrzi samo slova";

        if (empty($_POST["Adresa"]))
            $DrugoPolje = "Adresa je obavezno polje";
        else if (!(preg_match("/^[a-zA-Z0-9 ]*$/", $Adresa)))
            $DrugoPolje = "Adresa moze da sadrzi samo slova i broj";

        if (empty($_POST["Grad"]))
            $TrecePolje = "Kolicina je obavezno polje";
        else if (!(preg_match("/^[0-9]*$/", $Grad)))
            $TrecePolje = "Kolicina moze da sadrzi samo brojeve";

        if (empty($_POST["Redovan"]))
            $CetvrtoPolje = "Dodaci je obavezno polje";
        $kraj = "Postovani, " . $Ime . " Uspesno ste zavrsili porudzbinu. Porucili ste " . $Grad . " palacinke";
    }



    ?>

    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
        Ime <input type="text" name="Ime"> <span><?php echo $PrvoPolje; ?></span> <br>
        Adresa <input type="text" name="Adresa"> <span><?php echo $DrugoPolje; ?></span> <br>
        Kolicina: <input type="text" name="Grad"> <span><?php echo $TrecePolje; ?></span> <br>
        Dodaci: <select name="Redovan" multiple="multiple">
            <option value="0"></option>
            <option value="1">Plazma</option>
            <option value="2">Krem</option>
            <option value="3">Dzem</option>
            <option value="4">Banana</option>
            <option value="5">Jagoda</option>
            <option value="6">Preliv od cokolade</option>
            <option value="7">Sarene mrvice</option>
        </select> <span><?php echo $CetvrtoPolje; ?></span><br>
        <input type="submit" value="Potvrdi"><br>
        <span><?php echo $kraj; ?></span><br><br>
    </form>

    <?php
    $boje = array("crvena" => "#ff0000", "plava" => "#0000ff", "zelena" => "#00ff00", "narandzasta" => "#ff8400");
    echo $boje["plava"];
    echo "<br>";
    $boje["zuta"] = "#FFFF00";
    ksort($boje);
    foreach ($boje as $x => $x_value) {
        echo  $x;
        echo "<br>";
    }
    echo "<br>";
    echo count($boje);

    ?>
</body>

</html>