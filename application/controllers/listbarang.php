<?php 
// if (!defined('BASEPATH')) exit('AccessDenied');
defined('BASEPATH') OR exit('No direct script access allowed');

class listbarang extends CI_Controller {
	function __construct(){
		parent::__construct();	
		//chek_session();
	
		$this->load->model('m_listbarang');
	}

	//------------------- coding untuk menu barang -------------------//
	//menampilkan data barang di halaman list_barang
	public function index()
	{
		//buat simpan data dari model
		$data['barang']=$this->m_listbarang->get_barang()->result();
		$this->template->load('index','listbarang/list_barangaja',$data);
	}
}