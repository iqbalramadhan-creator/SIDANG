<?php
class M_listbarang extends CI_Model {

//mengambil seluruh data barang
	function get_barang() {
		$barang = $this->db->query('SELECT * FROM barang ORDER BY barang.`kode_barang` DESC;' );
		return $barang;
	}
}