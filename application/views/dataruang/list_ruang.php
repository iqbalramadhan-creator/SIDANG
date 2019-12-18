<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li class="active">Data Ruangan</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Ruangan</h2>   
        <h5>Pengelolaan data ruangan atau kantor di CV Deschino Sport</h5>             
            <div class="panel panel-default">
                <div class="panel-heading">
                
                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                <a href="<?php echo base_url() ; ?>index.php/dataruang/tambahruang/">   
                <button type="submit" class="btn btn-info btn-small" name="tambah" style=""><i class="fa fa-file-text"></i> Tambah Data</button> </a>
                <?php } ?>
                </div>
                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    
                                    <th>Nama Ruangan</th>
                                    <th>Nama Gedung</th>
                                    <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                    <th><center>Kelola</center></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=1;
								foreach($ruangan as $k){ ?>
                                <tr>
                                    
                                    <td><?php echo $k->nama ?></td>
                                    <td><?php echo $k->jenis_barang ?></td>
                                    <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                                    <td align="center"> 
                                        <a href="<?php echo base_url() ; ?>index.php/dataruang/editruang/<?php echo $k->id_ruangan ;?>">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit
                                        </button> </a> 
                                    <?php } ?> </td>
                                </tr> 
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>