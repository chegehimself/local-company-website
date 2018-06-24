// window scroll function
$(window).on('scroll', function() {
    var scrollTop = $(window).scrollTop();

    if (scrollTop >= 150 && scrollTop <= 400) {
        $('#top-top').stop().animate({padding: "0px 0px 0px 0px"}, 800);
        $('#nav-log').stop().animate({height: "50px"}, 800);
        $('#navigation-main').stop().animate({height: "50px"}, 800);
        $('#navigation-main').stop().animate({padding: "10px 0px 0px 0px"}, 800);
    } else {
        $('#top-top').stop().animate({padding: "10px 0px 20px 0px"}, 800);
    }
});
