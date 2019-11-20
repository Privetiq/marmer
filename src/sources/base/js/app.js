$(window).on('load, scroll', function () {
    if ($(window).scrollTop() > 0) {
        $('.block-header').addClass('fixed-header');
    } else {
        $('.block-header').removeClass('fixed-header');
    }
});