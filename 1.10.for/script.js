function proveri(){
    for(let i = 1; i <= 10; i++){
         document.getElementById("resi").innerHTML += `Ovo je red ${i}<br>`;
    }
}
function brisi(){
    document.getElementById("resi").innerHTML = " ";
}