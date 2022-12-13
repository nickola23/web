document.querySelector(`button`).addEventListener(`click`, e =>{
    let num1 = document.formUser.num1.value;
    let num2 = document.formUser.num2.value;
    document.querySelector(`.data`).innerHTML = num1 + num2;
})
