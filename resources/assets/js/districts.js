import GoogleMaps from "google-maps";
import  $ from 'jquery';

$(document).ready(init());

function init () {
    GoogleMaps.load((google) => {

        const mapNode = document.getElementById('map_district');
        if (!mapNode) return;
        const vinnytsia = new google.maps.LatLng(49.234741, 28.472035);
        const map = new google.maps.Map(mapNode, {
            center: vinnytsia,
            zoom: 18
        });
    });
    // $('.districts-name').on('mouseover',getDates(this));
}

// function getDates(dates) {
//     console.log($(dates));
// }