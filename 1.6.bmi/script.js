function proveri() {
    var m = prompt("Unesite tezinu u kilogramima:");
    var v = prompt("Unesite visinu u centimetrima:");
    var bmi = m / (v / 100 * v / 100);
    if (bmi > 18.5 && bmi < 25) {
        document.getElementById("resi").innerHTML = "Imate normalnu telesnu tezinu!";
    }
    else if(bmi < 18.5){
        document.getElementById("resi").innerHTML = "Imate malu telesnu tezinu!";
    }
    else{
        document.getElementById("resi").innerHTML = "Imate veliku telesnu tezinu!";
    }
}
    
