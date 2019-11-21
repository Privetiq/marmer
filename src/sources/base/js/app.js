$(document).ready(function () {
    $('.reviews-slider').slick({
        prevArrow: $('.reviews-slider-container .slider-controls .slider-prev'),
        nextArrow: $('.reviews-slider-container .slider-controls .slider-next'),
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '120px',
        vertical: true
    });
});

$(window).on('load, scroll', function () {
    if ($(window).scrollTop() > 0) {
        $('.block-header').addClass('fixed-header');
    } else {
        $('.block-header').removeClass('fixed-header');
    }
});