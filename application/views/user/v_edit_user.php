<ul class="breadcrumb">
	<li><a href="#">SI-DANG</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/user/">Data Pengguna</a></li>
    <li class="active">Edit Data Pengguna SI-DANG</li>
</ul>

<div class="col-md-12">
     <center><h2>Edit Data Pengguna SI-DANG</h2>   
        <h5>Pengelolaan data pengguna Aplikasi SI-DANG CV. Deschino Sport</h5>              
    </center>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Edit Data Pengguna
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/user/">&larr; Kembali</a></li>
						</ul>

						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM EDIT DATA PENGGUNA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/user/edituser" method="post">
						<?php foreach($datauser as $d){ ?>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Kode ID Pengguna</label>
								    <input class="form-control" type="text" value="<?=$d->id_user; ?>" disabled>
								    <input class="form-control" type="hidden" name="id_user" value="<?=$d->id_user; ?>" >
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Username Pengguna</label>
								    <input class="form-control" type="text" name="username" value="<?=$d->username; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Nama Lengkap Pengguna</label>
								    <input class="form-control" type="text" name="namalengkap" value="<?=$d->nama_lengkap; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Password Pengguna</label>
								    <input class="form-control" type="password" name="password" value="<?=$d->password; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Posisi Pengguna</label>
								    <input class="form-control" type="text" name="posisiuser" value="<?=$d->posisi; ?>">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Nomor Telepon</label>
								    <input class="form-control" type="text" name="teleponuser" value="<?=$d->tlp; ?>">
								</div>
							</div>
						</div>
						    
						<!--<a href="<?php echo base_url() ; ?>index.php/user/edituser/<?php echo $d->id_user ;?>"-->   
						
						<button type="submit" class="btn btn-info" name="edit" onclick="return confirm('Apakah Anda yakin untuk mengubah data?')"><i class="fa fa-save"></i> Edit Pengguna</button>

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
