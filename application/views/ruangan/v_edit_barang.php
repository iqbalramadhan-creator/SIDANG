<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/ruangan/">Data Inventaris Furniture/ATK</a></li>
    <li class="active">Edit Data Furniture/ATK</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Furniture/ATK</h2>   
        <h5>Pengelolaan data inventaris berupa furniture/ATK di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Edit Data Barang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/ruangan/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM EDIT DATA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/ruangan/updatebarang" method="post" name="databarang" enctype="multipart/form-data">

                        <?php foreach($barangruang as $d){
                         ?>
                        <input type="hidden" name="id_barangruang" class="form-control" value="<?php echo $d->id_barangruang;?>">

                        <div class="row">
                            <div class="col-md-6">
        						<div class="form-group">
                                    <label>Nama Ruangan</label>
                                        <select class="form-control select2" type="text" name="id_ruangan" value="<?=$g->nama; ?>"">
                                            <?php 
                                            foreach ($ruangan as $g) {
                                         
                                            ?>

                                            <option value="<?php echo $g->id_ruangan ?>" <?php if ($d->id_ruangan == $g->id_ruangan) { echo "selected"; } ?>><?php echo $g->nama ?> </option> 
                                            <?php } ?>
                                        </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis / Nama Barang</label>
                                        <select class="form-control select2" type="text" name="jenis_barang[]" value="<?=$key->jenis_barang; ?>"">
                                            <?php 
                                            foreach ($jenis_barang as $key) {
                                            if ($d->kode_barang == $key->kode_barang) {
                                            ?>

                                            <option value="<?php echo $key->kode_barang ?>" selected><?php echo $key->jenis_barang ?> </option> <?php } else { ?>
                                            <option value="<?php echo $key->kode_barang ?>"><?php echo $key->jenis_barang ?> </option>
                                            <?php } } ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label>Checkboxes</label>
                                <?php //foreach ($jenis_barang as $key) { ?>
                                    <div  class="checkbox">
                                    <?php //if ($d->kode_barang == $key->kode_barang) { ?>
                                        <label>
                                            <input name="jenis_barang[]" type="checkbox" value="<?php //echo $key->kode_barang; ?>" checked><?php //echo $key->jenis_barang; ?>
                                            </label>
                                    <?php } //else { ?>
                                    <label>
                                         <input name="jenis_barang[]" type="checkbox" value="<?php //echo $key->kode_barang; ?>"><?php //echo $key->jenis_barang; ?>
                            </label>
                                    </div>
                        </div> -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input class="form-control" type="text" name="jumlah" value="<?=$d->jumlah; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Keadaan Barang</label>
                                <div class="radio">
                                    <label>
                                        <input <?php if($d->keadaan == 'Baik') { echo "checked"; } ?> type="radio" name="keadaan" id="keadaan1" value="Baik"/> Baik
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input <?php if($d->keadaan == 'Kurang Baik') { echo "checked"; } ?> type="radio" name="keadaan" id="keadaan1" value="Kurang Baik"/> Kurang Baik
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input <?php if($d->keadaan == 'Rusak Berat') { echo "checked"; } ?> type="radio" name="keadaan" id="keadaan1" value="Rusak Berat"/> Rusak Berat
                                    </label>
                                </div>
                        </div>

                        <a onclick="return confirm('Apakah Anda yakin untuk mengubah data?');">
						<button type="submit" class="btn btn-info" name="edit">Simpan</button>
                        </a>
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
