import Swiper, { Navigation, Parallax, Pagination,Mousewheel, Keyboard, Zoom, Grid,A11y, FreeMode, Scrollbar } from 'swiper';
import $ from 'jquery';
Swiper.use([Navigation,Parallax, Pagination, Mousewheel,Keyboard, Zoom, Grid,A11y, FreeMode, Scrollbar]);

$(function () {
    let heroSlider = new Swiper(".heroSlider", {
        direction: "vertical",
        autoHeight: true,
        grabCursor: true,
        zoom: true,
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
            576:{
                slidesPerView: 3,
            },
            1200: {
                centeredSlides: true,
                slidesPerView: 4,
            }
        }
    });

    let newSlider = new Swiper(".newSlider", {
        slidesPerView: 2,
        spaceBetween: 20,
        grabCursor: true,
        speed: 600,
        parallax: true,
        loopAdditionalSlides: 30,

        breakpoints: {
            576:{
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
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
