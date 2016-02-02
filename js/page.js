function moveToSlickSlide(toSlide){
    lazyCollapse(250);
    $('.container').slick('slickGoTo', toSlide);
}

function moveThroughSplash(){
    $('.nav').css('opacity', 1);
    unveilSplash(500,"#slide-splash","slide-0",1,0);
    //$('.container').slick('slickGoTo', 1);
    //$('.container').slick('slickRemove', 0);
    $('.container').slick('slickSetOption','accessibility', true);
    $('.container').slick('slickSetOption','draggable', true);
}

function lazyCollapse(time) {
    setTimeout(function () {
            $('#nav-collapse-btn').click();
    }, time);
}

function unveilSplash(time, elementA, elementB, slideNoA, slideNoB){
    $(elementA).css('opacity',0);
    $(elementB).css('opacity',0);
    setTimeout(function () {
            $('.container').slick('slickGoTo', slideNoA);
            $('.container').slick('slickRemove', slideNoA);
            $(elementB).css('opacity',1);
    }, time);  
}