document.querySelector(`#plus`).addEventListener(`click`, e =>{
    let num1 = Number(document.formUser.num1.value);
    let num2 = Number(document.formUser.num2.value);
    document.querySelector('#data').innerHTML = num1 + num2;
})
document.querySelector(`#min`).addEventListener(`click`, e =>{
    let num1 = Number(document.formUser.num1.value);
    let num2 = Number(document.formUser.num2.value);
    document.querySelector(`#data`).innerHTML = num1 - num2;
})
document.querySelector(`#dev`).addEventListener(`click`, e =>{
    let num1 = Number(document.formUser.num1.value);
    let num2 = Number(document.formUser.num2.value);
    document.querySelector(`#data`).innerHTML = num1 / num2;
})
document.querySelector(`#multi`).addEventListener(`click`, e =>{
    let num1 = Number(document.formUser.num1.value);
    let num2 = Number(document.formUser.num2.value);
    document.querySelector(`#data`).innerHTML = num1 * num2;
})