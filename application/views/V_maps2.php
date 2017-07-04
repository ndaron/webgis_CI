<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

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
                                            <a href="index.html">
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




                            </ul>
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

                        </div> <!-- end row -->

                        <div class="row">

                            <div class="col-lg-3">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Data Kecamatan</h4>


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

                                    <h4 class="header-title m-t-0">Jenis Lapangan</h4>

                                        <?php foreach ($jenis_lap as $jenis) { ?>

                                            <tr>

                                                <td><br><?php echo anchor('Maps/index?q=' . $jenis->jenis_lapangan,$jenis->jenis_lapangan); ?></td>

                                            </tr>

                                        <?php } ?>


                                    <div class="p-10 m-b-10">

                                    </div>

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


							<div class="col-lg-9">
								<div class="m-b-20">
									<h5>Peta</h5>


                                    <div id="map"></div>


                                    <script type="text/javascript">
                                        var	googleRoadmap=new L.Google('ROADMAP');
                                        var mpn = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                                        var	googleSatellite = new L.Google('SATELLITE');
                                        var	googleHybrid = new L.Google('HYBRID');
                                        var bingMap = new L.BingLayer("Anqm0F_JjIZvT0P3abS6KONpaBaKuTnITRrnYuiJCE0WOhH6ZbE4DzeT6brvKVR5");

                                        var baseMaps = {'Mapnik':mpn, 'Google Roadmap':googleRoadmap,
                                            'Google Satellite':googleSatellite, 'Google Hybrid':googleHybrid, 'BING':bingMap};

                                        //----menyiapkan Layer lain : contoh 3 layer berbeda ---->>
                                        var kampusLayer = new L.LayerGroup();
                                        var tokoLayer = new L.LayerGroup();


                                        var poiGroup = {'Lapangan':kampusLayer, 'Toko Olahraga':tokoLayer};


                                        //--menentukan koordinat, Zoom dan Layer aktif --->>
                                        var map = new L.Map('map', {center: new L.LatLng(-7.948991 , 112.616815),
                                            zoom: 14,
                                            layers: [googleRoadmap, kampusLayer, tokoLayer]});

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
                                        var kampusMarker = new Array();
                                        <?php
                                            foreach ($lap_futsal as $u){
                                        ?>

                                        //---membuat marker >>>
                                        var posLat = <?php echo $u->lat ?>;
                                        var posLng = <?php echo $u->long ?>;
                                        kampusMarker.push(L.marker([posLat,posLng]).addTo(map));

                                        // var kampusMarker = new L.Marker.Text(new L.LatLng(posLat , posLng));
                                        //echo "var kampusMarker = new L.Marker.Text(new L.LatLng(posLat , posLng), 'STIKI',{icon: kampusico}).bindPopup('<a href=\"content/dtl_kampus.php?dtl_kampus="STIKI"\"target=\"_blank\">"STIKI"<br><center><img width=\"80px;\" src=\"foto/kampus/"stiki.jpg"\"></center>');";
                                        <?php } ?>
                                    </script>

                                    <script type="text/javascript">


                                        kampusLayer.addLayer(kampusMarker);
                                        tokoLayer.addLayer(tokoMarker);



                                    </script>


                                </div>
							</div>




						</div>











                    </div>
                    <!-- end container -->



                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="pull-right hidden-xs">
                                        Project Completed <strong class="text-custom">43%</strong>.
                                    </div>
                                    <div>
                                        <strong>Simple Admin</strong> - Copyright &copy; 2017
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end footer -->

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



        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/gdp-data.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
        <script src="<?php echo base_url(); ?>assets/pages/jquery.jvectormap.init.js"></script>
<?php echo base_url(); ?>
        <!-- App Js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

    </body>
</html>