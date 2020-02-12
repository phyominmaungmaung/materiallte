$(document).ready(function () {
    var map=new google.maps.Map(document.getElementById('map'),{
center:{lat:24.397,lng:80.644},
zoom:8
    });
    var request ={
        location:{lat:24.397,lng:80.644},
        radius: '1500',
        types:['school']
    };
    service =new google.maps.places.PlacesService(map);
    service.nearbySearch(request,callback);
    function callback(results, status) {
        console.log(results);
    }

})