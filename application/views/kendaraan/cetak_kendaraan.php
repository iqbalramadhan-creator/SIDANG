<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
	<li><a href="<?php echo base_url() ; ?>index.php/laporan/">Laporan</a></li>
    <li class="active">Laporan Data Inventaris Peralatan dan Mesin</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Peralatan dan Mesin</h2>   
        <h5>Pengelolaan data inventaris berupa peralatan dan mesin di CV Deschino Sport</h5>             
            <div class="panel panel-default">
                <div class="panel-heading">
                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <form action="<?php echo base_url() ; ?>index.php/laporan/cetakmesin/>" method="post" target="_blank">
                            <input type="hidden" name="tgl_mulai" class="form-control" value="<?=$tahun; ?>" / required>
                            <button id="print" type="submit" class="btn btn-info btn-big" name="tambah" style=""><i class="fa fa-print" target="_blank"></i> Print Data </button> 
                            </form>
                        </div>

                        <div class="col-md-3">
                        <form method="post" action="<?php echo base_url();?>index.php/laporan/cetak_mesin" >
                          <div class="form-group">
                              <table width="100%" >
                                <tr>
                                  <td width="78%">
                                  <select name="tahun" class="form-control select2" required="required"> 
                                    <datalist id="tahun">
                                      <option value="">Pilih Tahun</option>
                                          <?php 
                                          foreach ($tahun_2 as $t) {
                                          ?>
                                      <option value="<?php echo $t->tahun; ?>"><?php echo $t->tahun ?></option>
                                          <?php } ?>
                                    </datalist>
                                  </select>
                                  </td>

                                  <td width="2%"> &nbsp; </td>

                                  <td width="20%">
                                  <button class="btn btn-primary btn-small" type="submit">Lihat Laporan</button>
                                  </td>
                                </tr>
                              </table>
                          </div>
                        </form>
                        </div>
                    </div>

                    <script>
                            $('#beton').click(function() {
                                $('#bahan_lain').prop('disabled', true);
                                /*$(this).prop('disabled', false);*/
                            });
                    </script>

                <?php } ?>
                </div>   


                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Kendaraan</th>
                                            <th>Jenis / Nama Barang</th>
                                            <th>Merk</th>
                                            <th>Tipe</th>
                                            <th>CC</th>
                                            <th>Warna</th>
                                            <th>Nomor Rangka</th>
                                            <th>Nomor Mesin</th>
                                            <th>Tahun Pembuatan</th>
                                            <th>Tahun Pembelian</th>
                                            <th>Nomor Polisi</th>
                                            <th>Tanggal BPKB</th>
                                            <th>Nomor BPKB</th>
                                            <th>Asal-usul</th>
                                            <th>Harga Rp</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    foreach($laporan as $k){ ?>                         
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $k->kodekendaraan ?></td>
                                            <td><?php echo $k->jenis_barang ?></td>
                                            <td><?php echo $k->merk ?></td>
                                            <td><?php echo $k->type ?></td>
                                            <td><?php echo $k->cc ?></td>
                                            <td><?php echo $k->warna ?></td>
                                            <td><?php echo $k->no_rangka ?></td>
                                            <td><?php echo $k->no_mesin ?></td>
                                            <td><?php echo $k->thn_buat ?></td>
                                            <td><?php echo $k->thn_beli ?></td>
                                            <td><?php echo $k->no_pol ?></td>
                                            <td><?php echo $k->tgl_bpkb ?></td>
                                            <td><?php echo $k->no_bpkb ?></td>
                                            <td><?php echo $k->asal_usul ?></td>
                                            <td><?php echo $k->harga ?></td>
                                            <td><?php echo $k->keterangan ?></td>
                                        </tr>
                                        <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</div>
