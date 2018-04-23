import Swiper from 'swiper';

const swiper = new Swiper('.swiper-container', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
$(function () {
    $('#datetimepicker1').datetimepicker();
});