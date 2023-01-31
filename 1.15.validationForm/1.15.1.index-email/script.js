document.querySelector(`#submit`).addEventListener(`click`, e =>{
    validateForm();
})
function validateForm(){
    let name = document.formUser.name.value;
    let indexg = document.formUser.indexg.value;
    let indexb = document.formUser.indexb.value;
    if(name == ``){
        alert(`Name must be inserted!`);
        document.formUser.name.classList.add(`error`);
        return false;
    }
    else if(!/[a-zA-Z]+[ ]+[a-zA-Z]+$/.test(name)){
        alert(`Not valid name!`);
        document.formUser.name.classList.add(`error`);
        return false;
    }
    else{
        document.formUser.name.classList.remove(`error`);
    }
    
    if(!/^[0-9]{4}$/.test(indexg)){
        alert(`Not valid index year!`);
        document.formUser.indexg.classList.add(`error`);
        return false;
    }
    else{
        document.formUser.indexg.classList.remove(`error`);
    }

    if(!/^[0-9]{4}$/.test(indexb)){
        alert(`Not valid index number!`);
        document.formUser.indexb.classList.add(`error`);
        return false;
    }
    else{
        document.formUser.indexb.classList.remove(`error`);
    }

    document.querySelector(`.data`).innerHTML = formEmail();
}
function formEmail(){
    let name = document.formUser.name.value.split(` `);
    let indexg = document.formUser.indexg.value;
    let indexb = document.formUser.indexb.value;
    return email = name[1].charAt(0) + name[0].charAt(0) + indexg.slice(-2) + indexb + `d` + `@student.etf.rs`;
}