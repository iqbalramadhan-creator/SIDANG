<ul class="breadcrumb">
	<li><a href="<?php echo base_url() ; ?>index.php">SI-DANG</a></li>
	<li class="active">Data Barang Keluar</li>
</ul>

<div class="col-md-12">
    <center><h2>Tabel Data Barang Keluar</h2>   
        <h5>Pengelolaan data barang keluar di gudang CV. Deschino Sport</h5> 
    </center>     
            <div class="panel panel-default">
                <div class="panel-heading">

                <?php ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") 
                ?>
                </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr>
                                            <th>Nomor</th>
                                            <th>Kode Barang</th>
                                            <th>Tanggal Input Data</th>
                                            <th>Nama Barang</th>
                                            <th>QTY Pakai</th>
                                            <th>Satuan</th>
                                            <th>Keterangan</th>
                                            <th><center>Kelola</center></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    foreach ($databarangkeluar as $g) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $g->kodebarang ?></td>
                                            <td><?php echo $g->tgl_input ?></td>
                                            <td><?php echo $g->jenis_barang ?></td>
                                            <td><?php echo $g->qty ?></td>
                                            <td><?php echo $g->satuan ?></td>
                                            <td><?php echo $g->keterangan ?></td>
                                            <td align="center"> 

                                        <a href="<?php echo base_url() ; ?>index.php/barangkeluar/detailbarangkeluar/<?php echo $g->kode_barang  ;?>">
                                                 <button class="btn btn-success btn-xs"><i class="fa fa-external-link"></i> Detail </button> </a> &nbsp; &nbsp; &nbsp;

                                            <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                            
                                        <a href="<?php echo base_url() ; ?>index.php/barangkeluar/editbarangkeluar/<?php echo $g->kode_barang ;  ?>">
                                                 <button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit</button> </a>

                                        <a href="<?php echo base_url() ; ?>index.php/barangkeluar/hapusbarangkeluar/<?php echo $g->kode_barang ;   ?>"   onclick="return confirm('Apakah Anda yakin untuk menghapus?');"> 
                                                 <?php if ($this->session->userdata('posisi')=="Administrator") { ?>
                                                 <button class="btn btn-danger btn-xs"><i class="fa fa-exclamation-circle"></i> Hapus</button> <?php } ?>
                                                 </a>  <?php } ?> </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
</div>       
