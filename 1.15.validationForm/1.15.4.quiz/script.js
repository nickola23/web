document.querySelector(`#submit`).addEventListener(`click`, e =>{
    e.preventDefault();
    validateForm();
})
function validateForm(){
    let name = document.formUser.name.value;
    let email = document.formUser.email.value;
    let color = document.formUser.color;
    let location = document.formUser.location;
    let leader = document.formUser.leader;
    let city = document.formUser.city.value;
    
    if(color[0].checked == false && !color[1].checked == false  && !color[2].checked == false && !color[3].checked == false && !color[4].checked == false){
        alert(`All questions must be answered!`);
        return false;
    }

    if(location[0].checked == false && location[1].checked == false && location[2].checked == false){
        alert(`All questions must be answered!`);
        return false;
    }

    if(leader[0].checked == false && leader[1].checked == false && leader[2].checked == false){
        alert(`All questions must be answered!`);
        return false;
    }
    
    if(name == ``){
        alert(`Name must be inserted!`);
        return false;
    }
    else if(!/[a-zA-Z]+[ ]+[a-zA-Z]+$/.test(name)){
        alert(`Not valid name!`);
        return false;
    }

    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        alert(`Not valid email adress!`);
        return false;
    }

    if(city == "Choose city"){
        alert(`City must be choosen!`);
    }
    
}