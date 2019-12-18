<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li class="active">Data Inventaris Furniture/ATK</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Furniture/ATK</h2>   
        <h5>Pengelolaan data inventaris berupa furniture/ATK di CV Deschino Sport</h5>      
            <div class="panel panel-default">
                <div class="panel-heading">

                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
                ?>
                <a href="<?php echo base_url() ; ?>index.php/ruangan/tambahbarang/">   
                <button type="submit" class="btn btn-info btn-small" name="tambah" style=""><i class="fa fa-file-text"></i> Tambah Data</button> </a> 
                <?php } ?>
                </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr>
                                            <th>Ruangan</th>
                                            <th>Jenis / Nama Barang</th>
                                            <th>Merk / Model</th>
                                            <th>Keterangan / Mutasi DLL</th>
                                            <th><center>Kelola</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    foreach ($barang as $g) {

                                        ?>

                                        <tr>
                                            <td><?php echo $g->nama ?></td>
                                            <td><?php echo $g->jenis_barang ?></td>
                                            <td><?php echo $g->merk ?></td>
                                            <td><?php echo $g->keterangan ?></td>
                                            <td align="center"> 
                                                <a href="<?php echo base_url() ; ?>index.php/ruangan/detailbarang/<?php echo $g->id_barangruang;?>">
                                                <button class="btn btn-default btn-xs"><i class="fa fa-list"></i> Detail </button> </a> &nbsp; &nbsp; &nbsp;

                                            <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                             
                                                <a href="<?php echo base_url() ; ?>index.php/ruangan/editbarang/<?php echo $g->id_barangruang;?>">
                                                 <button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit </button> </a>

                                                <!-- <a href="<?php echo base_url() ; ?>index.php/ruangan/hapusbarang/<?php echo $g->id_barangruang ;?>" 
                                                onclick="return confirm('Apakah Anda yakin untuk menghapus?');">
                                                <?php if ($this->session->userdata('posisi')=="Administrator") { ?> 
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Delete</button>  
                                                <?php } ?>
                                                </a> -->
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
