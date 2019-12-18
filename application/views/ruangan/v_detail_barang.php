<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/ruangan/">Data Inventaris Furniture/ATK</a></li>
    <li class="active">Detail Data Furniture/ATK</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Furniture/ATK</h2>   
        <h5>Pengelolaan data inventaris berupa furniture/ATK di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Detail Data Barang
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <?php 
                        foreach($databarang as $d){ 
                        ?>
                        <tr>
                            <th width="20%">Kode ID Barang</th>
                            <td> <?=$d->kode_barang; ?> </td>
                        </tr>
                        <tr>
                            <th>Tanggal Input Data</th>
                            <td> <?php echo tgl_indo($d->tgl_input); ?> </td>
                        </tr>
                        <tr>
                            <th>Nama Ruangan</th>
                            <td> <?=$d->nama; ?> </td>
                        </tr>
                        <tr>
                            <th>Jenis / Nama Barang</th>
                            <td> <?=$d->jenis_barang; ?> </td>
                        </tr>
                        <tr>
                            <th>Merk / Model</th>
                            <td> <?=$d->merk; ?> </td>
                        </tr>
                        <tr>
                            <th>Nomor Seri Pabrik</th>
                            <td> <?=$d->no_pabrik; ?> </td>
                        </tr>
                        <tr>
                            <th>Ukuran</th>
                            <td> <?=$d->ukuran; ?> </td>
                        </tr>
                        <tr>
                            <th>Bahan</th>
                            <td> <?=$d->bahan; ?> </td>
                        </tr>
                        <tr>
                            <th>Tahun Pembuatan / Pembelian</th>
                            <td> <?=$d->th_beli; ?> </td>
                        </tr>
                        <tr>
                            <th>Nomor Kode Barang</th>
                            <td> <?=$d->kodebarang; ?> </td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td> <?=$d->jumlah; ?> </td>
                        </tr>
                         <tr>
                            <th>Keadaan</th>
                            <td> <?=$d->keadaan; ?> </td>
                        </tr>
                        <tr>
                            <th>Keterangan / Mutasi DLL</th>
                            <td> <?=$d->keterangan; ?> </td>
                        </tr>
                        <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
</div>
