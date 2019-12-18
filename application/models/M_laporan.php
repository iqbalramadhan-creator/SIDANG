<?php
class M_laporan extends CI_Model {

//mengambil data tanah yang akan di print
function gettahun()
    {
      	$data = $this->db->query("SELECT MONTHNAME(tahun) AS bulan, YEAR(tahun) AS tahun FROM inventaris.tahun;");
		    return $data;
	  }



function cetakbarangkeluar($bulan, $tahun)
    {
      $cbarangkeluar = $this->db->query("SELECT * FROM barang_keluar WHERE MONTHNAME(tgl_input)='".$bulan."' AND YEAR(tgl_input)='".$tahun."';");
		return $cbarangkeluar;
	}


function cetakbarang($bulan, $tahun)
    {
      $cbarang = $this->db->query("SELECT * FROM kib_barang WHERE MONTHNAME(tgl_input)='".$bulan."' AND YEAR(tgl_input)='".$tahun."';");
		return $cbarang;
	}

}