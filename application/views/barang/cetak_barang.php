<ul class="breadcrumb">
	<li><a href="<?php echo base_url() ; ?>index.php">SI-DANG</a></li>
    <li><a href="<?php echo base_url() ; ?>index.php/laporan/">Laporan</a></li>
	<li class="active">Laporan Data Barang</li>
</ul>

<div class="col-md-12">
     <center><h2>Tabel Data Barang </h2>   
        <h5>Pengelolaan data gudang berupa barang di CV. Deschino Sport</h5>
      </center>             
            <div class="panel panel-default">
                <div class="panel-heading">
                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <form action="<?php echo base_url() ; ?>index.php/laporan/cetakbarang" method="post" target="_blank">
                            <input type="hidden" name="tgl_mulai" class="form-control" value="<?=$tahun; ?>" / required>
                            <button id="print" type="submit" class="btn btn-success btn-big" name="tambah" style=""><i class="fa fa-print" target="_blank"></i> Print Data </button> 
                            </form>
                        </div>

                        <div class="col-md-3">
                        <form method="post" action="<?php echo base_url();?>index.php/laporan/cetak_barang" >
                          <div class="form-group">
                              <table width="100%" >
                                <tr>
                                  <td width="78%">
                                  <select name="tahun" class="form-control select2" required="required"> 
                                    <datalist id="tahun">
                                      <option value="">Pilih Bulan & Tahun</option>
                                          <?php 
                                          foreach ($tahun_2 as $t) {
                                          ?>
                                       <option value="<?php echo $t->bulan.'-'.$t->tahun; ?>"><?php echo $t->bulan.' '.$t->tahun ?></option>
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
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Qty Awal</th>
                                            <th>Qty Sisa</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Keterangan </th>
                                            <th>Tanggal Input</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
								    foreach($laporan as $g){ ?>                         
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $g->kodebarang ?></td>
                                            <td><?php echo $g->jenis_barang ?></td>
                                            <td><?php echo $g->qty ?></td>
                                            <td><?php echo $g->qty_akhir ?></td>
                                            <td><?php echo $g->satuan ?></td>
                                            <td><?php echo $g->th_beli ?></td>
                                            <td><?php echo $g->keterangan ?></td>
                                            <td><?php echo $g->tgl_input ?></td> 
                                        </tr>
                                        <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>