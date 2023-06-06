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

            $name = $adress = $city = $zipCode = $email = $gender = $question = "";
            $nameErr = $adressErr = $cityErr = $zipCodeErr = $emailErr = $genderErr = $questionErr = "";

            function dataValidation($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                //---------- name ----------
                if (empty(dataValidation($_POST["name"]))) {
                    $nameErr = "Morate uneti ime";
                }
                else if(!preg_match("/^[a-zA-Z-' ]*$/", dataValidation($_POST["name"]))){
                    $nameErr = "Neispravno uneto ime";
                }
                else {
                    $name = dataValidation($_POST["name"]);
                }
                
                //---------- adress ----------
                if (empty(dataValidation($_POST["adress"]))) {
                    $adressErr = "Morate adresu";
                }
                else if(!preg_match("/^[a-zA-Z0-9-' ]*$/",dataValidation($_POST["adress"]))){
                    $adressErr = "Neispravno uneta adresa";
                }
                else {
                    $adress = dataValidation($_POST["adress"]);
                }

                //---------- city ----------
                /*
                if (empty(dataValidation($_POST["city"]))) {
                    $cityErr = "Morate uneti grad";
                }
                */
                if(!preg_match("/^[a-zA-Z-' ]*$/",dataValidation($_POST["city"]))){
                    $cityErr = "Neispravno uneto ime grada";
                }
                else {
                    $city = dataValidation($_POST["city"]);
                }

                //---------- zipCode ----------
                if (empty(dataValidation($_POST["zipCode"]))) {
                    $zipCodeErr = "Morate uneti postanski broj";
                }
                else if(!preg_match("/^[0-9]{5}$/",dataValidation($_POST["zipCode"]))){
                    $zipCodeErr = "Neispravno unet postanski broj";
                }
                else {
                    $zipCode = dataValidation($_POST["zipCode"]);
                }

                //---------- email ----------
                if (empty(dataValidation($_POST["email"]))) {
                    $emailErr = "Morate uneti email";
                }
                else if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",dataValidation($_POST["email"]))){
                    $emailErr = "Neispravno unet email";
                }
                else {
                    $email = dataValidation($_POST["email"]);
                }

                //---------- gender ----------
                if (empty($_POST["gender"])) {
                    $genderErr = "Morate uneti pol";
                }
                else {
                    $gender = $_POST["gender"];
                }

                //---------- question ----------
                if (empty($_POST["question"])) {
                    $questionErr = "Morate izabrati odgovor";
                }
                else {
                    $question = $_POST["question"];
                }
            }
        ?>
    <section>
        <form name="stringNumber" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method = "post">
            Ime: <input name="name" type="text" placeholder="Relja Popovic" /><span><?php echo $nameErr ?></span><br>
            Adresa: <input name="adress" type="text" placeholder="Dostijeva 44b" /><span><?php echo $adressErr ?></span><br>
            Grad: <input name="city" type="text" placeholder="Kraljevo" /><span><?php echo $cityErr ?></span><br>
            Postanski broj: <input name="zipCode" type="text" placeholder="36000" /><span><?php echo $zipCodeErr ?></span><br>
            E-mail: <input name="email" type="text" placeholder="reljapop@gmail.com" /><span><?php echo $emailErr ?></span><br>
            Pol:<span><?php echo $genderErr ?></span><br>
                <input type="radio" name="gender" value="male">Muski<br>
                <input type="radio" name="gender" value="female">Zenski<br>
            Pitanje:<span><?php echo $questionErr ?></span><br>
                <input type="checkbox" name="question[]" value="answ1">Odgovor 1<br>
                <input type="checkbox" name="question[]" value="answ2">Odgovor 2<br>
            <input type="submit" value="Potvrdi">
        </form>
    </section>
    <section>
        <div id="data"><?php 
            if(!empty($name) && !empty($adress)  && !empty($city)  && !empty($zipCode) && !empty($email) && !empty($gender) && !empty($question)){
                echo $name . $adress . $city . $zipCode . $email . $gender;
            }
        ?></div>
    </section>
</body>
</html>