document.querySelector(`#submit`).addEventListener(`click`, e =>{
    validation();
})
function validation(){
    let name = document.formUser.name.value;
    let email = document.formUser.email.value;
    let phone = document.formUser.phone.value;
    let gender = document.formUser.gender;
    let country = document.formUser.country.value;

    if(name == ``){
        alert(`Name must be inserted!`);
        return false;
    }

    if(!/[a-zA-z]/.test(name)){
        alert(`Name can only contain letters`);
        return false;
    }
    
    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        alert(`Not valid email adress!`);
        return false;
    }

    if(!/^[0-9]{3}?[/][0-9]{3}?[-][0-9]{4}$/.test(phone)){
        alert(`Not valid phone number!`);
        return false;
    }

    if(country == "none"){
        alert(`Country must be choosen!`);
        return false;
    }

    if(gender[0].checked == false && gender[1].checked == false){
        alert(`Gender must be selected!`);
        return false;
    }

}