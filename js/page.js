function moveToSlickSlide(toSlide){
    lazyCollapse(250);
    $('.container').slick('slickGoTo', toSlide);
}

function moveThroughSplash(){
    $('.nav').css('opacity', 1);
    $('.container').slick('slickGoTo', 1);
    $('.container').slick('slickRemove', 0);
    $('.conatiner').slick('slickSetOption','accesibility', true);
    $('.conatiner').slick('slickSetOption','draggable', true);
}

function lazyCollapse(time) {
    setTimeout(function () {
            $('#nav-collapse-btn').click();
    }, time);
}