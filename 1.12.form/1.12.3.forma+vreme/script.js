document.querySelector(`#submit`).addEventListener(`click`, e =>{
    let name = document.formUser.name.value;
    let lastname = document.formUser.lastname.value;
    let date = new Date();
    document.querySelector('#data').innerHTML = `${name} ${lastname}, uneli ste podatke u vreme: ${date.getHours()}:${date.getMinutes()} dana ${date.getDate()}.${date.getMonth()+1}.${date.getFullYear()}.`;
})