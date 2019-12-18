<?php
class M_barangkeluar extends CI_Model {

//mengambil seluruh data gedung
	function get_barangkeluar() {
		$barangkeluar = $this->db->query('SELECT * FROM barang_keluar ORDER BY barang_keluar.`kode_barang` DESC;');
		return $barangkeluar;
	}


//mengambil data gedung berdasarkan kode id
	function get_kodebarangkeluar($kode_barang){
		$this->db->select('*');
		$this->db->where('kode_barang',$kode_barang);
		$this->db->from('barang_keluar');
		return $this->db->get();
	}

//melakukan update/edit data gedung
	function editbarangkeluar($kode_barang,$data){
		$this->db->where('kode_barang',$kode_barang);
		$this->db->update('barang_keluar',$data);
	}

 //menghapus data gedung
 	function del_barangkeluar($kode_barang){
 		$this->db->where('kode_barang',$kode_barang);
 		$this->db->delete('barang_keluar');
	}


//melakukan tambah data
	function insert_barangkeluar($data){
		return $this->db->insert($data);
	}

	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update($kode, $nqty){
		$this->db->set('qty_akhir', $nqty, FALSE);
		$this->db->where('kodebarang',$kode);
		$this->db->update('kib_barang');
	}

	function get_qty($kode) {
		$query = $this->db->query("SELECT * FROM kib_barang WHERE kodebarang='$kode'");
		return $query;
	}

}