<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Webgis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons CSS -->
    <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>


<body>

<div id="page-wrapper">

    <!-- Top Bar Start -->
    <div class="topbar" id="topnav">

        <!-- Top navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">

                    <!-- LOGO -->


                    <div class="navbar-custom navbar-left">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
                                <li>
                                    <a href="<?php echo site_url('Home/index')?>">
                                        <span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                                </li>


                                <li>
                                    <a href="<?php echo site_url('maps/index');?>">
                                        <span><i class="ti-map"></i></span><span> Peta </span> </a>
                                </li>



                            </ul>
                            <!-- End navigation menu  -->
                        </div>
                    </div>

                    <!-- Top nav Right menu -->

                </div>
            </div> <!-- end container -->
        </div> <!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- Page content start -->
    <div class="page-contentbar">

        <!-- START PAGE CONTENT -->
        <div id="page-right-content">

            <div class="container">
                <div class="row">

                    <div class="col-lg-3">



                        <div class="card-box">

                            <h4 class="header-title m-t-0">Jenis Lapangan</h4>

                            <?php foreach ($jenis_lap as $jenis) { ?>
                                <tr>

                                    <td><br><?php echo anchor('Maps/index?q=' . $jenis->jenis_lapangan,$jenis->jenis_lapangan); ?></td>

                                </tr>

                            <?php } ?>
                            <div class="p-10 m-b-10">
                            </div>
                        </div>

                        <div class="card-box">

                            <h4 class="header-title m-t-0">Data lapangan</h4>
                            <?php foreach ($lap_futsal as $u){ ?>

                                <tr>
                                    <td><br><?php echo anchor('Maps/detail_lap/'.$u->id_lap,$u->nama_lap); ?></td>

                                </tr>
                            <?php } ?>
                            <div class="p-10 m-b-10">
                            </div>
                        </div>

                        <div class="card-box">

                            <h4 class="header-title m-t-0">Data Toko Sport</h4>
                                <?php foreach ($toko_sport as $toko) { ?>
                                    <tr>
                                        <td></br><?php echo anchor('Maps/detail_toko/'.$toko->id_toko,$toko->nama_toko)?></td>

                                    </tr>
                                <?php } ?>

                        </div>



                    </div>

                    


                    <!-----  mengatur peta  ------>
                    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/peta/css/style.css" media="screen" />
                    <script src="<?php echo base_url(); ?>assets/peta/js/jquery.js"></script>

                    <!-----  mengaktifkan Leaflet  ------>
                    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/peta/leaflet/dist/leaflet.css" />
                    <script src="<?php echo base_url(); ?>assets/peta/leaflet/dist/leaflet.js"></script>
                    <link href="<?php echo base_url(); ?>assets/peta/css/bootstrap.css" rel="stylesheet">

                    <!-----  Menampilkan Navigasi panah 4 arah  ------>
                    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pancontrol/L.Control.Pan.css" />
                    <script src="<?php echo base_url(); ?>assets/peta/pancontrol/L.Control.Pan.js" ></script>

                    <!-----  sumber peta : Google Map  ------>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABbmjXN2ETAMBr92588JJqGrdOXhep39Q"></script>
                    <script src="<?php echo base_url(); ?>assets/peta/js/Google.js"></script>

                    <!-----  sumber peta : Bing Maps  ------>
                    <script src="<?php echo base_url(); ?>assets/peta/js/Bing.js"></script>


                    <script src="<?php echo base_url(); ?>assets/peta/js/Marker.Text.js"></script>



                    <div class="col-lg-9">
                        <div class="m-b-20">
                            <h5>Peta</h5>


                            <div id="map"></div>


                            <script type="text/javascript">

                                var bola = L.icon({
                                    iconUrl: '<?php echo base_url(); ?>assets/images/poi/bola.png',
                                    shadowUrl: '',

                                    iconSize:     [20, 20], // size of the icon
                                    shadowSize:   [10, 14], // size of the shadow
                                    iconAnchor:   [22, 64], // point of the icon which will correspond to marker's location
                                    shadowAnchor: [4, 12],  // the same for the shadow
                                    popupAnchor:  [-3, -16] // point from which the popup should open relative to the iconAnchor

                                });


                                var toko = L.icon({
                                    iconUrl: '<?php echo base_url(); ?>assets/images/poi/shop.png',
                                    shadowUrl: '',

                                    iconSize:     [20, 20], // size of the icon
                                    shadowSize:   [10, 14], // size of the shadow
                                    iconAnchor:   [22, 64], // point of the icon which will correspond to marker's location
                                    shadowAnchor: [4, 12],  // the same for the shadow
                                    popupAnchor:  [-3, -16] // point from which the popup should open relative to the iconAnchor

                                });



                                var	googleRoadmap=new L.Google('ROADMAP');
                                var mpn = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                                var	googleSatellite = new L.Google('SATELLITE');
                                var	googleHybrid = new L.Google('HYBRID');
                                var bingMap = new L.BingLayer("Anqm0F_JjIZvT0P3abS6KONpaBaKuTnITRrnYuiJCE0WOhH6ZbE4DzeT6brvKVR5");

                                var baseMaps = {'Mapnik':mpn, 'Google Roadmap':googleRoadmap,
                                    'Google Satellite':googleSatellite, 'Google Hybrid':googleHybrid, 'BING':bingMap};

                                //----menyiapkan Layer lain : contoh 3 layer berbeda ---->>
                                var lapanganLayer = new L.LayerGroup();
                                var tokoLayer = new L.LayerGroup();


                                var poiGroup = {'Lapangan Futsal':lapanganLayer, 'Toko Olahraga':tokoLayer};


                                //--menentukan koordinat, Zoom dan Layer aktif --->>
                                var map = new L.Map('map', {center: new L.LatLng(-7.948991 , 112.616815),
                                    zoom: 14,
                                    layers: [googleRoadmap, lapanganLayer, tokoLayer]});

                                //--Menampilkan panel pilihan peta dasar --->>
                                map.addControl(new L.Control.Scale());
                                map.addControl(new L.Control.Layers(baseMaps, poiGroup));
                                map.on('click', onMapClick);

                                var popup = new L.Popup();

                                function onMapClick(e) {
                                    var latlngStr = '(' + e.latlng.lat + ', ' + e.latlng.lng + ')';

                                    popup.setLatLng(e.latlng);
                                    popup.setContent("Koordinat yang Anda Pilih:<br/>" + latlngStr);

                                    map.openPopup(popup);
                                }



                            </script>

                            <script type="text/javascript">


                                <!--toko-->
                                var tokoMarker = new Array();
                                <?php
                                foreach ($toko_sport as $toko){




                                ?>

                                //   var posLat = '<?php echo $toko->lat ?>';
                                // var posLng = '<?php echo $toko->long ?>';


                                var tokoMarker =  L.marker(new L.LatLng(<?php echo $toko->lat ?>, <?php echo $toko->long ?>),{icon: toko}).bindPopup('<?php echo $toko->nama_toko ?>').addTo(map);

                                tokoLayer.addLayer(tokoMarker);


                                <?php } ?>



                                <!--lapangan-->
                                var lapanganMarker = new Array();
                                <?php
                                foreach ($lap_futsal as $u){




                                ?>

                                //   var posLat = '<?php echo $u->lat ?>';
                               // var posLng = '<?php echo $u->long ?>';


                              var lapanganMarker =  L.marker(new L.LatLng(<?php echo $u->lat ?>, <?php echo $u->long ?>),{icon: bola}).bindPopup('<?php echo $u->nama_lap ?>').addTo(map);

                              lapanganLayer.addLayer(lapanganMarker);


                                   <?php } ?>
                            </script>




                        </div>
                    </div>




                </div> <!-- end row -->









            </div> <!-- end row -->




        </div>
        <!-- end container -->





    </div>
    <!-- End #page-right-content -->

    <div class="clearfix"></div>

</div>
<!-- end .page-contentbar -->
</div>
<!-- End #page-wrapper -->



<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>





<!-- App Js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

</body>
</html>