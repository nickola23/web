$(document).ready(function(){
    $(".cube").fadeIn(500);
    $(".cube").animate({right: '0'});
    setTimeout($(".cube").fadeOut(2000), 2 * 1000)
});