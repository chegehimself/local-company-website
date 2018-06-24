// window scroll function
$(window).on('scroll', function() {
    var scrollTop = $(window).scrollTop();

    if (scrollTop >= 100 && scrollTop <= 400) {
        $('#top-top').stop().animate({padding: "0px 0px 0px 0px"}, 500);
        $('#nav-log').stop().animate({height: "50px"}, 500);
        $('#navigation-main').stop().animate({height: "50px"}, 500);
        $('#navigation-main').stop().animate({padding: "10px 0px 0px 0px"}, 500);
    } else {
        $('#top-top').stop().animate({padding: "10px"}, 800);
    }
});
