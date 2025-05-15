<div id="map" style="width: 100%; height: 100vh;"></div>

<!-- CSS dan JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<script>
	const map = L.map('map').setView([51.505, -0.09], 13);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	// Tambahkan fitur search
	L.Control.geocoder({
		defaultMarkGeocode: true
	}).addTo(map);

	// Marker bawaan
	L.marker([51.5, -0.09]).addTo(map)
		.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();
</script>
