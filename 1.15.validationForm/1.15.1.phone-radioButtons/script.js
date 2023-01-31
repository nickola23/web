document.querySelector(`#submit`).addEventListener(`click`, e =>{
    validateForm();
})
function validateForm(){
    let name = document.formUser.name.value;
    let adress = document.formUser.adress.value;
    let phone = document.formUser.phone.value;
    let gender = document.formUser.gender;
    let jmbg = document.formUser.jmbg.value;
    if(name == ``){
        alert(`Name must be inserted!`);
        return false;
    }
    else if(!/[a-zA-Z]+[ ]+[a-zA-Z]+$/.test(name)){
        alert(`Not valid name!`);
        return false;
    }
    
    if(!/[a-zA-Z]+[ 0-9]+$/.test(adress)){
        alert(`Not valid adress!`);
        return false;
    }

    if(!/[0-9]{3}[/]?[0-9]{4}[-]?[0-9]{3}/.test(phone)){
        alert(`Not valid phone number!`);
        return false;
    }

    if(gender[0].checked == false && gender[1].checked == false){
        alert(`Gender must be selected!`);
        return false;
    }
    
    if(jmbg == ""){
        alert(`JMBG must be inserted!`);
        return false;
    }
    if(!/^[0-9]{13}$/.test(jmbg)){
        alert(`Not valid JMBG`);
        return false;
    }
}