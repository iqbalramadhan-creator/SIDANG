<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CV. Deschino Sport</title>
<!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
    <div class="row text-center">
    <div class="col-md-12">

      <!--<ul class="breadcrumb">
        <li><h3 style="color: "><b>CETAK LAPORAN BARANG GUDANG</li></h3><BR>
        <li><h4 style="color: #ff0000"><b>CV. DESCHINO SPORT</li></h4></b>
      </ul>-->
      <br/><br/> 
        <p style="font-size:28px; color:black; font-family:algerian">CETAK LAPORAN BARANG GUDANG <br><BR>CV. DESCHINO SPORT</p>
      <hr>
    </div>
    </div>
    <br><br><br><br>
        <div class="row ">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">
                <center><strong> Silahkan Pilih Bulan & Tahun Untuk Mencetak Data </strong> </center> 
              </div>
              
                <div class="panel-body">
                  <form method="post" action="<?php echo base_url();?>index.php/laporan/cetak_barang" ><br/>

                        <div class="row">
                            <div class="col-md-10">
                              <div class="form-group">
                                  <table width="118%" >
                                    <tr>
                                      <td width="93%">
                                      <select name="tahun" class="form-control select2" required="required"> 
                                        <datalist id="tahun">
                                          <option value="">Pilih Bulan & Tahun</option>
                                              <?php 
                                              foreach ($tahun as $t) {
                                              ?>
                                          <option value="<?php echo $t->bulan.'-'.$t->tahun; ?>"><?php echo $t->bulan.' '.$t->tahun ?></option>
                                              <?php } ?>
                                        </datalist>
                                      </select>
                                      </td>

                                      <td width="2%"> &nbsp; </td>

                                      <td width="23%">
                                      <button class="btn btn-primary btn-small" type="submit">Lihat Laporan</button>
                                      </td>
                                    </tr>
                                  </table>
                              </div>
                            </div>
                        </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


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
