var map = L.map('map').setView([12.24507,109.19432], 13);
var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
})
// titlelayer provider
googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
});
googleStreets.addTo(map);

googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
maxZoom: 20,
subdomains:['mt0','mt1','mt2','mt3']
});
var Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
    maxZoom: 20,
  attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
});
// style icon
var myIcon = L.icon({
    iconUrl: '../img/Moroco_Insurance_Icon2.png',
    iconSize: [35, 35]
});
var myIconEat = L.icon({
    iconUrl: '../img/eat2.png',
    iconSize: [30, 30]
});
var myIconCoffee = L.icon({
    iconUrl: '../img/coffee2.png',
    iconSize: [30, 40]
});
var myIconHotel = L.icon({
    iconUrl: '../img/hotel.png',
    iconSize: [40, 30]
});

// geojson
var pointData = L.geoJson(dulich_point,{
    pointToLayer: function(geoJsonPoint, latlng) {
        return L.marker(latlng, {
            icon: myIcon
        })
    },
    onEachFeature: function (feature, layer) {
        layer.bindPopup( 
          `<div class="card">
            <img class="card-img-top" src=`+feature.properties.img+` alt="">
              <div class="card-body">
                    <h4 class="card-title">`+feature.properties.name + `</h4>
                <p class="card-text">`+feature.properties.title+ `</p>
                Chỉ đường: 
                <button class="btn btn-outline-primary" onclick = 'return toado(`+feature.geometry.coordinates[1]+`,`+feature.geometry.coordinates[0]+`)' > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                      </svg>
                </button>
              </div>
          </div>
          `
          )
    },
}).addTo(map)

var eat = L.geoJson(eat_point,{
    pointToLayer: function(geoJsonPoint, latlng) {
        return L.marker(latlng, {
            icon: myIconEat
        })
    },
    onEachFeature: function (feature, layer) {
        layer.bindPopup( 
          `<div class="card">
            <img class="card-img-top" src=`+feature.properties.img+` alt="">
              <div class="card-body">
                  <h4 class="card-title">`+feature.properties.name + `</h4>
                  <p class="card-text"><b>Địa điểm : </b>`+feature.properties.location+ `</p>
                  <p class="card-text"><b>Thời gian : </b>`+feature.properties.Time+ `</p>
                  <p class="card-text"><b>Giá : </b>`+feature.properties.Price+ `</p>
                  Chỉ đường: 
                <button class="btn btn-outline-primary" onclick = 'return toado(`+feature.geometry.coordinates[1]+`,`+feature.geometry.coordinates[0]+`)' > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                      </svg>
                </button>
              </div>
          </div>
          `
          )
    },
}).addTo(map)

var coffe = L.geoJson(coffe_point,{
    pointToLayer: function(geoJsonPoint, latlng) {
        return L.marker(latlng, {
            icon: myIconCoffee
        })
    },
    onEachFeature: function (feature, layer) {
        layer.bindPopup( 
          `<div class="card">
            <img class="card-img-top" src=`+feature.properties.img+` alt="">
              <div class="card-body">
                  <h4 class="card-title">`+feature.properties.name + `</h4>
                  <p class="card-text"><b>Địa điểm : </b>`+feature.properties.location+ `</p>
                  <p class="card-text"><b>Phone : </b>`+feature.properties.Phone+ `</p>
                  <p class="card-text"><b>Giá : </b>`+feature.properties.Price+ `</p>
                  Chỉ đường: 
                <button class="btn btn-outline-primary" onclick = 'return toado(`+feature.geometry.coordinates[1]+`,`+feature.geometry.coordinates[0]+`)' > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                      </svg>
                </button>
              </div>
          </div>
          `
          )
    }

}).addTo(map)

    var hotel = L.geoJson(hotel_point,{
    pointToLayer: function(geoJsonPoint, latlng) {
        return L.marker(latlng, {
            icon: myIconHotel
        })
    },
    onEachFeature: function (feature, layer) {
        layer.bindPopup( 
          `<div class="card">
            <img class="card-img-top" src=`+feature.properties.img+` alt="">
              <div class="card-body">
                  <h4 class="card-title">`+feature.properties.name + `</h4>
                  <p class="card-text"><b>Đánh giá : </b>`+feature.properties.star+ `</p>
                  <button type="button" class="btn btn-primary btnhotel" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Booking Hotel</button>
                  <p>Chỉ đường:
                    <button class="btn btn-outline-primary" onclick = 'return toado(`+feature.geometry.coordinates[1]+`,`+feature.geometry.coordinates[0]+`)' > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                        </svg>
                   </button>  
                  </p> 
                  <br>
                  
              </div>
          </div>
          `
          )
    }
}).addTo(map)
// layer control
var baseMaps = {
    "googleStreets": googleStreets,
    "osm": osm,
    "googleSat": googleSat,
    "Stadia_AlidadeSmoothDark": Stadia_AlidadeSmoothDark
};

var overlayMaps = {
  "Khu vui chơi": pointData,
  "Địa điểm ăn uống": eat,
  "Cà Phê" : coffe,
  "Khách sạn": hotel
  
};
map.removeLayer(eat)
map.removeLayer(coffe)
map.removeLayer(hotel)
L.control.layers(baseMaps, overlayMaps, {collapsed: false }).addTo(map);
// event
map.on('mousemove', function(e) {
    document.getElementsByClassName('corrdinate')[0].innerHTML = 'lat: ' +e.latlng.lat +' lng: ' +e.latlng.lng;
})
// rute
var control = L.Routing.control({
waypoints: [
    L.latLng(12.24507,109.19432)
],
geocoder: L.Control.Geocoder.nominatim(),
routeWhileDragging: true,
reverseWaypoints: true,
showAlternatives: true,
altLineOptions: {
    styles: [
        {color: 'black', opacity: 0.15, weight: 9},
        {color: 'white', opacity: 0.8, weight: 6},
        {color: 'blue', opacity: 0.5, weight: 2}
    ]
}
})
control.addTo(map);
function toado(lat,lng) {
    var latlng = L.latLng(lat,lng)
    control.spliceWaypoints(control.getWaypoints().length - 1, 1, latlng);
    map.setView([12.24507,109.19432], 15);
    // layer.remove();
}