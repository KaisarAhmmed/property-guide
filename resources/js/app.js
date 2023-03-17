import './bootstrap';

import Alpine from 'alpinejs';
import jQuery from 'jquery';

import 'slick-carousel/slick/slick';

window.Alpine = Alpine;

Alpine.start();

window.$ = jQuery;

//import './slick.min';

jQuery(window).scroll(function() {
    const scroll = jQuery(window).scrollTop();

    if (scroll >= 50) {
        jQuery('.sticky-header').addClass('sticky-header-active');
    } else {
        jQuery('.sticky-header').removeClass('sticky-header-active');
    }
});

jQuery(document).ready(function($) {
    $('.gallery-slider').slick({
        asNavFor: '.thumbnail-slider',
        prevArrow: '<div class="left-icon"><img src="/img/chevron-left.svg"/></div>',
        nextArrow: '<div class="right-icon"><img src="/img/chevron-right.svg"/></div>',
        dots: false
    });

    $('.thumbnail-slider').slick({
        slidesToShow: 4,
        asNavFor: '.gallery-slider',
        centerMode: false,
        focusOnSelect: true,
        prevArrow: '<div class="left-icon"><img src="/img/chevron-left.svg"/></div>',
        nextArrow: '<div class="right-icon"><img src="/img/chevron-right.svg"/></div>',
        dots: false,
    });
    
})