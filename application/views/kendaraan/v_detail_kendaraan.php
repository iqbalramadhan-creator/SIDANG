<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/kendaraan/">Data Inventaris Peralatan dan Mesin</a></li>
    <li class="active">Detail Data Peralatan dan Mesin</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Peralatan dan Mesin</h2>   
        <h5>Pengelolaan data inventaris berupa peralatan dan mesin di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Detail Data Kendaraan
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <?php 
                        foreach($datakendaraan as $d){ 
                        ?>
                        <tr>
                            <th width="20%">Kode Kendaraan</th>
                            <td> <?=$d->kodekendaraan; ?> </td>
                        </tr>
                        <tr>
                            <th>Tanggal Input Data</th>
                            <td> <?php echo tgl_indo($d->tgl_input); ?> </td>
                        </tr>
                        <tr>
                            <th>Jenis / Nama Barang</th>
                            <td> <?=$d->jenis_barang; ?> </td>
                        </tr>
                        <tr>
                            <th>Merk</th>
                            <td> <?=$d->merk; ?> </td>
                        </tr>
                        <tr>
                            <th>Tipe</th>
                            <td> <?=$d->type; ?> </td>
                        </tr>
                         <tr>
                            <th>CC</th>
                            <td> <?=$d->cc; ?> </td>
                        </tr>
                         <tr>
                            <th>Warna</th>
                            <td> <?=$d->warna; ?> </td>
                        </tr>
                        <tr>
                            <th>Nomor Rangka</th>
                            <td> <?=$d->no_rangka; ?> </td>
                        </tr>
                        <tr>
                            <th>Nomor Mesin</th>
                            <td> <?=$d->no_mesin; ?> </td>
                        </tr>
                        <tr>
                            <th>Tahun Pembuatan</th>
                            <td> <?=$d->thn_buat; ?> </td>
                        </tr>
                        <tr>
                            <th>Tahun Pembelian</th>
                            <td> <?=$d->thn_beli; ?> </td>
                        </tr>
                        <tr>
                            <th>Nomor Polisi</th>
                            <td> <?=$d->no_pol; ?> </td>
                        </tr>
                        <tr>
                            <th>Tanggal BPKB</th>
                            <td> <?php echo tgl_indo($d->tgl_bpkb); ?></td>
                        </tr>
                        <tr>
                            <th>Nomor BPKB</th>
                            <td> <?=$d->no_bpkb; ?> </td>
                        </tr>
                        <tr>
                            <th>Asal-usul</th>
                            <td> <?=$d->asal_usul; ?> </td>
                        </tr>
                         <tr>
                            <th>Harga Rp</th>
                            <td> <?=$d->harga; ?> </td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td> <?=$d->keterangan; ?> </td>
                        </tr>
                        <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
</div>
