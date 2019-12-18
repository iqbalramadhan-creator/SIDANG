<ul class="breadcrumb">
    <li><a href="#">SI-DANG</a></li>
    <li class="active">Data Pengguna SI-DANG</li>
</ul>

<div class="col-md-12">
     <center><h2>Tabel Data Pengguna SI-DANG</h2>   
        <h5>Pengelolaan data pengguna Aplikasi SI-DANG CV. Deschino Sport</h5>              
    </center>
             <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo base_url() ; ?>index.php/user/tambahuser/">   
                    <button type="submit" class="btn btn-success btn-md" name="tambah"><i class="fa fa-users"></i> Tambah Pengguna</button> </a>
                </div>
                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama Lengkap</th>
                                    <th>Password</th>
                                    <th>Posisi Pengguna</th>
                                    <th>Nomor Telepon</th>
                                    <th colspan="3"><center>Kelola</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=1;
                                foreach($user as $u){ ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->username ?></td>
                                    <td><?php echo $u->nama_lengkap ?></td>
                                    <td><?php echo $u->password ?></td>
                                    <td><?php echo $u->posisi ?></td>
                                    <td><?php echo $u->tlp ?></td>
                                    <td align="center"> <a href="<?php echo base_url() ; ?>index.php/user/edituser/<?php echo $u->id_user ;?>">
                                         <button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit</button> </a> </td>
                                    <td align="center"> <a href="<?php echo base_url() ; ?>index.php/user/hapususer/<?php echo $u->id_user ;?>"     
                                         onclick="return confirm('Apakah Anda yakin untuk menghapus?');"> 
                                         <button class="btn btn-danger btn-xs"><i class="fa fa-exclamation-circle"></i> Hapus</button> </a> </td>
                                </tr>
                            <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</div>
