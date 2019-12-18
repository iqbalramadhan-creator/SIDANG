<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/kendaraan/">Data Inventaris Peralatan dan Mesin</a></li>
    <li class="active">Tambah Data Peralatan dan Mesin</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Peralatan dan Mesin</h2>   
        <h5>Pengelolaan data inventaris berupa peralatan dan mesin di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Tambah Inventaris Kendaraan
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/kendaraan/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM TAMBAH DATA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/kendaraan/tambah_kendaraan" method="post" name="datakendaraan">

						<!-- <div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode ID Peralatan</label>
								    <input class="form-control" type="text" name="kode_kendaraan" required="required"> 
								    <font color="red"><?php 
									//echo $this->session->flashdata('gagal'); ?></font>
								</div>
							</div>
						</div> -->

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode Kendaraan</label>
								    <input class="form-control" type="text" name="kodekendaraan" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Jenis / Nama Barang</label>
								    <input class="form-control" type="text" name="jeniskendaraan" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Merk</label>
								    <input class="form-control" type="text" name="merk" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tipe</label>
								    <input class="form-control" type="text" name="type" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>CC</label>
								    <input class="form-control" type="text" name="cc" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Warna</label>
								    <input class="form-control" type="text" name="warna" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor Rangka</label>
								    <input class="form-control" type="text" name="nomorrangka" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor Mesin</label>
								     <input class="form-control" type="text" name="nomormesin" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tahun Pembuatan</label>
								     <input class="form-control" type="year" name="tahunbuat" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tahun Pembelian</label>
								     <input class="form-control" type="year" name="tahunbeli" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor Polisi</label>
								     <input class="form-control" type="text" name="nomorpolisi" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tanggal BPKB</label>
								     <input class="form-control" type="date" name="tanggalbpkb" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor BPKB</label>
								     <input class="form-control" type="text" name="nomorbpkb" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Asal-usul</label>
									<input class="form-control" type="text" name="asalusul" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
									<label>Harga Rp</label>
								    <input class="form-control" type="text" name="harga" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Keterangan</label>
								    <input class="form-control" type="text" name="keterangan" required="required">
								</div>
							</div>
						</div>
						    
						<a href="<?php echo base_url() ; ?>index.php/kendaraan/tambah_kendaraan/"
						onclick="return confirm('Apakah Anda yakin untuk menyimpan data?');">
						<button type="submit" class="btn btn-info" name="tambah">Simpan</button>


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
