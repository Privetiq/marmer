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

    $('.about-slider').slick({
        prevArrow: $('.about-slider-container .slider-controls .slider-prev'),
        nextArrow: $('.about-slider-container .slider-controls .slider-next'),
        fade: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.text-slider').slick({
        prevArrow: $('.text-slider-container .slider-controls .slider-prev'),
        nextArrow: $('.text-slider-container .slider-controls .slider-next'),
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.burger').on('click', function(){
        $(this).toggleClass('active');
        $('body').toggleClass('opmenu');
        $('header').toggleClass('opmenu');

        return false;
    });
});

$(window).on('load, scroll', function () {
    if ($(window).scrollTop() > 0) {
        $('.block-header').addClass('fixed-header');
    } else {
        $('.block-header').removeClass('fixed-header');
    }
});