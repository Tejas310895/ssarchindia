$(function () {

    var swiper = new Swiper('.carousel-gallery .swiper-container', {
        effect: 'slide',
        speed: 900,
        slidesPerView: 5,
        spaceBetween: 20,
        simulateTouch: true,
        autoplay: {
            delay: 5000,
            stopOnLastSlide: false,
            disableOnInteraction: false
        },
        pagination: {
            el: '.carousel-gallery .swiper-pagination',
            clickable: true
        },
        breakpoints: {
            // when window width is <= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 5
            },
            // when window width is <= 480px
            425: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is <= 640px
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    }); /*http://idangero.us/swiper/api/*/



});

$('.filters ul li').click(function () {
    $('.filters ul li').removeClass('active');
    $(this).addClass('active');

    var data = $(this).attr('data-filter');
    $grid.isotope({
        filter: data
    })
});

var $grid = $(".grid").isotope({
    itemSelector: ".all",
    percentPosition: true,
    masonry: {
        columnWidth: ".all"
    }
})

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    mouseDrag: false,
    autoplay: true,
    animateOut: 'slideOutUp',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

