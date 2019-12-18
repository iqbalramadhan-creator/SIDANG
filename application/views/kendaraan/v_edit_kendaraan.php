<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/kendaraan/">Data Inventaris Peralatan dan Mesin</a></li>
    <li class="active">Edit Data Peralatan dan Mesin</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Peralatan dan Mesin</h2>   
        <h5>Pengelolaan data inventaris berupa peralatan dan mesin di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Edit Data Kendaraan
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/kendaraan/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM EDIT DATA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/kendaraan/editkendaraan" method="post">
						<?php foreach($datakendaraan as $d){ ?>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Kode Peralatan</label>
								    <input class="form-control" type="text" name="kodekendaraan" value="<?=$d->kodekendaraan; ?>">
								    <input class="form-control" type="hidden" name="kode_kendaraan" value="<?=$d->kode_kendaraan; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Jenis / Nama Barang</label>
								    <input class="form-control" type="text" name="jeniskendaraan" value="<?=$d->jenis_barang; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Merk</label>
								    <input class="form-control" type="text" name="merk" value="<?=$d->merk; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tipe</label>
								    <input class="form-control" type="text" name="type" value="<?=$d->type; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>CC</label>
								    <input class="form-control" type="text" name="cc" value="<?=$d->cc; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Warna</label>
								    <input class="form-control" type="text" name="warna" value="<?=$d->warna; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor Rangka</label>
								    <input class="form-control" type="text" name="nomorrangka" value="<?=$d->no_rangka; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor Mesin</label>
								     <input class="form-control" type="text" name="nomormesin" value="<?=$d->no_mesin; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tahun Pembuatan</label>
								     <input class="form-control" type="year" name="tahunbuat" value="<?=$d->thn_buat; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tahun Pembelian</label>
								     <input class="form-control" type="year" name="tahunbeli" value="<?=$d->thn_beli; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor Polisi</label>
								     <input class="form-control" type="text" name="nomorpolisi" value="<?=$d->no_pol; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Tanggal BPKB</label>
								     <input class="form-control" type="date" name="tanggalbpkb" value="<?=$d->tgl_bpkb; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Nomor BPKB</label>
								     <input class="form-control" type="text" name="nomorbpkb" value="<?=$d->no_bpkb; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Asal-usul</label>
									<input class="form-control" type="text" name="asalusul" value="<?=$d->asal_usul; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
									<label>Harga Rp</label>
								    <input class="form-control" type="text" name="harga" value="<?=$d->harga; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
								    <label>Keterangan</label>
								    <input class="form-control" type="text" name="keterangan" value="<?=$d->keterangan; ?>">
								</div>
							</div>
						</div>
						    
						<a href="<?php echo base_url() ; ?>index.php/kendaraan/editkendaraan/<?php echo $d->kode_kendaraan ;?>"   
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
