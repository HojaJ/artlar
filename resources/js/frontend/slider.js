import Swiper, { Navigation, Pagination,Mousewheel, Keyboard, Zoom, Grid,A11y, FreeMode } from 'swiper';
import $ from 'jquery';
Swiper.use([Navigation, Pagination, Mousewheel,Keyboard, Zoom, Grid,A11y, FreeMode]);

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
        pagination: {
            el: ".swiper-pagination",
            clickable: true
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
        centeredSlides: true,
        loop: true,
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

})
