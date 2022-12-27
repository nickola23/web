$(document).ready(function(){
  $(".tree").click(function(){
    $(".card").fadeIn(1000);
    $(".mainCard").fadeIn(2000);
    document.querySelector(`.mainCard`).style.display = `flex`;
    $(".cardMainText").fadeIn(2500);
    $(".cardSecondText").fadeIn(3000);
    $(".cardDescText").fadeIn(3500);
    $(".cardFromText").fadeIn(3500);
    $(".social").fadeIn(3500);
    document.querySelector(`.social`).style.display = `flex`;
    $(".tree").fadeOut(1000);
  });
});