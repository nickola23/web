document.querySelector(`#submit`).addEventListener(`click`, e =>{
    validation();
})
function validation(){
    let username = document.formUser.username.value;
    let password = document.formUser.password.value;
    let passwordConfirm = document.formUser.passwordConfirm.value;
    if(username == ``){
        alert(`Name must be inserted!`);
        return false;
    }
    
    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username)){
        alert(`Not valid email adress!`);
        return false;
    }

    if(password == ``){
        alert(`Password must be inserted!`);
        return false;
    }

    if(!password.includes(/[a-z]/) || !password.includes(/[A-Z]/) || !password.includes(/[0-9]/)){
        alert(`Password not good!`);
    }

    if(passwordConfirm == ``){
        alert(`Confirmed password must be inserted!`);
        return false;
    }

    if(password != passwordConfirm){
        alert(`Passwords are not same!`);
        return false;
    }
}