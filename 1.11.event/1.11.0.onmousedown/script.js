function proveri(){
    let date = new Date();
    document.getElementById("resi").innerHTML = date;
}
function neproveri(){
    let date = new Date();
    document.getElementById("resi").innerHTML = `${date.getHours()}h ${date.getMinutes()}min ${date.getMonth()}sec ${date.getMilliseconds()}milisec`;
}