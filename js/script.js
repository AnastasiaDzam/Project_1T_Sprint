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
let img = document.querySelector('.ita_img_cloud_big')
if (innerWidth < 1000) {
    img.src = './img/cloud_ita_big.svg'
    $('#comics_block').css('display', 'none')
    $('#adaptiv_comics_block').css('display', 'block')

} else {
    console.log('else')
    img.src = './img/cloud.svg'
    $('#comics_block').css('display', 'block')
    $('#adaptiv_comics_block').css('display', 'none')
}
let counterShow = 1

$(".comics_btn_add").click((event) => {
    $('#authors-list > .comics_hide').first().show().removeClass('comics_hide');
    counterShow++
    console.log(counterShow)
    if (counterShow >= 6) {
        $('.comics_btn').hide()
    }
})



