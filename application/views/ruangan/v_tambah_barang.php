<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/ruangan/">Data Inventaris Furniture/ATK</a></li>
    <li class="active">Tambah Data Inventaris Furniture/ATK</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Furniture/ATK</h2>   
        <h5>Pengelolaan data inventaris berupa furniture/ATK di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Tambah Inventaris Barang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/ruangan/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM TAMBAH DATA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/ruangan/tambah_barang" method="post" name="databarang" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
        						<div class="form-group">
                                    <label>Nama Ruangan</label>
                                        <select name="id_ruangan" class="form-control select2" required="required"> 
                                            <datalist id="nama">
                                                <?php 
                                                foreach ($ruangan as $g) {
                                                ?>
                                                <option value="<?php echo $g->id_ruangan; ?>"><?php echo $g->nama ?></option> 
                                                <?php } ?>
                                            </datalist>
                                        </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis / Nama Barang</label>
                                        <select name="jenis_barang[]" class="form-control select2" required="required"> 
                                            <datalist id="jenis_barang">
                                                <?php 
                                                foreach ($jenis_barang as $key) {
                                                ?>
                                                <option value="<?php echo $key->kode_barang; ?>"><?php echo $key->jenis_barang ?></option> 
                                                <?php } ?>
                                            </datalist>
                                        </select>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label>Checkboxes</label>
                                <?php //foreach ($jenis_barang as $key) {
                                    ?>
                                    <div  class="checkbox">
                                        <label>
                                            <input name="jenis_barang[]" type="checkbox" value="<?php //echo $key->kode_barang; ?>" /><?php //echo $key->jenis_barang; ?>
                            </label>
                                    </div>

                        </div> -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input class="form-control" type="text" name="jumlah" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Keadaan Barang</label>
                                <div class="radio" required>
                                    <label>
                                        <input type="radio" name="keadaan" id="keadaan1" value="Baik" checked /> Baik
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="keadaan" id="keadaan1" value="Kurang Baik" checked /> Kurang Baik
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="keadaan" id="keadaan1" value="Rusak Berat" checked /> Rusak Berat
                                    </label>
                                </div>
                        </div>

						<a href="<?php echo base_url() ; ?>index.php/barang/tambah_barang/"
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
