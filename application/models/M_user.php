<?php
class M_user extends CI_Model {

//mengambil seluruh data user
	function get_user() {
		$user = $this->db->query('SELECT * FROM USER WHERE posisi NOT LIKE "Administrator"');
		return $user;
	}

//mengambil data user berdasarkan kode id
	function get_iduser($id_user){
		$this->db->select('*');
		$this->db->where('id_user',$id_user);
		$this->db->from('user');
		return $this->db->get();
	}

//melakukan update/edit data user
	function edit_user($id_user,$data){
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
	}

//menghapus data user
	function del_user($id_user){
		$this->db->where('id_user',$id_user);
		$this->db->delete('user');
	}

//melakukan tambah data
	function insert_user($data){
		return $this->db->insert('user',$data);
	}
}