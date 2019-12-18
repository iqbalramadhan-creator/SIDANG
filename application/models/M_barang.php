<?php
class M_barang extends CI_Model {

//mengambil seluruh data barang
	function get_barang() {
		$barang = $this->db->query('SELECT * FROM kib_barang ORDER BY kib_barang.`kode_barang` DESC;' );
		return $barang;
	}

	function get_satuan($id) {
		$this->db->select('*');
		$this->db->where('kode_barang',$id);
		$this->db->from('kib_barang');
		return $this->db->get();
	}

	function get_pakai($id) {
		$this->db->select('kode_barang','kodebarang','jenis_barang','qty','satuan','keterangan','tgl_input');
		$this->db->where('kode_barang',$id);
		$this->db->from('kib_barang');
		return $this->db->get();
	}

//mengambil data kodebarang
	function get_kodepakai($urutan) {
		$this->db->select('*');
		$this->db->where('kode_barang',$urutan);
		$this->db->from('kib_barang');
		return $this->db->get();
	}

//simpan data
	function simpan($kode_barang, $kodebarang, $jenis_barang, $qty, $satuan, $keterangan, $tgl_input, $qty_akhir){
		$this->db->query("insert into barang_keluar(kode_barang, kodebarang, jenis_barang, qty, satuan, keterangan, tgl_input, qty_akhir) values ('$kode_barang', '$kodebarang', '$jenis_barang', '$qty', '$satuan', '$keterangan', '$tgl_input', '$qty_akhir')");
	}

	function getjumlah($kode_barang){
		$this->db->query("insert into barang_keluar select * from kib_barang where kode_barang='$kode_barang'");
	}
//pengurangan data
	function get_kurang($kode){
		$this->db->query('UPDATE batas_cuti JOIN cuti ON batas_cuti.nik=cuti.nik SET batas_cuti.jumlah_bc=batas_cuti.jumlah_bc-cuti.jumlah_cuti');
    	$query = $this->db->where($id);
    return $query;
	}
//mengambil data barang berdasarkan kode id
	function get_kodebarang($kode_barang){
		$this->db->select('*');
		$this->db->where('kode_barang',	$kode_barang);
		$this->db->from('kib_barang');
		return $this->db->get();
	}

//melakukan update/edit data barang
	function edit_barang($kode_barang,$data){
		$this->db->where('kode_barang',$kode_barang);
		$this->db->update('kib_barang',$data);
	}

//menghapus data barang
 	function del_barang($kode_barang){
 		$this->db->where('kode_barang',$kode_barang);
 		$this->db->delete('kib_barang');
 	}

//melakukan tambah data
	function insert_barang($data){
		return $this->db->insert('kib_barang',$data);
	}

}