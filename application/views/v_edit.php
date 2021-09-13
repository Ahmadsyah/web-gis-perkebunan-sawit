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
     
    </head>
   
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
<div class="container">
    <?php foreach ($detail as $d ) { ?>
      <h3 class="center">Update <?= $d->bidang_nama  ?> </h3>
     <?php } ?>
 <div class="row">
    <form class="col s12"  method="post" action="<?=base_url().'admin/update'; ?>">
      <?php foreach ($detail as $d ) { ?>

      </div>
      <input  name="kode"  id="bidang_kode" type="hidden" class="validate" value="<?= $d->bidang_kode ?>">
       <div class="row">
         <div class="input-field col s6">
          <input  name="bidang_kode"  id="bidang_kode" type="text" class="validate" value="<?= $d->bidang_kode ?>">
         <label >Kode Kebun</label>
        </div>
        <div class="input-field col s6">
          <input  name="bidang_nama"  id="bidang_nama" type="text" class="validate" value="<?= $d->bidang_nama ?>">
         <label >Nama Kebun</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  name="bidang_lokasi"  id="bidang_lokasi" type="text" class="validate" value="<?= $d->bidang_lokasi ?>">
         <label >Lokasi</label>
        </div>
      </div>
        <div class="row">
         <div class="input-field col s6">
          <input  name="bidang_lat"  id="bidang_lat" type="text" class="validate" value="<?= $d->bidang_lat ?>">
         <label>Latitude</label>
        </div>
        <div class="input-field col s6">
          <input  name="bidang_long"  id="bidang_long" type="text" class="validate" value="<?= $d->bidang_long ?>">
         <label >Longitude</label>
        </div>
      </div>
        <div class="row">
         <div class="input-field col s6">
          <input  name="luas_area"  id="luas_area" type="text" class="validate" value="<?= $d->luas_area ?>">
         <label >Luas Area</label>
        </div>
        <div class="input-field col s6">
          <input  name="luas_tanam"  id="luas_tanam" type="text" class="validate" value="<?= $d->luas_tanam ?>">
         <label >Luas Tanaman </label>
        </div>
      </div>
      <div class="row">
       <div class="input-field col s6">
          <input  name="produksi"  id="produksi" type="text" class="validate" value="<?= $d->produksi ?>">
         <label >Produksi</label>
        </div>
      </div>
      <?php } ?>
     
      <button class="btn waves-effect waves-light  teal darken-3" type="submit" >Update
        <i class="material-icons right">update</i>
      </button>
    </form>
  </div>
</div>
<br><br>
 <!-- Footer -->
      <footer class="teal darken-3 white-text center ">
        <p class="flow-text">Nainggolan Corp .Copyright 2018</p>
      </footer>

      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?=base_url() ?>assets/js/materialize.min.js"></script>
  </body>
  </html>