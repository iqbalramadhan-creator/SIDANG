<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CV. Deschino Sport</title>
  <link rel="shortcut icon" href="<?php echo base_url() ; ?>7.png" />
<!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body background="<?php echo base_url();?>assets/img/1.jpg">
    <div class="container">
    <div class="row text-center">
    <div class="col-md-12">
<br><br>
          <center>
            <img src="<?php echo base_url();?>assets/img/Deschino Sport.png" class="user-image img-responsive"/>
           </center> &nbsp; &nbsp;  
        <!--<font color="red">
                <h4> LOGIN KE SISTEM INFORMASI GUDANG (SI-DANG) </h4> 
        </font>--> 
        
      <br/>
    </div>
    </div>
        <div class="row ">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">
                <strong><center>  Masuk ke Sistem Informasi Gudang </center>
                
               </strong>  
                </div>
                <div class="panel-body">
                  <form method="post" action="<?php echo base_url();?>index.php/auth/login" ><br/>
                
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Nama Pengguna " / required oninvalid="this.setCustomValidity('Mohon maaf, Nama Pengguna harus diisi')" oninput="setCustomValidity('')">
                </div>
                
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                  <input type="password" name="password" id="password" class="form-control"  placeholder="Password" / required oninvalid="this.setCustomValidity('Mohon maaf, Password harus diisi')" oninput="setCustomValidity('')">
                </div>

                <center><button class="btn btn-success btn-md" type="submit">Masuk</button>
                <button class="btn btn-danger btn-md" type="reset">Cancel</center></button>
                </div>
              </div>
            </div>
          </div>
        </div><br><br><br><br>
          <center><p style="font-size:16px; color:white"> Copyright &copy; <i style="color:#0c74dd">SI-DANG</i></p></center>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
   
</body>
</html>
