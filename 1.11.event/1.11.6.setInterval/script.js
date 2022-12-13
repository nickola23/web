let milisec = 0;
let sec = 0;
let min = 0;
let run = 0;
document.querySelector(`.start`).addEventListener(`click`, e =>{
    if(!run)
        run = setInterval( e =>{
            milisec ++; 
            document.querySelector(`.timerSec`).innerHTML = ('0' + sec).slice(-2);
            document.querySelector(`.timerMin`).innerHTML = ('0' + min).slice(-2);
            document.querySelector(`.timerMilisec`).innerHTML = ('0' + milisec).slice(-2);
            if(milisec == 99){
                milisec = 0;
                sec ++;
            }
            if(sec == 59){
                sec = 0;
                min ++;
            }
        },10)
})
document.querySelector(`.stop`).addEventListener(`click`, e =>{
    if(run){
        clearInterval(run);
        run = undefined;
    }
})
document.querySelector(`.reset`).addEventListener(`click`, e =>{
    sec = 0;
    min = 0;
    milisec = 0;
    document.querySelector(`.timerSec`).innerHTML = ('0' + sec).slice(-2);
    document.querySelector(`.timerMin`).innerHTML = ('0' + min).slice(-2);
    document.querySelector(`.timerMilisec`).innerHTML = ('0' + milisec).slice(-2);
})
