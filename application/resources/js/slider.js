import Splide from '@splidejs/splide';
import {AutoScroll} from '@splidejs/splide-extension-auto-scroll';

/*
new Splide("#brand-slider", {
    fixedWidth : '10rem',
    fixedHeight: '10rem',
    gap        : '1rem',
    type: 'loop',
    focus: 'center',
    perPage: 3,
    autoScroll: {
        speed: 1,
    },
}).mount({AutoScroll});
*/
document.addEventListener( 'DOMContentLoaded', function() {
    new Splide("#product-slider",{
        type: 'loop',
        drag: 'free',
        focus: 'center',
        perPage: 3,
        autoScroll: {
            speed: 1,
        },
    }).mount({AutoScroll});
    new Splide("#news-slider",{
        perPage: 1,

    }).mount();
} );

