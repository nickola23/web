function proveri() {
    var x = Number(prompt("Unesite broj x"));
    var i = 0;
    if (x % 5 == 0) {
        document.getElementById("resi").innerHTML = "Broj je deljiv sa 5";
        i++;
    }
    if (x % 17 == 0) {
        if (i == 0) {
            document.getElementById("resi").innerHTML = "Broj je deljiv sa 17";
        }
        if(i > 0){
            document.getElementById("resi").innerHTML +=" i sa 17";
        }
        i++;
    }
    if(i == 0) {
        document.getElementById("resi").innerHTML = "Broj nije deljiv ni sa 5 ni sa 17";
    }
    i = 0;
}