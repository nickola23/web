var vreme = new Date();
var sat = vreme.getHours();
var dan = vreme.getDay();
if (sat > 8 && sat <= 12) {
    document.getElementById("prikazi").innerHTML = "Dobro jutro";
}
else if(sat > 12 && sat <= 18) {
    document.getElementById("prikazi").innerHTML = "Dobar dan";
}
else if(sat > 18 && sat <= 0) {
    document.getElementById("prikazi").innerHTML = "Dobro vece";
}
else {
    document.getElementById("prikazi").innerHTML = "Laku noc";
}
switch (dan) {
    case 0:
        document.getElementById("dan").innerHTML = "Viikendd!";
        break;
    case 6:
        document.getElementById("dan").innerHTML = "Viikendd!";
        break;
    default:
        document.getElementById("dan").innerHTML = "Danas je radni dan";
        break;
}
function radi() {
    if (sat < 19 && sat > 7) {
        alert(`Radis jos ${19 - sat} sati.`);
    }
    else {
        alert(`Ipak odmaras!`);
    }
}
function broj() {
    let x = prompt("Unesite neki broj");
    if (x < 10 && x > -10) {
        document.getElementById("broj").innerHTML = "Broj je jednocifren.";
    }
    else{
        document.getElementById("broj").innerHTML = "Broj nije jednocifren.";
    }
}
    
