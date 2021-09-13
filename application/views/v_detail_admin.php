<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Detail Bidang</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=base_url() ?>assets/css/materialize.min.css"  media="screen,projection"/>
      <link href="<?=base_url() ?>assets/leaflet/leaflet.css" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- My css -->
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/style.css">

<style type="text/css">
  #mapid { height: 380px; }
        
       
</style>
</head>
<body>
  <body id="home" class="scrollspy">

      <!-- Navbar -->

          <div class="navbar-fixed">
            <nav class="teal darken-2">
              <div class="container">
              <div class="nav-wrapper">
                <a href="<?=base_url() ?>" class="brand-logo">Nainggolan Corp</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#maps">Maps</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <li><a href="<?=base_url('login/logout') ?>">Logout</a></li>
                </ul>
              </div>
              </div>
            </nav>
          </div>

   <!-- Peta -->
     <section id="maps" class="about scrollspy">
          <div class="container">
            <div class="row">
               <?php foreach ($bidang as $b) { ?>
                <h3 class="center light gray-text text-darken-3">Maps <?=$b->bidang_nama ?></h3>
               <?php } ?>
                 <div id="mapid"></div>
            </div>
        </section>

   <!-- Detail bidang -->
    <section id="about" class="about grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <?php foreach ($bidang as $b) { ?>
          <h3 class="center light gray-text text-darken-3">Detail Bidang <?=$b->bidang_nama ?></h3>
          <?php } ?>

            <div class="col m12 light">
              <div>
                
                  <?php foreach ($bidang as $b) { ?>
                  <p class="center"> <?=$b->bidang_keterangan ?></p>
                  <?php } ?>
                

                    <table class="centered responsive-table highlight">
                      <thead>
                        <tr>
                            <th>Nama Bidang</th>
                            <th>Lokasi</th>
                            <th>Lattitude</th>
                            <th>Longitude</th>
                            <th>Luas Area</th>
                            <th>Luas Tanaman</th>
                            <th>Produksi(Ton/tahun)</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach ($detail as $d) { ?>
                        <tr>
                            <td><?=$d->bidang_nama ?></td>
                            <td><?=$d->bidang_lokasi ?></td>
                            <td><?=$d->bidang_lat ?></td>
                            <td><?=$d->bidang_long ?></td>
                            <td><?=$d->luas_area ?></td>
                            <td><?=$d->luas_tanam ?></td>
                            <td><?=$d->produksi ?></td>
                            <td><?php echo anchor('admin/edit/'.$d->bidang_kode, '<i class="material-icons">edit</i>') ?>
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

              </div>
            </div>
          </div>
        </div> 
    </section>


  

  <!-- gallery -->

      <section id="gallery" class="Gallery  scrollspy">
        <div class="container">
           <?php foreach ($bidang as $b) { ?>
            <h3 class="center light gray-text text-darken-3">Gallery <?=$b->bidang_nama ?></h3>
           <?php } ?>
            <div class="row">
               <?php foreach ($dok as $d) { ?>
                <div class="col m4">
                      <img src="<?=base_url()?>assets/uploads/<?=$d->dokumentasi_gambar?>" style = "height :100%; width: 800px; "  class="responsive-img materialboxed">
                </div>
                 <?php } ?>
            </div>
        </div>
      </section>



  <!-- Footer -->
      <footer class="teal darken-3 white-text center ">
        <p class="flow-text">Nainggolan Corp .Copyright 2018</p>
      </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?=base_url() ?>assets/js/materialize.min.js"></script>
  <script src="<?=base_url() ?>assets/leaflet/leaflet.js"></script>

    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
          scrollOffset: 65
        });

      </script>

<!-- peta -->
  <script type="text/javascript">
      var map = L.map('mapid').setView([0.7726, 100.8777], 11);
      var base_url = "<?= base_url() ?>";
      var v_kode = "<?=$kode ?>"; 


   L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
      attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
  }).addTo(map);


// Bidang
     $.getJSON(base_url +"assets/geojson/map.geojson", function(data){
      geoLayer = L.geoJson(data, {
          style: function(feature) {

        var kode = feature.properties.kode;
        if(kode==v_kode) { //rayon a
           return {
                       fillOpacity: 0.3 ,
                       weight: 1,
                       opacity: 1,
                       color: "#008cff"
                  };
    
              }else {
                 return { //rayon c
                       fillOpacity: 0.0 ,
                       weight: 1,
                       opacity: 1,
                       color: null
                  };
              }
            
        },


           onEachFeature: function(feature, layer) {
            var kode = feature.properties.kode;
            var lat = parseFloat(feature.properties.latitude);
            var long =  parseFloat(feature.properties.longitude);

             if(kode==v_kode) {
                map.flyTo([long,lat], 12, {
                  animate: true,
                  duration: 1
                })
                var center = getCentroid(feature.geometry.coordinates[0]);
                L.marker([center[1], center[0]]).addTo(map);
             }
           }
      }).addTo(map);
    });

     var getCentroid = function (coord)
     {
        var center = coord.reduce(function (x,y) {
          return [x[0] + y[0]/coord.length, x[1] + y[1]/coord.length]
        }, [0,0]) 
        return center;
     }
  </script>

</body>
</html>