<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url() ; ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url() ; ?>assets/css/font-awesome.css" rel="stylesheet" />   
    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url() ; ?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url() ; ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="index.html">SinTaris</a> 
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"> Last access : 30 May 2014 &nbsp; 
                <a href="<?php echo base_url('index.php/auth/logout') ;?>"" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                        <img src="<?php echo base_url();?>assets/img/find_user.png" class="user-image img-responsive"/>
                        <!-- Selamat Datang, <?php echo $this->session->posisi;?> -->
					</li>
					
                    <li>
                        <a href="index.html"><i class="fa fa-home fa-2x"></i> Beranda</a>
                    </li>

                    <li>
                        <a  href="#"><i class="fa fa-edit fa-2x"></i> Inventaris<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level"></li>

                            <li>
                            <a href="<?php echo base_url(); ?>index.php/tanah/">Data Inventaris Tanah</a>
                            </li>
                            
                            <li>
                            <a href="<?php echo base_url(); ?>index.php/gedung/">Data Inventaris Gedung</a>
                            </li>
                            
                            <li>
                            <a href="<?php echo base_url(); ?>index.php/kendaraan/">Data Inventaris Kendaraan</a>                              
                            </li>
                        </ul>
            
                    <li>
                        <a  href="<?php echo base_url(); ?>index.php/laporan/"><i class="fa fa-book fa-2x"></i> Laporan</a>
                    </li>
                    
                    <li>
                        <a  href="<?php echo base_url(); ?>index.php/user/"><i class="fa fa-share fa-2x"></i> Kelola Pengguna</a>
                    </li>	 
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
    <?php echo $contents ?>

            </div>
		    </div>
			</div>
                 
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
        <!-- MORRIS CHART SCRIPTS -->
        <script src="<?php echo base_url();?>assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/morris/morris.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>

        <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
       <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    </body>
</html>
