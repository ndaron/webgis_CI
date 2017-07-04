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

                            <h4 class="header-title m-t-0">Data Lapangan</h4>

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


                            <div class="p-10 m-b-10">
                                <?php foreach ($toko as $toko) { ?>
                                    <tr>
                                        <td></br><?php echo anchor('Maps/detail_toko/'.$toko->id_toko,$toko->nama_toko)?></td>

                                    </tr>
                                <?php } ?>
                            </div>

                        </div>



                    </div>

                    <div class="col-md-6">

                        <div class="card-box">

                            <h4 class="header-title m-t-0">Details Lapangan</h4>
                            <?php foreach ($toko_sport as $det_toko){ ?>

                                <tr>

                                     <img width="250px" src="<?php echo base_url(); ?>assets/images/toko/<?php echo $det_toko->foto; ?>"><br/>

                                    <td>Nama Toko   :<?php echo$det_toko->nama_toko; ?></td></br>
                                    <td>Alamat Toko :<?php echo$det_toko->alamat; ?></td></br>
                                    <td>No Telp.    :<?php echo$det_toko->no_telp; ?></td></br>


                                </tr>

                            <?php } ?>

                            <div class="p-10 m-b-10">


                            </div>

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

<!--Morris Chart-->
<script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="<?php echo base_url(); ?>assets/pages/jquery.dashboard.js"></script>

<!-- App Js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

</body>
</html>