function proveri(){
    let sum = 0;
    for(let i = 10; i < 100; i++){
        if(neparan(i)){
            sum += i;
        }
    }
    document.getElementById("resi").innerHTML = sum;
}
function neparan(br){
    if(br % 2 != 0){
        return true;
    }
    else{
        return false;
    }
}
function brisi(){
    document.getElementById("resi").innerHTML = "";
}