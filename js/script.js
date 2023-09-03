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
if (innerWidth < 1000) {
    let img = document.querySelector('.ita_img_cloud_big')
    img.src = './img/cloud_ita_big.svg'
} else {
    img.src = './img/img/cloud.svg'
}

