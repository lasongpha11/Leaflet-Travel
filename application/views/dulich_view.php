
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Bản Đồ Du Lịch Việt Nam </title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- svg -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/bootstrap-icons.svg
"></script>
<!-- Leaflet - Route-machine -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
 <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
   </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost:82/crud-dulich/Login/">Travel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Bản Đồ Du Lịch Thành Phố Nha Trang Tỉnh Khánh Hòa <span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link" href="#"><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@getbootstrap"> <i class="fa fa-address-book" aria-hidden="true"></i> Đóng góp</button></a>
    </form>
  </div>
</nav>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Đóng góp địa điểm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tên Địa Điểm:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Địa Chỉ:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Cung cấp thêm thông tin sđt/ email/ các vấn đề khác : </label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <p>Dự án được phát triển bởi: </p>
          <p><li><b>Phan Phương Nam</b> : <a href="https://www.facebook.com/waidkid1412/" >https://www.facebook.com/waidkid1412/</a> </li> </p>
          <p><li>Liên hệ hoặc zalo để được hỗ trợ tốt nhất: <b>0966109724</b></li></p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary">Gửi Thông Tin</button>
      </div>
    </div>
  </div>
</div>
  <div id ="map">
    <div class="leaflet-control corrdinate"></div>
  </div>
<div class="main">
    <h2 class="display-8 my-4 text-info">Danh Sách Địa Điểm Du Lịch</h2>
    <!-- Jquery -->
    <div class="main-tren">
      <table class="table table-striped" id="users" style="width: 100%;">
        <thead >
          <tr id="list-header">
            <th scope="col">STT</th>
            <th scope="col">Tên Điạ Điểm</th>
            <th scope="col">Giá</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">SĐT</th>
          </tr>
        </thead>  
        <tbody>      
        </tbody>
      </table>
    </div>
    <!-- <button type="button" class="btn btn-primary" id="btnReloadData">Reload data</button> -->
    <!-- Tin Tuc -->
    <div class="main-duoi">
      <h4 class="display-6 my-4 text-info">Tin Tức Du Lịch Nha Trang</h4>
      <div style="display:inherit;padding-right:10px;height:100%;margin-left:-5px;padding-left:10px">
        <ul class="list-group">
           
  <!-- title img link subtitle currenttime -->
  <?php foreach ($dulieu as $value): ?>
   
            <li class="justify-content-between list-group-item">
                <div style="display: flex; margin-bottom: 5px; justify-content: space-between;">
                    <div><a class="title"
                            href=" <?php echo $value['link']; ?>"
                            style="color: #000"> <?php echo $value['title']; ?></a>
                        </div><img
                                src=" <?php echo $value['img']; ?>"
                                style="width: 70px; border-radius: 2px; max-height: 50px; margin-left: 5px;">
                    </div><small class="description" style="color: rgb(145, 150, 154);"> <?php echo $value['subtitle']; ?>
                    </small><br><small
                        class="fav" style="float: left; margin-top: 10px; color: rgb(145, 150, 154);"><img
                            src="https://www.google.com/s2/favicons?domain=vnexpress.net"
                            alt="vnexpress.net" class="mx-q" style="border-radius: 2px; width: 12px;">
                            vnexpress.net</small><small class="fav"
                        style="float: right; margin-top: 10px; color: rgb(145, 150, 154);"> <?php echo $value['created_at']; ?></small>
            </li>
  <?php endforeach ?>
        </ul>
    </div>

    </div>

</div>



<!-- Modal bootstrap -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ks" id="exampleModalLabel">Booking </h5>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(); ?>Dulich/add" method = "post">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name :</label>
              <input type="text" class="form-control" placeholder="VD: Phan Phuong Nam" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Phone:</label>
              <input type="text" class="form-control" placeholder="VD: 0966109724" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Email:</label>
              <input type="email" class="form-control" placeholder="VD: phanphuongnam0103@gmail.com" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Ngày vào ở / Ngày nhận phòng / <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg></label>
              <div class="row">
                <div class="col-sm-4">
                  <input id="datepicker" name="datepicker" width="156" /> 
                </div>
                <div class="col-sm-4">
                  <input id="datepicker1" name="datepicker1" width="156" /> 
                </div>
                <div class="col-sm-4">
                  <select class="form-control" name="khach" id="khach">
                    <option>1 khách</option>
                    <option>2 khách</option>
                    <option>3 khách</option>
                    <option>4 khách</option>
                  </select>
                </div>
              </div>
            </div>
          <!-- </form> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary booking" >Booking</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<!-- leflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/perliedman-leaflet-control-geocoder/2.3.0/Control.Geocoder.min.js"></script>
<!-- Jquery -->
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--  -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<!-- data -->
  <script src="<?php echo base_url(); ?>asset/data/dulich.js"></script>
  <script src="<?php echo base_url(); ?>asset/data/eat.js"></script>
  <script src="<?php echo base_url(); ?>asset/data/coffe.js"></script>
  <script src="<?php echo base_url(); ?>asset/data/hotel.js"></script>
    <!-- DataTables -->
<link rel="stylesheet" 
type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 
<script type="text/javascript" 
charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">    
</script>
<script src="<?php echo base_url(); ?>asset/jquery/index.js"></script>


<!-- geojson -->

<script>
  var map = L.map('map').setView([12.24507,109.19432], 13);
  var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
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
    iconUrl: '<?php echo base_url(); ?>asset/img/Moroco_Insurance_Icon2.png',
    iconSize: [35, 35]
});
var myIconEat = L.icon({
    iconUrl: '<?php echo base_url(); ?>asset/img/eat2.png',
    iconSize: [30, 30]
});
var myIconCoffee = L.icon({
    iconUrl: '<?php echo base_url(); ?>asset/img/coffee2.png',
    iconSize: [30, 40]
});
var myIconHotel = L.icon({
    iconUrl: '<?php echo base_url(); ?>asset/img/hotel.png',
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
                <a href="https://www.google.com/maps/dir/Tp.+Nha+Trang,+Kh%C3%A1nh+H%C3%B2a//@12.2387889,109.1616434,13z/data=!4m9!4m8!1m5!1m1!1s0x3170677811cc886f:0x5c4bbc0aa81edcb9!2m2!1d109.1967488!2d12.2387911!1m0!3e0?hl=vi-VN" >Mở google map</a>
                <br/>
                <br/>
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
                  <a href="https://www.google.com/maps/dir/Tp.+Nha+Trang,+Kh%C3%A1nh+H%C3%B2a//@12.2387889,109.1616434,13z/data=!4m9!4m8!1m5!1m1!1s0x3170677811cc886f:0x5c4bbc0aa81edcb9!2m2!1d109.1967488!2d12.2387911!1m0!3e0?hl=vi-VN" >Mở google map</a>
                  <br/>
                  <br/>
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
                  <a href="https://www.google.com/maps/dir/Tp.+Nha+Trang,+Kh%C3%A1nh+H%C3%B2a//@12.2387889,109.1616434,13z/data=!4m9!4m8!1m5!1m1!1s0x3170677811cc886f:0x5c4bbc0aa81edcb9!2m2!1d109.1967488!2d12.2387911!1m0!3e0?hl=vi-VN" >Mở google map</a>
                  <br/>
                  <br/>
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
                  <a href="https://www.google.com/maps/place/Tp.+Nha+Trang,+Kh%C3%A1nh+H%C3%B2a,+Vi%E1%BB%87t+Nam/@12.2404112,109.1765275,12.28z/data=!4m5!3m4!1s0x3170677811cc886f:0x5c4bbc0aa81edcb9!8m2!3d12.2387911!4d109.1967488?hl=vi-VN" >Mở google map</a>
                  <button type="button" class="btn btn-primary btnhotel" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Booking Hotel</button>
                  <p>Chỉ đường:
                    <button class="btn btn-outline-primary" onclick = 'return toado(`+feature.geometry.coordinates[1]+`,`+feature.geometry.coordinates[0]+`)' >
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 
                        4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                        </svg>
                   </button>  
                  </p> 
                  <br>
              </div>
               
          </div>`
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
// router
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
</script>
</body>
</html>
<!-- Booking Model -->
<script>
$(document).ready(function(){
$(".booking").click(function() {
  $('.ks').html(`
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Cảm Ơn Quý Khách !</strong> Chúng tôi sẽ liên hệ lại trong ít phút !
  </div>`
  );
});
$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker1').datepicker({
    uiLibrary: 'bootstrap4'
});
});

</script>
