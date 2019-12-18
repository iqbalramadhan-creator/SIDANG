<ul class="breadcrumb">
	<li><a href="#">SI-DANG</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/barang/">Data Barang</a></li>
    <li class="active">Tambah Data Barang</li>
</ul>

<div class="col-md-12">
     <center><h2>Pakai Barang</h2>   
        <h5>Pengelolaan data gudang berupa barang di CV. Deschino Sport</h5>             
	</center>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Pakai Barang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/barang/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM PAKAI BARANG</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url()."index.php/barangkeluar/kirim/";?>" method="post" name="databarang">

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode Barang</label>
								 	<?php foreach($tambahbarang as $barang) { ?>
								 	<!--<input class="form-control" type="text" name="kode_barang" value="<?php echo $barang->kode_barang; ?>"> -->
								    <input class="form-control" type="text" name="kodebarang" required="required" value="<?php echo $barang->kodebarang; ?>" readonly>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tanggal Input Barang</label>
								    <input class="form-control" type="date" name="tgl_input" required oninvalid="this.setCustomValidity('Harus Diisi, Tidak Boleh Kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nama Barang</label>
								    <input class="form-control" type="text" name="jenis_barang" required="required" value="<?php echo $barang->jenis_barang; ?>" readonly>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Qty Awal</label>
								    <input class="form-control" type="text" name="qty" required="required" value="<?php echo $barang->qty; ?>" readonly>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Qty Sisa</label>
								    <input class="form-control" type="text" name="qty_akhir" required="required" value="<?php echo $barang->qty_akhir; ?>" readonly>
								</div>
							</div>
						</div>


						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Qty Pemakaian</label>
								    <input class="form-control" type="text" name="qty" required oninvalid="this.setCustomValidity('Harus Diisi, Tidak Boleh Kosong')" oninput="setCustomValidity('')" >
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Satuan</label>
								    <input class="form-control" type="text" name="satuan" required="required" value="<?php echo $barang->satuan; } ?>" readonly>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Keterangan </label>
								    <input class="form-control" type="text" name="keterangan" required oninvalid="this.setCustomValidity('Harus Diisi, Tidak Boleh Kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>
								<!--<input type="submit" name="" class="btn" value="Tambah">-->
								
							<button type="submit" class="btn btn-warning" name="" value="Tambah"><i class="fa fa-sign-out"></i> Pakai Barang</button>
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