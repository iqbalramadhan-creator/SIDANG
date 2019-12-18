<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/tanah/">Data Inventaris Tanah</a></li>
    <li class="active">Tambah Data Tanah</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Tanah</h2>   
        <h5>Pengelolaan data inventaris berupa tanah di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Tambah Inventaris Tanah
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/tanah/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM TAMBAH DATA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/tanah/tambah_tanah" method="post" name="datatanah">

						<!-- <div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode ID Tanah</label>
								    <input class="form-control" type="text" name="kode_tanah" required="required"> 
								    <font color="red"><?php 
									//echo $this->session->flashdata('gagal'); ?></font>
								</div>
							</div>
						</div> -->

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode Tanah</label>
								    <input class="form-control" type="text" name="kodetanah" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Jenis / Nama Tanah</label>
								    <input class="form-control" type="text" name="jenistanah" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Luas M2</label>
								    <input class="form-control" type="text" name="luasM2" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Letak / Alamat</label>
								    <textarea class="form-control" rows="3" name="letak" required="required"></textarea>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Hak Status Tanah</label>
								    <input class="form-control" type="text" name="haksertifikattanah" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tanggal Sertifikat Tanah</label>
								    <input class="form-control" type="date" name="tanggalsertifikattanah" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor Sertifikat Tanah</label>
								    <input class="form-control" type="texy" name="nomorsertifikattanah" required="required">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Penggunaan</label>
								     <input class="form-control" type="text" name="penggunaan" required="required">
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
                                    <label>Bagian Kepala Ruangan</label>
                                        <select name="kaur" class="form-control select2" required="required"> 
                                            <option>Lurah Desa</option>
                                            <option>Carik Desa</option>
                                            <option>Ka.Sie Pemerintahan</option>
                                            <option>Ka.Sie Kesejahteraan</option>
                                            <option>Ka.Sie Pelayanan</option>
                                            <option>Ka.Ur Keuangan</option>
                                            <option>Ka.Ur TU & Umum</option>
                                            <option>Ka.Ur Perencanaan</option>
                                            <option>Dukuh Ngajaran</option>
                                            <option>Dukuh Cangkring</option>
                                            <option>Dukuh Sirat</option>
                                            <option>Dukuh Palihan</option>
                                            <option>Dukuh Ngireng Ireng</option>
                                            <option>Dukuh Tempel</option>
                                            <option>Dukuh Prenggan</option>
                                            <option>Dukuh Selo</option>
                                            <option>Dukuh Plemantung</option>
                                            <option>Dukuh Plebengan</option>
                                            <option>Dukuh Ponggok</option>
                                            <option>Dukuh Pinggir</option>
                                            <option>Dukuh Turi</option>
                                            <option>Dukuh Glodogan</option>
                                            <option>Dukuh Kuwon</option>
                                            <option>Staf</option>
                                        </select>
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
						    
						<a href="<?php echo base_url() ; ?>index.php/tanah/tambah_tanah/"
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
