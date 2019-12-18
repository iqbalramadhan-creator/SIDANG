<ul class="breadcrumb">
	<li><a href="#">SI-DANG</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/user/">Data Pengguna</a></li>
    <li class="active">Tambah Data Pengguna SI-DANG</li>
</ul>

<div class="col-md-12">
     <center><h2>Tambah Data Pengguna SI-DANG</h2>   
        <h5>Pengelolaan data pengguna Aplikasi SI-DANG CV. Deschino Sport</h5>              
    </center>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Tambah Pengguna
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        
                        <ul class="pager">
						<li class="previous"><a href="<?php echo base_url() ; ?>index.php/user/">&larr; Kembali</a></li>
						</ul>


						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
						<div class="panel-heading">FORM TAMBAH DATA PENGGUNA</div>
						<div class="panel-body">
						<form role="form" action="<?php echo base_url() ; ?>index.php/user/tambah_user" method="post" name="datauser">

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>ID Pengguna</label>
								    <input class="form-control" type="text" name="id_user" required / oninvalid="this.setCustomValidity('Mohon maaf, ID Pengguna Harus Diisi')" oninput="setCustomValidity('')"> 
								    <font color="red"><?php 
									echo $this->session->flashdata('gagal'); ?></font>
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Nama Pengguna</label>
								    <input class="form-control" type="text" name="username" required / oninvalid="this.setCustomValidity('Mohon maaf, Nama Pengguna Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Nama Lengkap</label>
								    <input class="form-control" type="text" name="namalengkap" required / oninvalid="this.setCustomValidity('Mohon maaf, Data Nama Lengkap Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Password</label>
								    <input class="form-control" type="password" name="password" required / oninvalid="this.setCustomValidity('Mohon maaf, Password Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Posisi Pengguna</label>
								    <input class="form-control" type="text" name="posisiuser" required / oninvalid="this.setCustomValidity('Mohon maaf, Data Posisi Pengguna Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-3">
								<div class="form-group">
								    <label>Nomor Telepon</label>
								    <input class="form-control" type="text" name="teleponuser" / required oninvalid="this.setCustomValidity('Mohon maaf, Data Nomor Telpon Harus Diisi')" oninput="setCustomValidity('')">
								</div>
							</div>
						</div>
												    
						<!--<a href="<?php echo base_url() ; ?>index.php/user/tambah_user/"
						;">-->
						<button type="submit" class="btn btn-info" name="tambah" onclick="return confirm('Apakah Anda yakin untuk menyimpan data?')"><i class="fa fa-save"></i> Tambah Pengguna</button>


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
