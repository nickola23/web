<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervacija</title>
</head>
<body>
<?php
        $ime = $email = $ime_greska =  $email_greska = $poruka = $br_sedista = $br_sedista_greska = "";
        $recenica = "Sada pocinjemo da ucimo PHP skriptni serverski jezik.";
            $br_reci = str_word_count($recenica);
            $reci = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $ime = $_POST["ime"];
            $email = $_POST["email"];
            $br_sedista = $_POST["br_sedista"];
            $sat = date("H:i");
            $datum = date("d.m.Y.");
            
            if($ime == ""){
                $ime_greska = "Morate uneti ime i prezime!";
            }
            else{
                if(preg_match("/[A-Z][a-z]{1,} [A-Z][a-z]{1,}/", $ime) == 0){
                    $ime_greska = "Nepravilno uneto ime!";
                }
                else{
                    $ime_greska = "";
                }
            }

            if($email == ""){
                $email_greska = "Morate uneti email!";
            }
            else{
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Nepravilno unet email!";
                  }
                else{
                    $email_greska = "";
                }
            }
            if($br_sedista == "")
            {
                $br_sedista_greska = "Morate uneti broj sedista";
            }
            else
            {
                if($br_sedista<1 || $br_sedista>78)
                {
                    $br_sedista_greska = "Morate uneti broj sedista izmedju 1 i 78";
                }
                else
                {
                    $br_sedista_greska = "";
                }
            }
            if($ime_greska == "" && $email_greska == "" && $br_sedista_greska == ""){
                $poruka = "Poštovani " . $ime . " uspešno ste rezervisali ulaznicu za bioskop. Ulaznica će stići na Vaš email: " . $email . ". Datum i vreme rezervacije: " . $datum . " - " . $sat .".";
                
            }
        } 
        $reci = "U rečenici ima " . $br_reci . " reči";
    ?>    
<h1>Rezervacija bioskopske ulaznice</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="ime">Ime:</label>
        <input type="text" name="ime" value="<?php echo $ime; ?>">
        <p style="color: red;"><?php echo $ime_greska; ?></p><br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <p style="color: red;"><?php echo $email_greska; ?></p><br>

        <label for="br_sedista">Broj sedista:</label>
        <input type="number" name="br_sedista" value="<?php echo $br_sedista; ?>">
        <p style="color: red;"><?php echo $br_sedista_greska; ?></p><br>

        <input type="submit" value="Registruj se">
    </form>
        <p><?php echo $poruka; ?></p>
        <p><?php echo $reci; ?></p>
    
    </body>
</html>