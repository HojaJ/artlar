import Swiper, { Navigation, Parallax, Pagination,Mousewheel,EffectCoverflow, Keyboard, Zoom, Grid,A11y, FreeMode, Scrollbar } from 'swiper';
import $ from 'jquery';
Swiper.use([Navigation,Parallax, Pagination, Mousewheel,Keyboard,EffectCoverflow, Zoom, Grid,A11y, FreeMode, Scrollbar]);

$(function () {
    let heroSlider = new Swiper(".heroSlider", {
        direction: "vertical",
        autoHeight: true,
        grabCursor: true,
        // zoom: true,
        keyboard: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index <9  ? '0' : '')  + ( index + 1) + "</span>";
            },
        },
    });

    let artistSlider = new Swiper(".slideSlider", {
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
            draggable: true,
        },
        slidesPerView: 2,
        spaceBetween: 30,
        grabCursor: true,
        breakpoints: {
            776:{
                slidesPerView: 3,
            },
            1200: {
                centeredSlides: true,
                slidesPerView: 4,
            }
        }
    });

    let newSlider = new Swiper(".newSlider", {
        effect: "coverflow",
        grabCursor: true,
        slidesPerView: "auto",
        autoHeight: true,
        centeredSlides: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true
        },
        spaceBetween: 50,
        loop: false,
        pagination: false,

        breakpoints: {

            576:{
                spaceBetween: 70,
            },
            768: {
                spaceBetween: 100,
            }
        }
    });

    let newsSlider = new Swiper(".newsSlider", {
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
            draggable: true,
        },
        grabCursor: false,
    });

})
