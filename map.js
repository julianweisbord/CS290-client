function initMap() {
  alert("Map working");
  var mapDiv = document.getElementById("map");
  var map = new google.maps.Map(mapDiv, {
    center: {lat: 44.563875, lng: -123.279895},
    zoom: 17,
  });
  var marker = new google.maps.Marker({
    position: map.center,
    map: map,
    title: 'You Are Here'
  });
  return map;
}

function getLocation() {
    if (navigator.geolocation) {
        var latlng = navigator.geolocation.getCurrentPosition(getPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
    return latlng;
}

function getPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    return latlon;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
