<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/dataruang/">Data Ruangan</a></li>
    <li class="active">Tambah Data Ruangan</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Ruangan</h2>   
        <h5>Pengelolaan data ruangan atau kantor di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Tambah Data Ruang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/dataruang/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM TAMBAH DATA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/dataruang/tambah_ruang" method="post" name="dataruang">

						<!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode ID Ruangan</label>
                                    <input class="form-control" type="text" name="id_ruangan" required="required"> 
                                    <font color="red"><?php 
                                    //echo $this->session->flashdata('gagal'); ?></font>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nama Kantor/Ruangan</label>
								    <input class="form-control" type="text" name="nama_ruangan" required="required">
								</div>
							</div>
                        </div>

                        <div class="row">
						<div class="col-md-6">
    						<div class="form-group">
                                <label>Nama Gedung</label>
                                    <select name="jenis_barang" class="form-control select2" required="required"> 
                                        <datalist id="jenis_barang">
                                            <?php 
                                            foreach ($gedung as $g) {
                                            ?>
                                            <option value="<?php echo $g->kode_gedung; ?>"><?php echo $g->jenis_barang ?></option> 
                                            <?php } ?>
                                        </datalist>
                                    </select>
                            </div>
                        </div>
                        </div>

						<a href="<?php echo base_url() ; ?>index.php/dataruang/tambah_ruang/"
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
