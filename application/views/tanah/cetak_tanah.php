<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
    <li><a href="<?php echo base_url() ; ?>index.php/laporan/">Laporan</a></li>
	<li class="active">Data Inventaris Tanah</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Tanah</h2>   
        <h5>Pengelolaan data inventaris berupa tanah di CV Deschino Sport</h5>             
            <div class="panel panel-default">
                <div class="panel-heading">
                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <form action="<?php echo base_url() ; ?>index.php/laporan/cetaktanah/>" method="post" target="_blank">
                            <input type="hidden" name="tgl_mulai" class="form-control" value="<?=$tahun; ?>" / required>
                            <button id="print" type="submit" class="btn btn-info btn-big" name="tambah" style=""><i class="fa fa-print" target="_blank"></i> Print Data </button> 
                            </form>
                        </div>

                        <div class="col-md-3">
                        <form method="post" action="<?php echo base_url();?>index.php/laporan/cetak_tanah" >
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

                    <!-- <script>
                            $('#beton').click(function() {
                                $('#bahan_lain').prop('disabled', true);
                                /*$(this).prop('disabled', false);*/
                            });
                    </script> -->

                <?php } ?>
                </div>   
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode Tanah</th>
                                            <th>Jenis / Nama Tanah</th>
                                            <th>Luas M2</th>
                                            <th>Letak / Alamat</th>
                                            <th>Hak Status Tanah</th>
                                            <th>Tanggal Serifikat Tanah</th>
                                            <th>Nomor Serifikat Tanah</th>
                                            <th>Penggunaan</th>
                                            <th>Asal-usul</th>
                                            <th>Harga Rp</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
								    foreach($laporan as $t){ ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $t->kodetanah ?></td>
                                            <td><?php echo $t->jenis_barang ?></td>
                                            <td><?php echo $t->luas_tanah ?></td>
                                            <td><?php echo $t->alamat ?></td>
                                            <td><?php echo $t->hak ?></td>
                                            <td><?php echo $t->tgl_sertifikat ?></td>
                                            <td><?php echo $t->no_sertifikat ?></td>
                                            <td><?php echo $t->penggunaan ?></td>
                                            <td><?php echo $t->asal_usul ?></td>
                                            <td><?php echo $t->harga ?></td>
                                            <td><?php echo $t->keterangan ?></td>
                                        </tr>
                                        <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</div>
