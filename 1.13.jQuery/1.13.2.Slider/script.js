$(document).ready(function(){
    var currentImg = $('.slider-container img.active');
    var nextImg = currentImg.next();
    var prevImg = currentImg.prev();
    var currentDot = $('.dots-container .dot.active');
    var nextDot = currentDot.next();
    var prevDot = currentDot.prev();

    $('.right-arrow').click(function(){
        currentImg.removeClass('active');
        currentDot.removeClass('active');
        if(nextImg.length){
            nextImg.addClass('active');
            nextDot.addClass('active');
        }else{
            $('.slider-container img').first().addClass('active');
            $('.dots-container .dot').first().addClass('active');
        }
        currentImg = $('.slider-container img.active');
        nextImg = currentImg.next();
        prevImg = currentImg.prev();
        currentDot = $('.dots-container .dot.active');
        nextDot = currentDot.next();
        prevDot = currentDot.prev();
    });

    $('.left-arrow').click(function(){
        currentImg.removeClass('active');
        currentDot.removeClass('active');
        if(prevImg.length){
            prevImg.addClass('active');
            prevDot.addClass('active');
        }else{
            $('.slider-container img').last().addClass('active');
            $('.dots-container .dot').last().addClass('active');
        }
        currentImg = $('.slider-container img.active');
        nextImg = currentImg.next();
        prevImg = currentImg.prev();
        currentDot = $('.dots-container .dot.active');
        nextDot = currentDot.next();
        prevDot = currentDot.prev();
    });

    $('.dots-container .dot').click(function(){
        var clickedDot = $(this);
        var index = clickedDot.index();
        currentImg.removeClass('active');
        currentDot.removeClass('active');
        $('.slider-container img').eq(index).addClass('active');
        clickedDot.addClass('active');
        currentImg = $('.slider-container img.active');
        nextImg = currentImg.next();
        prevImg = currentImg.prev();
        currentDot = clickedDot;
        nextDot = currentDot.next();
        prevDot = currentDot.prev();
    });
    });


