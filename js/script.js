$('.my-flipster').flipster({
    style: 'flat',
    start: 'center',
    spacing: -0.3,
    nav: true,
    buttons: true,
    loop: true,
    scrollwheel: false,
});
$('body').on('click', 'a.flipster__nav__link', function (e) {
    e.preventDefault();
});
