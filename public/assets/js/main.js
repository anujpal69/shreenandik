$(document).ready(function(){

    function initOwlCarousel() {
   
    $('.digious-carousel1').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            280: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    $('.digious-carousel2').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 7000,
        responsive: {
            0: {
                items: 1
            },
            280: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    $('.team-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('.owl-back-end').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        stagePadding: 20,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 3
            },
            768: {
                items: 5
            }
        }
    });

    $('.owl-front-end').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        stagePadding: 20,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 3
            },
            768: {
                items: 5
            }
        }
    });

    $('.portfolio').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
        }
    });

    $('.counter-value').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 3500,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
}

initOwlCarousel();
$(window).on('resize', function(){
    $('.owl-carousel').trigger('destroy.owl.carousel');
    initOwlCarousel();
});
});






const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));