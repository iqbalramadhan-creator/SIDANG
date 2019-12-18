<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
window.print();
</script>
	<title>Cetak Barang</title>
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
			<h2>LAPORAN PEMASUKAN BARANG</h2>
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



<table width="100%" border="1" cellpadding="3" cellspacing="0">
	 <thead>
		<tr align="center">
			<td>NO</td>
			<td>KODE BARANG</td>
			<td>NAMA BARANG </td>
			<td>QTY AWAL</td>
			<td>QTY SISA</td>
			<td>SATUAN</td>
			<td>TANGGAL BELI</td>
			<td>KETERANGAN</td>
			<td>TANGGAL INPUT</td>
		</tr>	
	</thead>
	<tbody>
		<?php $no=1;
		foreach($databarang as $t) { ?>
		<tr>
			<td><?php echo $no++ ?></td>
            <td><?php echo $t->kodebarang ?></td> 
            <td><?php echo $t->jenis_barang ?></td>
            <td><?php echo $t->qty ?></td>
             <td><?php echo $t->qty_akhir ?></td>
			<td><?php echo $t->satuan ?></td>
            <td><?php echo $t->th_beli ?></td>
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