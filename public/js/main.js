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


// let sidebarSize = document.getElementById("fix").offsetWidth;
// let mainElement = document.getElementById("mobile");

// if mobile screen size
if (isMobile(window.innerWidth)) {
    // remove nav
    // let sizeNow = document.getElementById('fix');
    // sizeNow.parentElement.removeChild(sizeNow);

    // // add mobile navbar
    // const bottombar = document.createElement('div');
    // const mysnippet = "<nav class='ui nav navbar-nav inverted fix darkblue four item labeled menu'>" +
    //     "<a class='item' href='/'>" +  "Home" + "</a>" +
    //     `<a class='item' href='/portfolio'>` + "portfolio" + "</a>" +
    //     `<a class='item' href='/about'>`  + "about" + "</a>" +
    //     `<a class='item' href='contact'>` + "contact" + "</a>" + "</nav>";

    // mainElement.insertAdjacentHTML('beforebegin', mysnippet);
    var rem = document.getElementById("remove");
    function removeElement(rem) {
        var elem = rem;
        return elem.parentNode.removeChild(elem);
    }


}

// // At page load complete load
// window.addEventListener('load', function(event) {

//     // resize content to match window size
//     resizeMain();

//     // Resize content
//     window.addEventListener('resize', function(event) {
//         resizeMain();
//     });
// });




///////////////////////////////////////////////////////////////////////////////
//                              Helper Functions                             //
///////////////////////////////////////////////////////////////////////////////

function isMobile(windowInnerWidth) {
    if (windowInnerWidth < '768') {
        return 1;
    }
    return 0;
}

// formula so main matches window size minus sizeNow
// function resizeMain() {
//     mainElement.style.width = (window.innerWidth) + 'px';
// }


// active tab
let active = window.location.pathname;
if (active == '/'){
    $( "li.home" ).toggleClass( "activeNow");
}
else if(active == '/portfolio'){
    $( "li.portfolio" ).toggleClass( "activeNow");
}
else if(active == '/about'){
    $( "li.about" ).toggleClass( "activeNow");
}
else if(active == '/blog'){
    $( "li.blog" ).toggleClass( "activeNow");
}
else if(active == '/contact'){
    $( "li.contact" ).toggleClass( "activeNow");
}