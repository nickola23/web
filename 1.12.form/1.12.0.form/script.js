document.querySelector(`button`).addEventListener(`click`, e =>{
    let useraname = document.formUser.username.value;
    let password = document.formUser.username.value;
    document.querySelector(`.data`).innerHTML = useraname + ` we dont show your passwords`;
})
