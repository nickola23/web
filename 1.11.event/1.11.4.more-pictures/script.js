document.querySelectorAll(`img`).forEach(e =>{
    e.addEventListener(`mouseover`, e =>{
        e.target.style.scale = `2`;
})
    e.addEventListener(`mouseout`, e =>{
        e.target.style.scale = `1`;
})
})