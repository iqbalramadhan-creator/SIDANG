<ul class="breadcrumb">
	<li><a href="#">SI-DANG</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/barangkeluar/">Data Barang Keluar</a></li>
    <li class="active">Detail Data Barang Keluar</li>
</ul>

<div class="col-md-12">
    <center><h2>Detail Data Barang Keluar</h2>   
        <h5>Pengelolaan data barang keluar di gudang CV. Deschino Sport</h5>             
    </center>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Detail Data Barang Keluar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <?php 
                        foreach($databarangkeluar as $d){ 
                        ?>
                        <tr>
                            <th width="20%">Kode Barang</th>
                            <td> <?=$d->kodebarang; ?> </td>
                        </tr>
                        <tr>
                            <th>Tanggal Input Data</th>
                            <td> <?=$d->tgl_input; ?> </td>
                        </tr>
                        <tr>
                            <th>Nama Barang</th>
                            <td> <?=$d->jenis_barang; ?> </td>
                        </tr>

                          <tr>
                            <th>Qty Pemakaian</th>
                            <td> <?=$d->qty; ?> </td>
                        </tr>

                          <tr>
                            <th>Satuan</th>
                            <td> <?=$d->satuan; ?> </td>
                        </tr>
                        
                        <tr>
                            <th>Keterangan </th>
                            <td> <?=$d->keterangan; ?> </td>
                        </tr>
                        <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
</div>
