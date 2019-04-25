window.onload = start; 

function start() {
    mapboxgl.accessToken = 'pk.eyJ1IjoidGluZGVycmlkZGFyZW42OSIsImEiOiJjanBheTNxczEyMG4zM2tvMzE2MnViZjAxIn0.jwlmNBTNWD8ND2UNaK7pNQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/tinderriddaren69/cjptplefa5yos2rnpo0homze3', // stylesheet location
        center: [18.07, 59.33], // starting position [lng, lat]
        zoom: 10 // starting zoom
    });
}
