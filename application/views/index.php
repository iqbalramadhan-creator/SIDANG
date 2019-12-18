<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV. Deschino Sport</title>
    <link rel="shortcut icon" href="<?php echo base_url() ; ?>7.png" />
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url() ; ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url() ; ?>assets/css/font-awesome.css" rel="stylesheet" />   
    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url() ; ?>assets/css/custom.css" rel="stylesheet" />

    <link href="<?php echo base_url() ; ?>assets/css/select2.min.css" rel="stylesheet" />

    <link href="<?php echo base_url() ; ?>assets/css/animate.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url() ; ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <script src="<?php echo base_url() ; ?>assets/js/jquery-1.10.2.js"></script>
</head>
<body>
<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/admin/">SI-DANG</a> 
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;">  <!-- 
                <font size="5"> SinTaris || Sistem Informasi Inventaris &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
                </font>  -->
                <a href="<?php echo base_url('index.php/auth/logout') ;?>"onclick="return confirm('Apakah Anda yakin ingin keluar dari SI-DANG?');" 
                <button class="btn btn-danger square-btn-adjust"><i class="fa fa-power-off "></i> Keluar</button></a> 
            </div>
        </nav> 
<!--header end-->

<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="<?php echo base_url();?>assets/img/11.png" class="user-image img-responsive"/>
             <div style="color: white;
                font-size: 16px;"> Selamat Datang, <?php echo $this->session->username;?> sebagai <?php echo $this->session->posisi;?>
            </div>      
                </li>
                    
                    <li>
                <?php $menu = $this->uri->segment(1); ?>
                        <a <?php if ($menu == 'admin') { echo 'class="active-menu"'; } ?>  href="<?php echo base_url(); ?>index.php/admin/"><i class="fa fa-desktop fa-2x"></i> Beranda</a>
                    </li>

                    <li>
                        <a <?php if (
                                    $menu == 'barangkeluar'or 
                                    $menu == 'barang' or
                                    $menu == 'listbarang'
                                    ) 
                        { echo 'class="active-menu"'; } ?>  
                        a href="#"><i class="fa fa-briefcase fa-2x"></i> Gudang
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                    </li>   
                            <li>
                            <a href="<?php echo base_url(); ?>index.php/barang/">Data Barang Masuk</a>     
                            </li>
                            
                            <li>
                            <a href="<?php echo base_url(); ?>index.php/barangkeluar/">Data Barang Keluar</a>
                            </li>

                            <li>
                            <a href="<?php echo base_url(); ?>index.php/listbarang/">List Barang</a> 
                            </li>
                        </ul>
        <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                    <li>
                        <a <?php if ($menu == 'laporan') { echo 'class="active-menu"'; } ?>  href="<?php echo base_url(); ?>index.php/laporan/"><i class="fa fa-file-text fa-2x"></i> Laporan</a>
                    </li>
        <?php } ?>
        <?php if ($this->session->userdata('posisi')=="Administrator") {
                        ?>
                    <li>
                        <a <?php if ($menu == 'user') { echo 'class="active-menu"'; } ?>  href="<?php echo base_url(); ?>index.php/user/"><i class="fa fa-cogs fa-2x"></i> Kelola Pengguna</a>
                    </li> 
        <?php } ?>   
                </ul>
            </div>
        </nav> 
<!--sidebar end-->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                   
    <?php echo $contents ?>
               
            </div>
            </div>
            </div>

        <!-- /. WRAPPER  -->
    <footer class="Footer bg-light"> 
    <div style="color: white; font-size: 16px;">
        <center><p>Copyright &copy; <i style="color:#0c74dd">SI-DANG</i> <b> CV. DESCHINO SPORT YOGYAKARTA </b></p></center>
    </div>
    </footer>
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="<?php echo base_url() ; ?>assets/js/jquery.PrintArea.js"></script>
        <script src="<?php echo base_url() ; ?>assets/js/select2.full.min.js"></script>
        <script src="<?php echo base_url() ; ?>assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="<?php echo base_url() ; ?>assets/js/jquery.metisMenu.js"></script>
        <!-- DATA TABLE SCRIPTS -->

        <script src="<?php echo base_url() ; ?>assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() ; ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url() ; ?>assets/js/custom.js"></script>
    
   <script>
    //Initialize Select2 Elements
    $(".select2").select2();
   </script>
</body>
</html>
