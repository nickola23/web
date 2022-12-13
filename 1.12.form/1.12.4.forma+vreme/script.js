document.querySelector(`#submit`).addEventListener(`click`, e =>{
    let name = document.formUser.name.value;
    let lastname = document.formUser.lastname.value;
    let grade = Number(document.formUser.grade.value);
    let date =  document.formUser.date.value;
    alert(`${name} ${lastname} je dana ${date} dobio/la ocenu ${grade}`);
})