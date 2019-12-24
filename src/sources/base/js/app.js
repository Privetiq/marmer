$(document).ready(function () {

    // //input number
    // $('.add').click(function () {
    //     $(this).prev().val(+$(this).prev().val() + 1);
    //     $(this).siblings('span').parent('input').val(+$(this).prev().val() + 1);
    // });
    // $('.sub').click(function () {
    //     if ($(this).next().val() > 1) {
    //         if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    //     }
    // });

    //wpf7------------
    //checkbox & radio
    $('.wpcf7-list-item .wpcf7-list-item-label').on('click', function(){
        $(this).parent().parent().find('input').removeAttr('checked');
        $(this).prev().attr('checked', 'checked');
    });

    //input number
    $('.add').click(function () {
        $(this).prev().children().val(+$(this).prev().children().val() + 1);
    });
    $('.sub').click(function () {
        if ($(this).next().children().val() > 1) {
            if ($(this).next().children().val() > 1) $(this).next().children().val(+$(this).next().children().val() - 1);
        }
    });

    //custom select
    $('.select-box select, .wpcf7-select').each(function () {
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children('li');

        $styledSelect.click(function (e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function () {
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });

        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            //console.log($this.val());
        });

        $(document).click(function () {
            $styledSelect.removeClass('active');
            $list.hide();
        });
    });

    $('.reviews-slider').slick({
        prevArrow: $('.reviews-slider-container .slider-controls .slider-prev'),
        nextArrow: $('.reviews-slider-container .slider-controls .slider-next'),
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '120px',
        vertical: true,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    centerPadding: '60px',
                    vertical: false,
                    arrows: false
                }
            }, {
                breakpoint: 481,
                settings: {
                    centerMode: false,
                    centerPadding: '0px',
                    vertical: false,
                    arrows: false
                }
            }
        ]
    });

    $('.about-slider').slick({
        prevArrow: $('.about-slider-container .slider-controls .slider-prev'),
        nextArrow: $('.about-slider-container .slider-controls .slider-next'),
        fade: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.project-slider').slick({
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

    $('.header-menu .menu li.with-dropdown > a').on('click', function(){
        event.preventDefault();
        console.log('click on dropdown');
    })

    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 52.393982, lng: 4.814673 },
        zoom: 8,
        disableDefaultUI: true,
        styles: [
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#5c9eb9"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            }
        ]
    })
});

$(window).on('load, scroll', function () {
    if ($(window).scrollTop() > 0) {
        $('.block-header').addClass('fixed-header');
    } else {
        $('.block-header').removeClass('fixed-header');
    }
});