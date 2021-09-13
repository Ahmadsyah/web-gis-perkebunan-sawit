<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <!DOCTYPE html>
  <html>
    <head>
      <title>Web ku</title>
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

      <!-- Navbar -->

          <div class="navbar-fixed">
            <nav class="teal darken-2">
              <div class="container">
              <div class="nav-wrapper">
                <a href="#home" class="brand-logo">Nainggolan Corp</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#maps">Maps</a></li>
                  <li><a href="#clients">Clients</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
              </div>
            </nav>
          </div>

          <!-- Sidenav -->
          <ul class="sidenav" id="mobile-nav">
              <li><a href="#about">About Us</a></li>
              <li><a href="#maps">Maps</a></li>
              <li><a href="#clients">Client</a></li>
              <li><a href="#services">Service</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact Us</a></li>
          </ul>

          <!-- Slider -->
           <div class="slider">
            <ul class="slides">
              <li>
                <img src="<?=base_url() ?>assets/img/slider/1.png"> 
                <div class="caption left-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
               <li>
                <img src="<?=base_url() ?>assets/img/slider/2.png"> 
                <div class="caption right-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
               <li>
                <img src="<?=base_url() ?>assets/img/slider/3.png"> 
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
          </div>

    <!-- About US -->
    <section id="about" class="about scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="center light gray-text text-darken-3">About Us</h3>
            <div class="col m6 light">
              <h5>We Are Profesional</h5>
              <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
             <div class="col m6">
              <p>WEB DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate teal" style="width: 90%"></div>
            </div>
              <p>MOBILE APP DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate teal" style="width: 80%"></div>
            </div>
              <p>GAME DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate teal" style="width: 70%"></div>
            </div>
          </div>
        </div>
      
    </section>

    <!-- Maps -->
     <section id="maps" class="about grey lighten-3 scrollspy">
          <div class="container">
            <div class="row">
              <h3 class="center light gray-text text-darken-3">Maps</h3>
  
                 <div id="mapid"></div>
            </div>
        </section>

    <!-- Clients -->

    <div id="clients" class="parallax-container scrollspy">
      <div class="parallax"><img src="<?=base_url() ?>assets/img/slider/4.png"></div>

      <div class="container clients">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="<?=base_url() ?>assets/img/clients/tokopedia.png">
          </div>
           <div class="col m4 s12 center">
            <img src="<?=base_url() ?>assets/img/clients/gojek.png">
          </div>
           <div class="col m4 s12 center">
            <img src="<?=base_url() ?>assets/img/clients/traveloka.png">
          </div>
        </div>
      </div>
    </div>


    <!-- Services -->

    <section id="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text-darken-3">Our Services</h3>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">web</i>
              <h5>Web Development</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">developer_mode</i>
              <h5>Mobile App</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">games</i>
              <h5>Game Development</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->

      <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">Portfolio</h3>
            <div class="row">
              <div class="col m3 s12">
                <img src="<?=base_url() ?>assets/img/portfolio/1.png" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="<?=base_url() ?>assets/img/portfolio/2.png" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="<?=base_url() ?>assets/img/portfolio/3.png" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="<?=base_url() ?>assets/img/portfolio/4.png" class="responsive-img materialboxed">
              </div>
              </div>
               <div class="row">
                <div class="col m3 s12">
                  <img src="<?=base_url() ?>assets/img/portfolio/5.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="<?=base_url() ?>assets/img/portfolio/6.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="<?=base_url() ?>assets/img/portfolio/1.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="<?=base_url() ?>assets/img/portfolio/2.png" class="responsive-img materialboxed">
                </div>
              </div>
        </div>
      </section>

      <!-- Contact Us -->

      <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel teal center white-text">
                <i class="material-icons">email</i>
                <h5>Contact</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor.</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Our Office</h4></li>
                <li class="collection-item">Nainggolans Corp</li>
                <li class="collection-item">JL. HR.Soebrantas Mo. 17, Pekanbaru</li>
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
        <p class="flow-text">Nainggolan Corp @Copyright 2018</p>
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
      var map = L.map('mapid').setView([0.7726, 100.8777], 11);
      var base_url = "<?= base_url() ?>";


      L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
          attribution: 'Tiles &copy; Esri'
      }).addTo(map);


      var myFeatureGroup = L.featureGroup(). addTo(map). on("click", groupClick);
      var bangunanMarker;

       $.getJSON(base_url +"admin/bangunan_json", function(data){
          $.each(data, function(i, field){
            
            var v_lat = parseFloat(data[i].bangunan_lat);
            var v_long = parseFloat(data[i].bangunan_long);
            var icon_bangunan = L.icon({
                     iconUrl: base_url+'assets/images/home.png',
                     iconSize: [30, 30]
               });

          bangunanMarker = L.marker([v_long, v_lat], {icon:icon_bangunan})
                   .addTo(myFeatureGroup)
                   .bindPopup(data[i].bangunan_nama)

        bangunanMarker.id = data[i].bangunan_id;
                    
        });    
        });

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
            }else if(kategori==2) { //rayon b
               return {
                           fillOpacity: 0.1 ,
                           weight: 1,
                           opacity: 1,
                           color: "#008cff"
                      };
                  }else { //rayon c
                     return {
                           fillOpacity: 0.1  ,
                           weight: 1,
                           opacity: 1,
                           color: "#0a8006"
                      };
                  }
                
            },


               onEachFeature: function(feature, layer) {
                var kode = feature.properties.kode;

                $.getJSON(base_url +"admin/foto/"+kode, function(data){

                  var info_bidang="<h5 style='text-align:center'>INFO BIDANG</h5>";
                    info_bidang+="<a href='<?=base_url()?>admin/bidang_detail/"+kode+"'><img src ='<?=base_url() ?>assets/uploads/"+data+"' alt = 'maptime logo gif' height='180px' width='230px' /></a>";
                    info_bidang+="<div style='width:100%; text-align:center; margin-top:10px;'><a href='<?=base_url() ?>admin/bidang_detail/"+kode+"'>DETAIL</a></div>";
            
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