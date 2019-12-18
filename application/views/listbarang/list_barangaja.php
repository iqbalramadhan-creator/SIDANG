<ul class="breadcrumb">
    <li><a href="<?php echo base_url() ; ?>index.php">SI-DANG</a></li>
    <li class="active">List Data Barang</li>
</ul>

<div class="col-md-12">
    <center><h2>Tabel List Data Barang</h2>   
        <h5>Pengelolaan data gudang berupa barang di CV. Deschino Sport</h5>             
    </center> 
            <div class="panel panel-default">
                <div class="panel-heading">
                
                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                <a href="<?php echo base_url() ; ?>index.php/listbarang/tambahbarang/">   
                <button type="submit" class="btn btn-info btn-small" name="tambah" style=""><i class="fa fa-plus"></i> Tambah Data</button> </a>
                <?php } ?>
                </div>
                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Qty </th>
                                </tr>
                            </thead>
                            <tbody>
                            <!--<?php 
                                $no=1;
                                foreach($barang as $g){ ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $g->kodebarang ?></td>
                                    <td><?php echo $g->tgl_input ?></td>
                                    <td><?php echo $g->jenis_barang ?></td>
                                    <td><?php echo $g->keterangan ?></td>
                                    <td align="center"> 
                                        <a href="<?php echo base_url() ; ?>index.php/barang/detailbarang/<?php echo $g->kode_barang  ;?>">
                                        <button class="btn btn-success btn-xs"><i class="fa fa-external-link"></i> Detail 
                                        </button> </a> &nbsp; &nbsp; &nbsp;
                                  
                                    <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                   
                                        <a href="<?php echo base_url() ; ?>index.php/barang/editbarang/<?php echo $g->kode_barang ;  ?>">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit
                                        </button> </a>

                                    <a href="<?php echo base_url() ; ?>index.php/barang/hapusbarang/<?php echo $g->kode_barang ;   ?>"   onclick="return confirm('Apakah Anda yakin untuk menghapus?');"> 
                                    <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-exclamation-circle"></i> Hapus</button> <?php } ?> </a>  
                                        

                                       <!-- <a href="<?php echo base_url() ; ?>index.php/listbarang/pakaibarang/<?php echo $g->kode_barang ;  ?>">
                                        <button class="btn btn-warning btn-xs"><i class="fa fa-retweet "></i> Pakai
                                        </button> </a>-->
                                    
                                    <?php } ?> </td>
                                </tr> 
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>