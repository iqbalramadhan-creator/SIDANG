<ul class="breadcrumb">
	<li><a href="#">Inventaris</a></li>
    <li><a href="<?php echo base_url() ; ?>index.php/laporan/">Laporan</a></li>
	<li class="active">Laporan Data Inventaris Furniture/ATK</li>
</ul>

<div class="col-md-12">
     <h2>Tabel Data Inventaris Furniture/atk</h2>   
        <h5>Pengelolaan data inventaris berupa Furniture/ATK di CV Deschino Sport</h5>             
            <div class="panel panel-default">
                <div class="panel-heading">
                <?php if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") { ?>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <form action="<?php echo base_url() ; ?>index.php/laporan/cetakatk/>" method="post" target="_blank">
                            <input type="hidden" name="tgl_mulai" class="form-control" value="<?=$tahun; ?>" / required>
                            <button id="print" type="submit" class="btn btn-info btn-big" name="tambah" style=""><i class="fa fa-print" target="_blank"></i> Print Data </button> 
                            </form>
                        </div>

                        <div class="col-md-3">
                        <form method="post" action="<?php echo base_url();?>index.php/laporan/cetak_atk" >
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
                                            <th>Jenis / Nama Barang</th>
                                            <th>Merk / Model</th>
                                            <th>Nomor Seri Pabrik</th>
                                            <th>Ukuran</th>
                                            <th>Bahan</th>
                                            <th>Tahun Pembelian</th>
                                            <th>Kode Barang</th>
                                            <th>Jumlah</th>
                                            <th>Keadaan</th>
                                            <th>Keterangan / Mutasi DLL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
								    foreach($laporan as $g){ ?>                         
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $g->jenis_barang ?></td>
                                            <td><?php echo $g->merk ?></td>
                                            <td><?php echo $g->no_pabrik ?></td>
                                            <td><?php echo $g->ukuran ?></td>
                                            <td><?php echo $g->bahan ?></td>
                                            <td><?php echo $g->th_beli ?></td>
                                            <td><?php echo $g->kodebarang ?></td>
                                            <td><?php echo $g->jumlah ?></td>
                                            <td><?php echo $g->keadaan ?></td>
                                            <td><?php echo $g->keterangan ?></td>
                                        </tr>
                                        </tr>
                                        <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


</div>
