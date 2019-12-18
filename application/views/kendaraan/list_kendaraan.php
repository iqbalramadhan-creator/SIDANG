<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li class="active">Data Inventaris Peralatan dan Mesin</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Peralatan dan Mesin</h2>   
        <h5>Pengelolaan data inventaris berupa peralatan dan mesin di CV Deschino Sport</h5>             
            <div class="panel panel-default">
                <div class="panel-heading">
                
                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
                ?>
                <a href="<?php echo base_url() ; ?>index.php/kendaraan/tambahkendaraan/">   
                <button type="submit" class="btn btn-info btn-small" name="tambah" style=""><i class="fa fa-file-text"></i> Tambah Data</button> </a>
                <?php } ?>
                </div>
                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Jenis / Nama Barang</th>
                                    <th>Tipe</th>
                                    <th>Nomor Polisi</th>
                                    <th>Keterangan</th>
                                    <th><center>Kelola</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=1;
								foreach($kendaraan as $k){ ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $k->jenis_barang ?></td>
                                    <td><?php echo $k->type ?></td>
                                    <td><?php echo $k->no_pol ?></td>
                                    <td><?php echo $k->keterangan ?></td>
                                    <td align="center"> 
                                        <a href="<?php echo base_url() ; ?>index.php/kendaraan/detailkendaraan/<?php echo $k->kode_kendaraan ;?>">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-list"></i> Detail</button> </a> &nbsp; &nbsp; &nbsp;
                                    <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                
                                        <a href="<?php echo base_url() ; ?>index.php/kendaraan/editkendaraan/<?php echo $k->kode_kendaraan ;?>">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit</button> </a>
                                         <!-- <a href="<?php echo base_url() ; ?>index.php/kendaraan/hapuskendaraan/<?php echo $k->kode_kendaraan ;?>"     onclick="return confirm('Apakah Anda yakin untuk menghapus?');"> 
                                         <?php if ($this->session->userdata('posisi')=="Administrator") { ?>
                                         <button class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Delete</button> 
                                         <?php } ?>
                                         </a>  -->
                                         <?php } ?> 
                                    </td>
                                </tr>
                            <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</div>
