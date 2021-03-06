function getmap(){
	var geocoder;
	var map;
	geocoder = new google.maps.Geocoder();
  	var latlng = new google.maps.LatLng(-34.397, 150.644);
  	var mapOptions = {
    zoom: 8,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
		}
	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	var address = document.getElementById('address').value;
 	geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
     return false;
}