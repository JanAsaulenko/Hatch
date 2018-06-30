import GoogleMaps from "google-maps";
 import  $ from 'jquery';
 console.log('sdfsdf');

function  loadDistricts() {
     console.log('redo')
        $.getJSON('resources/assets/districts.json', function (data) {
            console.log(data)
            let out = '';
            for (let key in data) {
                out += `<div class="single-goods">`;
                out += '<h1>' + data[key].name + '</h1>';
                out += '<p>Цена:' + data[key].cost + '</p>';
                out += `<img src=${data[key].image}>`;
                out += '<button class="add" data-art="' + key + '">Купить</button>'
                out += `</div>`
            }
        })
}
loadDistricts();
// GoogleMaps.load((google) => {
//     const mapNode = document.getElementById('map');
//     if (!mapNode) return;
//     const lngNode = document.getElementById('lng');
//     const latNode = document.getElementById('lat');
//     const latitude = 49.234741;
//     const longitude = 28.472035;
//     const myLatLng = {lat: latitude, lng: longitude};
//
//     const map = new google.maps.Map(mapNode, {
//         center: myLatLng,
//         zoom: 14,
//     });
//
//     let marker;
//
//
//     // Create new marker on double click event on the map
//     google.maps.event.addListener(map, 'click', function (event) {
//         !!marker && marker.setMap(null); //remove marker if marker is true (!! operators)
//         latNode.value = event.latLng.lat();
//         lngNode.value = event.latLng.lng();
//         marker = new google.maps.Marker({
//             position: event.latLng,
//             map: map,
//             title: `${event.latLng.lat()}, ${event.latLng.lng()}`,
//         });
//
//         // Update lat/long value of div when the marker is clicked
//         marker.addListener('click', function () {
//             marker.setMap(null);
//         });
//     });
// });
