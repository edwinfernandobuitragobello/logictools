var map;

function initMap() {

    var myLatLng = {lat: 4.6643393, lng: -74.11451139999997};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: myLatLng,
        scrollwheel: false,
        disableDefaultUI: true,
        styles: styles
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Logictools.co',
        icon: 'images/marker.png'
    });

    marker.setAnimation(google.maps.Animation.BOUNCE);

    var styles = [
    {
        featureType: "landscape",
        stylers: [
        { color: '#eeddee' }
        ]
    },{
        featureType: "natural",
        stylers: [
        { hue: '#ff0000' }
        ]
    },{
        featureType: "road",
        stylers: [
        { hue: '#5500aa' },
        { saturation: -70 }
        ]
    },{
        featureType: "building",
        elementType: "labels",
        stylers: [
        { hue: '#000066' }
        ]
    },{
        featureType: "poi", //points of interest
        stylers: [
        { hue: '#0044ff' }
        ]
    }
    ];

    map = new google.maps.Map(document.getElementById('map'), map);
}




