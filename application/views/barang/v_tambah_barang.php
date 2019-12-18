<ul class="breadcrumb">
	<li><a href="#">SI-DANG</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/barang/">Data Barang</a></li>
    <li class="active">Tambah Data Barang</li>
</ul>

<div class="col-md-12">
     <center><h2>Tambah Data Barang</h2>   
        <h5>Pengelolaan data gudang berupa barang di CV. Deschino Sport</h5>             
	</center>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Tambah Barang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/barang/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM TAMBAH DATA BARANG</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/barang/tambah_barang" method="post" name="databarang">

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode Barang</label>
								    <input class="form-control" type="text" name="kodebarang" required / oninvalid="this.setCustomValidity('Mohon maaf, Kolom Kode Barang Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tanggal Input Barang</label>
								    <input class="form-control" type="date" name="tgl_input" required / oninvalid="this.setCustomValidity('Mohon maaf, Kolom Tanggal Input Barang Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nama Barang</label>
								    <input class="form-control" type="text" name="jenisbarang" required / oninvalid="this.setCustomValidity('Mohon maaf, Kolom Nama Barang Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Qty Awal</label>
								    <input class="form-control" type="text" name="qty" required / oninvalid="this.setCustomValidity('Mohon maaf, Kolom Qty Awal Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Satuan</label>
								    <input class="form-control" type="text" name="satuan" required / oninvalid="this.setCustomValidity('Mohon maaf, Kolom Satuan Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tanggal Pembelian</label>
								    <input class="form-control" type="date" name="tahunbelibarang" required / oninvalid="this.setCustomValidity('Mohon maaf, Kolom Tanggal Pembelian Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>


						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Keterangan </label>
								    <input class="form-control" type="text" name="keterangan" required / oninvalid="this.setCustomValidity('Mohon maaf, Kolom Keterangan Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<!--<a href="<?php echo base_url() ; ?>index.php/barang/tambah_barang/"
						;">-->
						<button type="submit" class="btn btn-info" name="tambah" onclick="return confirm('Apakah Anda yakin untuk menyimpan data?')"><i class="fa fa-save"></i> Tambah Barang</button>


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
