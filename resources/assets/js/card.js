import Swiper from "swiper"
import $ from "jquery";

const districts = {
    "12134":{
        "name":"Leninskiy",
        "image":"style='background-image:url({{asset('images/body_bg.jpg')}})'"
    },
    "12132":{
        "name":"Zamostianskiy"
    },
    "12135":{
        "name":"Staromiskiy",
    }
}

function loadDistricts(data){

        let out = '';
        for (let key in data) {
            out += `<div class="district>`;
            out+= `<a href="district/${data[key].name}">`;
            out += '<span class="district-name">' + data[key].name + '<span/>';
            out += `<img  class="district-image" src=${data[key].image}>`;
            out+=`</a>`;
            out += `</div>`
        }
        $('.districts-name').html(out);
}
loadDistricts(districts);

const galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});
const galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: false,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true,
    autoplay: {
        delay: 3000,
        speed:4000,
        reverseDirection: false
    },
});
galleryTop.forEach((el, key) => {
    galleryTop[key].controller.control = galleryThumbs[key];
    galleryThumbs[key].controller.control = galleryTop[key];
});
