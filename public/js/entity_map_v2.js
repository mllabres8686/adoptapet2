/**
 * Created by DAW2 on 28/05/2020.
 */
/* Google Maps API */

var map;
var service;
var infowindow;
var nombre_ass = $("#name").val();
var direccion_ass = $("#address").val();

function variable_init(){
    console.log("DIRECCION: "+$("#address").val());
    console.log("DIRECCION: "+direccion_ass);
    console.log("NAME: "+nombre_ass);
    if(direccion_ass !== ""){
        console.log("CREATING MAP");
        initMap();
    }
}


function initMap() {

    infowindow = new google.maps.InfoWindow();

    map = new google.maps.Map(
        document.getElementById('map'), {
        zoom: 15,
        disableDefaultUI: true
    });

    var request = {
        query: direccion_ass,
        fields: ['name', 'geometry'],
    };

    service = new google.maps.places.PlacesService(map);
    service.findPlaceFromQuery(request, function(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                createMarker(results[i]);
            }
            map.setCenter(results[0].geometry.location);
        }
    });
}

function createMarker(place) {
    //
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent("<h6>"+nombre_ass+"</h6>"+direccion_ass);
        infowindow.open(map, this);
    });
}


setTimeout("variable_init();", 300);