<ul class="breadcrumb">
	<li><a href="<?php echo base_url() ; ?>index.php">SI-DANG</a></li>
	<li class="active">Data Laporan Gudang</li>
</ul>

<div class="col-md-12">
     <center><h2>Menu Data Laporan Gudang</h2>   
        <h5>Pilih data laporan gudang yang ingin dicetak</h5>
    </center><br><br>
        <h3><center>Silahkan Pilih Data</center></h3>      
            <br><br>
            <div class="row">
               	<center>
                
                <div class="col-md-3 col-sm-6 col-xs-6">
                <a href="<?php echo base_url(); ?>index.php/laporan/formcetakbarang/">           
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-bar-chart-o"></i>
                        </span>
                        <div class="text-box">
                            <p class="text-muted">Data Barang</p>
                        </div>
                     </div>
                </div> 
                <div class="col-md-3 col-sm-6 col-xs-6">
                <a href="<?php echo base_url(); ?>index.php/laporan/formcetakbarangkeluar/">           
					<div class="panel panel-back noti-box">
                		<span class="icon-box bg-color-blue set-icon">
                    		<i class="fa fa-sign-out"></i>
                		</span>
		                <div class="text-box">
		                    <p class="text-muted">Data Barang Keluar</p>
		                </div>
                     </div>
                </div>
                
                </center>
            </div>
</div>
