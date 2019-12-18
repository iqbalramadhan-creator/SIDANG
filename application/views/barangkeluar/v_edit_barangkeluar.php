<ul class="breadcrumb">
	<li><a href="#">SI-DANG</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/barangkeluar/">Data Barang Keluar</a></li>
    <li class="active">Edit Data Barang Keluar</li>
</ul>

<div class="col-md-12">
    <center><h2>Edit Data Barang Keluar</h2>   
        <h5>Pengelolaan data barang keluar di gudang CV. Deschino Sport</h5>             
	</center>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Edit Data Barang Keluar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/barangkeluar/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM EDIT DATA BARANG KELUAR</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/barangkeluar/editbarangkeluar" method="post">
						<?php foreach($databarangkeluar as $d){ ?>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode Barang</label>
								    <input class="form-control" type="text" name="kodebarang" value="<?=$d->kodebarang; ?>" readonly>
								    <input class="form-control" type="hidden" name="kode_barang" value="<?=$d->kode_barang; ?>" readonly>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nama Barang</label>
								    <input class="form-control" type="text" name="jenisbarang" value="<?=$d->jenis_barang; ?>" readonly>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tanggal Input Data</label>
								    <input class="form-control" type="date" name="tgl_input" value="<?=$d->tgl_input; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>QTY</label>
								    <input class="form-control" type="text" name="qty" value="<?=$d->qty; ?>">
								</div>
							</div>
						</div>
						
						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Satuan</label>
								    <input class="form-control" type="text" name="satuan" value="<?=$d->qty; ?>" readonly>
								</div>
							</div>
						</div>
				
						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Keterangan </label>
								    <input class="form-control" type="text" name="keterangan" value="<?=$d->keterangan; ?>" readonly>
								</div>
							</div>
						</div>
						    
						<a href="<?php echo base_url() ; ?>index.php/barangkeluar/editbarangkeluar/<?php echo $d->kode_barang ;?>"
						onclick="return confirm('Apakah Anda yakin untuk mengubah data?');">
						<button type="submit" class="btn btn-info" name="edit"><i class="fa fa-save"></i> Edit Barang Keluar</button>

						<?php }?>
						</form>
						</div>
						</div>
						</div> 
						</div>

                        </table>
                    </div>
                </div>
            </div>
</div>
