<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <!DOCTYPE html>
  <html>
    <head>
      <title>Peta Perkebunan PT. Inti Kamparindo Sejahtera</title>
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
        #mapid { height: 480px; }
      </style>
    </head>

    <body id="home" class="scrollspy">

    <?php $about = "Profil Perusahaan";
          $maps = "Peta Perkebunan";
    ?>

      <!-- Navbar -->

          <div class="navbar-fixed">
            <nav class="teal darken-2">
              <div class="container">
              <div class="nav-wrapper">
                <a href="#home" class="brand-logo">WebGIS PT.Inti Kamparindo Sejahtera</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#about"><?= $about; ?></a></li>
                  <li><a href="#maps"><?= $maps; ?></a></li>
                 <!--  <li><a href="#contact">Contact Us</a></li> -->
                </ul>
              </div>
              </div>
            </nav>
          </div>
          <br><br>

          <!-- Sidenav -->
           <ul class="sidenav" id="mobile-nav">
            <li><a href="#about">Home</a></li>
              <li><a href="#about"><?= $about; ?></a></li>
              <li><a href="#maps"><?= $maps; ?></a></li>
              <!-- <li><a href="#contact">Contact Us</a></li> -->
          </ul>

          <!-- Slider -->
           <section id="home" class="about scrollspy">
           <div class="slider">
            <ul class="slides">
              <li>
                <img src="<?=base_url() ?>assets/img/slider/sd1.jpg"> 
                <div class="caption left-align">
                  <h3>Rayon A</h3>
                  <h5 class="light grey-text text-lighten-3">PT.Inti Kamparindo Sejahtera</h5>
                </div>
              </li>
               <li>
                <img src="<?=base_url() ?>assets/img/slider/sd2.jpg"> 
                <div class="caption right-align">
                  <h3>Rayon B</h3>
                  <h5 class="light grey-text text-lighten-3">PT.Inti Kamparindo Sejahtera</h5>
                </div>
              </li>
               <li>
                <img src="<?=base_url() ?>assets/img/slider/sd3.jpg"> 
                <div class="caption center-align">
                  <h3>Rayon C</h3>
                  <h5 class="light grey-text text-lighten-3">PT.Inti Kamparindo Sejahtera</h5>
                </div>
              </li>
            </ul>
          </div>
        </section>

    <!-- About US -->
    <section id="about" class="about scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="center light gray-text text-darken-3"><?= $about; ?></h3>
            <div class="col m6 light">
              <p style="text-align: justify;"><strong>PT. Inti Kamparindo Sejahtera</strong> yang berlokasi di Desa Danau Lancang dan Desa Senama Nenek, Kecamatan Tapung Hulu, Kabupaten Kampar, Provinsi Riau. Total lahan yang dikelola oleh perusahaan ini mencapai 5.791,36 Ha dan produksi sawit sebanyak 123.882 Ton/tahun. Perkebunan ini dibagi menjadi 3 area perkebunan yang disebuat Rayon dan masing-masing Rayon dikepalai satu orang Manajer Rayon.</p>

               <p style="text-align: justify;">Karena wilayah perkebunan yang dibagi-bagi menjadi beberapa rayon dan berbatasan langsung dengan wilayah warga sekitar, tentu setiap karyawan harus tau batas-batas area  yang menjadi rayon bagiannya  ditambah lagi tidak ada penenda khusus yang menampilkan batas-batas kebun dilapangan. Tetapi tidak semua karyawan punya peta perkebunan.</p>
            </div>

            <div class="col m6 light">
              <p style="text-align: justify;">Ada suatu teknologi yang mampu menampilkan peta lokasi pekebunan secara instan dan mudah, salah satunya adalah dengan memanfaatkan peta berbasis Web. Dengan mengimplementasikannya dalam bentuk Web menjadikan peta ini dapat diakses oleh siapa saja, kapan saja dan dimana saja.</p>
            </div>

            <div class="col m6 light">
              <p style="text-align: justify;">Diharapkan dengan adanya peta berbasis Web ini tidak adalagi masalah dimana karyawan lapangan maupun warga sekitar salah dalam menentukan lahan mereka masig-masing, juga untuk para stakeholder perusahaan dengan sistem ini dapat lebih mudah menjelaskan lokasiperkebunan perusahaan.</p>
            </div>


          </div>
        </div>
      
    </section>
    <br><br><br><br><br><br><br><br>

    <!-- Maps -->
     <section id="maps" class="maps grey lighten-3 scrollspy">
          <div class="container">
            <div class="row">
              <h3 class="center light gray-text text-darken-3"><?= $maps; ?></h3>
  
                 <div id="mapid"></div>
            </div>
        </section>


  
      <!-- Contact Us -->

      <section id="contact" class="contact scrollspy">
        <div class="container">
          <h3 class="light grey-text text-darken-3 center">Kontak</h3>
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel teal center white-text">
                <i class="material-icons">email</i>
                <h5>Contact</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor.</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Kantor</h4></li>
                <li class="collection-item">PT.Inti Kamparindo Sejahtera</li>
                <li class="collection-item">Desa Danau Lancang, Tapung Hulu</li>
                <li class="collection-item">Riau, Indonedsia</li>
              </ul>
            </div>

            <div class="col m7 s12">
              <form>
                <div class="card-panel">
                  <h5>Please Fill out this form</h5>
                  <div class="input-field">
                    <input type="text" name="name" id="name" required class="validate">
                    <label for="name">Name</label>
                  </div>
                  <div class="input-field">
                    <input type="email" name="email" id="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field">
                    <input type="text" name="phone" id="phone">
                    <label for="phone">Phone Number</label>
                  </div>
                  <div class="input-field">
                    <textarea name="massage" id="messege" class="materialize-textarea"></textarea>
                    <label for="messege">Messege</label>
                  </div>
                  <button type="submit" class="btn" teal>Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="teal darken-3 white-text center ">
        <p class="flow-text">PT. Inti Kamparindo Sejahtera @Copyright 2019</p>
      </footer>

      

      <!--JavaScript at end of body for optimized loading-->
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

      <script type="text/javascript">
    var map = L.map('mapid').setView([0.7726, 100.8777], 12);
    var base_url = "<?= base_url() ?>";


      L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
          attribution: 'Tiles &copy; Esri'
      }).addTo(map);


      var myFeatureGroup = L.featureGroup(). addTo(map). on("click", groupClick);
      

        function groupClick(event) {
          alert ("Clicked On Marker" + event.layer.id);
        } 

         $.getJSON(base_url +"assets/geojson/iks.geojson", function(data){
          geoLayer = L.geoJson(data, {
              style: function(feature) {

            var kategori = feature.properties.kategori;
            if(kategori==1) { //rayon a
               return {
                           fillOpacity: 0.1 ,
                           weight: 1,
                           opacity: 1,
                           color: "#c21000"
                      };
            }
            else if(kategori==2) { //rayon b
               return {
                           fillOpacity: 0.1 ,
                           weight: 1,
                           opacity: 1,
                           color: "#008cff"
                      };
            }
            else if(kategori==3) { //rayon c
               return {
                           fillOpacity: 0.1 ,
                           weight: 1,
                           opacity: 1,
                           color: "#0a8006"
                      };
                  }
                  else { // iks
                     return {
                           fillOpacity: 0 ,
                           weight: 1,
                           opacity: 1,
                           color: "#ffffff"
                      };
                  }
                
            },


               onEachFeature: function(feature, layer) {
                var kode = feature.properties.kode;

                $.getJSON(base_url +"home/foto/"+kode, function(data){

                  var info_bidang="<h5 style='text-align:center'>INFO BIDANG</h5>";
                    info_bidang+="<a href='<?=base_url()?>home/bidang_detail/"+kode+"'><img src ='<?=base_url() ?>assets/uploads/"+data+"' alt = 'maptime logo gif' height='180px' width='230px' /></a>";
                    info_bidang+="<div style='width:100%; text-align:center; margin-top:10px;'><a href='<?=base_url() ?>home/bidang_detail/"+kode+"'>DETAIL</a></div>";
            
                  layer.bindPopup(info_bidang, {
                    maxWidth : 230,
                    closeButton : true,
                    offset : L.point(0, -20)
                  });

                  layer.on('click', function() {
                    layer.openPopup();
                  });
                 });

                
               }
          }).addTo(map);
        });
      
      </script>
    </body>
  </html>