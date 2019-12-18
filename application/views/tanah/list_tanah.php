<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li class="active">Data Inventaris Tanah</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Tanah</h2>   
        <h5>Pengelolaan data inventaris berupa tanah di CV Deschino Sport</h5>             
            <div class="panel panel-default">
                <div class="panel-heading">

                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
                ?>
                <a href="<?php echo base_url() ; ?>index.php/tanah/tambahtanah/">   
                <button type="submit" class="btn btn-info btn-small" name="tambah" style=""><i class="fa fa-file-text"></i> Tambah Data</button> </a>
                <?php } ?>
                </div>   
                
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Jenis / Nama Tanah</th>
                                            <th>Letak / Alamat</th>
                                            <th>Penggunaan</th>
                                            <th>Asal-usul</th>
                                            <th><center>Kelola</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
								    foreach($tanah as $t){ ?>

                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $t->jenis_barang ?></td>
                                            <td><?php echo $t->alamat ?></td>
                                            <td><?php echo $t->penggunaan ?></td>
                                            <td><?php echo $t->asal_usul ?></td>
                                            <td align="center"> 
                                                 <a href="<?php echo base_url() ; ?>index.php/tanah/detailtanah/<?php echo $t->kode_tanah ;  ?>">
                                                 <button class="btn btn-default btn-xs"><i class="fa fa-list"></i> Detail</button> </a> &nbsp; &nbsp; &nbsp;
                                            
                                            <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                            
                                                <a href="<?php echo base_url() ; ?>index.php/tanah/edittanah/<?php echo $t->kode_tanah ;?>"> 
                                                 <button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit</button> </a>
                                                 <!-- <a href="<?php echo base_url() ; ?>index.php/tanah/hapustanah/<?php echo $t->kode_tanah ;?>" 
                                                 onclick="return confirm('Apakah Anda yakin untuk menghapus?');">
                                                 <?php if ($this->session->userdata('posisi')=="Administrator") { ?>
                                                 <button class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Delete</button> 
                                                 <?php } ?> </a> --> 
                                                 <?php } ?> </td>
                                        </tr>
                                        <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</div>
