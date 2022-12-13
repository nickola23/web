document.getElementById(`img`).addEventListener(`click`, remove =>{
    document.getElementById(`img`).style.visibility = `hidden`;
    document.getElementById(`text`).style.display = `none`;
    document.getElementById(`btn`).style.display = `block`;
})
document.getElementById(`img`).addEventListener(`mouseover`, remove =>{
    document.getElementById(`text`).style.display = `block`;
})
document.getElementById(`btn`).addEventListener(`click`, add =>{
    document.getElementById(`img`).style.visibility = `visible`;
    document.getElementById(`text`).style.display = `none`;
    document.getElementById(`btn`).style.display = `none`;
})