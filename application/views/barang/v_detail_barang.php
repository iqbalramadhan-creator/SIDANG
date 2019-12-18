<ul class="breadcrumb">
	<li><a href="#">SI-DANG</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/barang/">Data Barang</a></li>
    <li class="active">Detail Barang</li>
</ul>

<div class="col-md-12">
     <center><h2>Detail Data Barang</h2>   
        <h5>Pengelolaan data gudang berupa barang di CV. Deschino Sport</h5>             
    </center>
            <div class="panel panel-default">
                <div class="panel-heading">
                   Detail Data Barang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <ul class="pager">
                            <li class="previous"><a href="<?php echo base_url() ; ?>index.php/barang/">&larr; Kembali</a></li>
                        </ul>
                        <?php 
                        foreach($databarang as $d){ 
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
                            <th>Qty Awal</th>
                            <td> <?=$d->qty; ?> </td>
                        </tr>

                          <tr>
                            <th>Satuan</th>
                            <td> <?=$d->satuan; ?> </td>
                        </tr>
                        <tr>
                            <th>Taggal Pembelian</th>
                            <td> <?=$d->th_beli; ?> </td>
                        </tr>
                        <tr>
                            <th>Keterangan </th>
                            <td> <?=$d->keterangan; ?> </td>
                        </tr>
                        <tr>
                            <th>Qty Sisa </th>
                            <td> <?=$d->qty_akhir; ?> </td>
                        </tr>
                        <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
</div>
