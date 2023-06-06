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

            $num1Err = $num2Err = "";
            $x = $y = $Z = "";

            function dataValidation($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty(dataValidation($_POST["num1"]))) {
                    $num1Err = "Morate unet prvi broj";
                }
                else if(!is_numeric(dataValidation($_POST["num1"]))){
                    $num1Err = "Neispravno unet prvi broj";
                }
                else {
                    $x = dataValidation($_POST["num1"]);
                }
                
                if (empty(dataValidation($_POST["num2"]))) {
                    $num2Err = "Morate unet drugi broj";
                }
                else if(!is_numeric(dataValidation($_POST["num2"]))){
                    $num2Err = "Neispravno unet drugi broj";
                }
                else {
                    $y = dataValidation($_POST["num2"]);
                }
            }
            if(empty($num1Err) && empty($num2Err)){
                switch ($_POST['operation']){
                    case "+": $Z = $x + $y;
                        break;
                    case "-": $Z = $x - $y;
                        break;
                    case "*": $Z = $x * $y;
                        break;
                    case "/": $Z = $x / $y;
                        break;
                  }
            }
        ?>
    <section>
        <form name="digitron" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method = "post">
            Prva vrednost: <input name="num1" type="text" placeholder="first number" /><span><?php echo $num1Err ?></span><br>
            Druga vrednost: <input name="num2" type="text" placeholder="second number" /><span><?php echo $num2Err ?></span><br>
            <select name="operation">
                <option value="+"> + </option>
                <option value="-"> - </option>
                <option value="*"> * </option>
                <option value="/"> / </option>
            </select>
            <input type="submit" value="Izracunaj">
        </form>
    </section>
    <section>
        <div id="data"><?php 
            if(!empty($x) && !empty($y)){
                echo $x . $_POST['operation'] . $y . " = " . $Z;
            }
        ?></div>
    </section>
</body>
</html>