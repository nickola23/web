document.querySelector(`#submit`).addEventListener(`click`, e =>{
    let name = document.formUser.name.value;
    let email = document.formUser.email.value;
    let number = Number(document.formUser.number.value);
    if(name == ``){
        alert(`Name must be inserted!`);
        return false;
    }

    if(!/[a-zA-z]/.test(name)){
        alert(`Name can only contain letters`);
        return false;
    }
    
    if(email.search("@") < 0){
        alert(`Not valid email adress!`);
        return false;
    }

    if(number == ``){
        alert(`Number must be inserted!`);
        return false;
    }

    if(number < 1 || number > 300){
        alert(`Number out of range!`);
        return false;
    }
})