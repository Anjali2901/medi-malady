var map;
var infowindow;

function initialize() {
  var pyrmont = new google.maps.LatLng(19.107567, 72.8335); // sample location to start with: Mumbai, India

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: pyrmont,
    zoom: 15
  });

  var request = {
    location: pyrmont,
    radius: 200,
    types: ['hospital', 'health'] // this is where you set the map to get the hospitals and health related places
  };
  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
	position: place.geometry.location
  });

  html, body, #map-canvas {
  height: 100%;
  margin: 0px;
  padding: 0px
}
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

<div id="map-canvas"></div>



google api : AIzaSyDHZztpRXvUsoyKWxMMD0rJtZgQK9nFk5E
