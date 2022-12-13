function proveri() {
    var x = Number(prompt("Unesite broj x"));
    var y = Number(prompt("Unesite broj y"));
    if (x > y) {
        document.getElementById("resi").innerHTML = "Prvi uneti broj je veci.";
    }
    else{
        document.getElementById("resi").innerHTML = "Drugi uneti broj je veci.";
    }
}