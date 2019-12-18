<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/tanah/">Data Inventaris Tanah</a></li>
    <li class="active">Detail Data Tanah</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Tanah</h2>   
        <h5>Pengelolaan data inventaris berupa tanah di CV Deschino Sport</h5>             

            <div class="panel panel-default">
                <div class="panel-heading">
                   Detail Data Tanah
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <?php 
                        foreach($datatanah as $d){ 
                        ?>
                        <tr>
                            <th width="20%">Kode Tanah</th>
                            <td> <?=$d->kodetanah; ?> </td>
                        </tr>
                        <tr>
                            <th>Tanggal Input Data</th>
                            <td> <?php echo tgl_indo($d->tgl_input); ?> </td>
                        </tr>
                        <tr>
                            <th>Jenis / Nama Tanah</th>
                            <td> <?=$d->jenis_barang; ?> </td>
                        </tr>
                        <tr>
                            <th>Luas M2</th>
                            <td> <?=$d->luas_tanah; ?> </td>
                        </tr>
                        <tr>
                            <th>Letak / Alamat</th>
                            <td> <?=$d->alamat; ?> </td>
                        </tr>
                         <tr>
                            <th>Hak Status Tanah</th>
                            <td> <?=$d->hak; ?> </td>
                        </tr>
                         <tr>
                            <th>Tanggal Serifikat Tanah</th>
                            <td> <?php echo tgl_indo($d->tgl_sertifikat); ?></td>
                        </tr>
                        <tr>
                            <th>Nomor Serifikat Tanah</th>
                            <td> <?=$d->no_sertifikat; ?> </td>
                        </tr>
                         <tr>
                            <th>Penggunaan</th>
                            <td> <?=$d->penggunaan; ?> </td>
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
                            <th>Bagian Kepala Urusan</th>
                            <td> <?=$d->kaur; ?> </td>
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
