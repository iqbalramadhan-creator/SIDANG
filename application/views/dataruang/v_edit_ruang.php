<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/dataruang/">Data Ruangan</a></li>
    <li class="active">Edit Data Ruangan</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Ruangan</h2>   
        <h5>Pengelolaan data ruangan atau kantor di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Edit Data Ruang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/dataruang/">&larr; Kembali</a></li>
						</ul>

						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM EDIT DATA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/dataruang/editruang" method="post">
						<?php foreach($dataruang as $d){ ?>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nama Kantor/Ruangan</label>
								    <input class="form-control" type="text" name="nama_ruangan" value="<?=$d->nama; ?>">
								    <input class="form-control" type="hidden" name="id_ruangan" value="<?=$d->id_ruangan; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nama Gedung</label>
								    <select class="form-control select2"  name="kode_gedung">
                                            <?php 
                                            foreach ($gedung as $g) { ?>
                                            
                                            <option value="<?php echo $g->kode_gedung ?>" 
                                            <?php 
                                            if ($g->kode_gedung==$d->kode_gedung) {
                                            	echo "selected";
                                            }
                                            ?>

                                            ><?php echo $g->jenis_barang ?> </option> 
                                            
                                            <?php  }?>
                                        </select>
								</div>
							</div>
						</div>
						    
						<a href="<?php echo base_url() ; ?>index.php/dataruang/editruang/<?php echo $d->id_ruangan ;?>"   
						onclick="return confirm('Apakah Anda yakin untuk mengubah data?');">
						<button type="submit" class="btn btn-info" name="edit">Simpan</button>

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
