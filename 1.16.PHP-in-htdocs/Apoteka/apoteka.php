<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./apoteka.css">
</head>
<body>
        <?php 

            $name = $adress = $city = $zipCode = $email = $gender = $question = "";
            $nameErr = $adressErr = $cityErr = $zipCodeErr = $emailErr = $genderErr = $questionErr = "";

            function dataValidation($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

        ?>
    <section>
        <div class="row">=============== Fiskalni racun ===============</div>
        <div class="row">
            <div class="tableField">Apoteka d.o.o. Kraljevo</div>
        </div>
        <div class="row">
            <div class="tableField">Karadjordjeva 118b</div>
        </div>
        <div class="row">
            <div class="tableField">Kasir:</div>
            <div class="tableField">Online prodavnica</div>
        </div>
        <div class="row">=============== Promet Prodaja ==============</div>
        <div class="row">
            <div class="tableField">Naziv</div>
            <div class="tableField">Cena</div>
            <div class="tableField">Kolicina</div>
            <div class="tableField">Ukupno</div>
        </div>
        <div class="row">
            <?php
                if($_POST["andol"] > 0){
                    echo '<div class="tableField">Anadol</div>';
                    echo '<div class="tableField">100.00</div>';
                    echo '<div class="tableField">1</div>';
                    echo '<div class="tableField">1</div>';
                }
            ?>
        </div>
        <div class="row">
            <?php
                if($_POST["aspirin"] > 0){
                    echo '<div class="tableField">Anadol</div>';
                    echo '<div class="tableField">100.00</div>';
                    echo '<div class="tableField">1</div>';
                    echo '<div class="tableField">1</div>';
                }
            ?>
        </div>
        <div class="row">
            <?php
                if($_POST["vitaminC"] > 0){
                    echo '<div class="tableField">Anadol</div>';
                    echo '<div class="tableField">100.00</div>';
                    echo '<div class="tableField">1</div>';
                    echo '<div class="tableField">1</div>';
                }
            ?>
        </div>
        <div class="row">----------------------------------------------</div>
        <div class="row">
            <div class="tableField">Ukupan iznos:</div>
            <div class="tableField">0.00</div>
            <div class="tableField">Gotovina</div>
            <div class="tableField">0.00</div>
        </div>
        <div class="row">===============================================</div>
        <div class="row">
            <div class="tableField">Oznaka</div>
            <div class="tableField">Ime</div>
            <div class="tableField">Stopa</div>
            <div class="tableField">Porez</div>
        </div>
        <div class="row">
            <div class="tableField">DJ</div>
            <div class="tableField">O-PDV</div>
            <div class="tableField">8.00%</div>
            <div class="tableField">0.00</div>
        </div>
        <div class="row">----------------------------------------------</div>
        <div class="row">
            <div class="tableField">Ukupan iznos poreza:</div>
            <div class="tableField">0.00</div>
        </div>
        <div class="row">===============================================</div>
        <div class="row">
            <div class="tableField">PFR vreme:</div>
            <div class="tableField">0.00</div>
        </div>
    </section>
</body>
</html>