<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
window.print();
</script>
	<title>Cetak Barang Keluar</title>
	<link rel="shortcut icon" href="<?php echo base_url() ; ?>7.png" />

<style type="text/css">
	body { font-family: sans-serif; font-size: 10px; }
	thead {
   		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
</style>

</head>
<body>
<center><br><br>
<h2><img src="<?php echo base_url();?>assets/img/7.png"/ width="410" height="280"></h2>
<br><br><br><br>
<div style="page-break-after:always;">
<table>
	<tr>
		<td align="center"> 
		<font size="4">
			<h2>LAPORAN PENGELUARAN BARANG</h2>
			<h2>GUDANG DESCHINO SPORT </h2>
			<h2>YOGYAKARTA</h2>
			<h2><?php echo $tahun; ?></h2>
		</font>
		</td>
	</tr>
</center>
</table>
</div>

<br><br><br>
	<b><p>LAPORAN PENGELUARAN BARANG </p>
		<p>GUDANG DESCHINO SPORT </p>
	<p><?php echo $tahun; ?></p></b>

<br><br>

<!--<table width="100%">
	<tr>
		<td width="10%" align="left"> 
			<p align="left">PROPINSI</p>
			<p align="left">KABUPATEN</p>
			<p align="left">UNIT</p>
			<p align="left">SATUAN KERJA</p>
			<p align="left">KODE LOKASI</p> <br>
		</td>
		<td align="left"> 
			<p align="left">:&nbsp; &nbsp; Daerah Istimewa Yogyakarta</p>
			<p align="left">:&nbsp; &nbsp; Bantul</p>
			<p align="left">:&nbsp; &nbsp; Bambanglipuro</p>
			<p align="left">:&nbsp; &nbsp; Desa Sidomulyo</p>
			<p align="left">:&nbsp; &nbsp; 3402050001</p> <br>
		</td>
	</tr>
</table>

	<!-- <p align="left">PROPINSI : Daerah Istimewa Yogyakarta</p>
	<p align="left">KABUPATEN : Bantul</p>
	<p align="left">UNIT : Bambanglipuro</p>
	<p align="left">SATUAN KERJA : Desa Sidomulyo</p>
	<p align="left">KODE LOKASI : 3402050001</p> <br> -->

<table width="100%" border="1" cellpadding="3" cellspacing="0">
	<thead>
		<tr align="center">
			<td>NO</td>
			<td>KODE BARANG</td>
			<td>NAMA BARANG </td>
			<td>QTY BARANG KELUAR</td>
			<td>SATUAN</td>
			<td>KETERANGAN</td>
			<td>TANGGAL INPUT</td>
		</tr>
		<!--<tr align="center">
			<td>Bertingkat / Tidak</td>
			<td>Beton / Tidak</td>
			<td>Tanggal</td>
			<td>Nomor</td>
			<td>Luas M2</td>
			<td>Status Tanah</td>
			<td>Nomor Kode Tanah</td>
		</tr>
		<tr align="center">
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
			<td>10</td>
			<td>11</td>
			<td>12</td>
			<td>13</td>
			<td>14</td>
			<td>15</td>
		</tr>-->
	</thead>
	<tbody>
		<?php $no=1;
		foreach($databarangkeluar as $t) { ?>
		<tr>
	        <td><?php echo $no++ ?></td>
            <td><?php echo $t->kodebarang ?></td> 
            <td><?php echo $t->jenis_barang ?></td>
            <td><?php echo $t->qty ?></td>
			<td><?php echo $t->satuan ?></td>
            <td><?php echo $t->keterangan ?></td>
            <td><?php echo $t->tgl_input ?></td>  
	    <?php } ?>
	    </tr>
	</tbody>
</table>

<table width="100%" cellpadding="5" cellspacing="5">
	<tr>
		<td width="35%" align="center"> 
			<p>Mengetahui,</p>
			<p>Directur</p>
			<br><br><br><br><br>
			<b><p>P. Tino</p></b>
		</td>
		<td width="30%" align="center"> 
		</td>
		<td width="35%" align="center"> 
			<p>Piyungan, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <!--<?php echo $tahun; ?></p>-->
			<b><p>Kepala Bagian / Pengurusan Barang</p></b>
			<br><br><br><br><br>
			<b><p>Mas Juli</p></b>
		</td>
	</tr>
</table>
</body>
</html>