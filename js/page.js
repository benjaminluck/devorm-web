function moveToSlickSlide(toSlide){
    lazyCollapse(250);
    $('.container').slick('slickGoTo', toSlide);
    
}

function lazyCollapse(time) {
    setTimeout(function () {
            $('#nav-collapse-btn').click();
    }, time);
}