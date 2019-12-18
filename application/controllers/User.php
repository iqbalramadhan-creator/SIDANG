<?php 
// if (!defined('BASEPATH')) exit('AccessDenied');
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();	
		// chek_session();

		$this->load->model('m_user');
	}

	//------------------- coding untuk menu user -------------------//
	//menampilkan data user di halaman list_user
	public function index()
	{
		//buat simpan data dari model
		if ($this->session->userdata('posisi')=="Administrator") {
			$data['user']=$this->m_user->get_user()->result();
			$this->template->load('index','user/list_user',$data); 
		}

		else {
			$this->load->view('error');
		}
	}


	//menampilkan detail data user sesuai data di database
	public function detailuser(){
		if ($this->session->userdata('posisi')=="Administrator") {
			$id_user= $this->uri->segment(3);
			$data['datauser']=$this->m_user->get_iduser($id_user)->result();
			$this->template->load('index','user/list_user',$data); 
		}

		else {
			$this->load->view('error');
		}
	}

	//melakukan edit data user
	public function edituser()
	{
		//coding proses
		if ($this->session->userdata('posisi')=="Administrator") {
			if(isset($_POST['edit'])) {
				$id_user = $this->input->post('id_user');
				$username = $this->input->post('username');
				$namalengkap = $this->input->post('namalengkap');
				$password = $this->input->post('password');
				$posisiuser = $this->input->post('posisiuser');
				$teleponuser = $this->input->post('teleponuser');

				//nama di dalam array adalah nama yang ada di database
				$data = array(
					'id_user' => $id_user,
					'username' => $username,
					'nama_lengkap' => $namalengkap,
					'password' => $password,
					'posisi' => $posisiuser,
					'tlp' => $teleponuser
					);
				$this->m_user->edit_user($id_user,$data);
				redirect('user');
			}
			else {
				$id_user= $this->uri->segment(3);
				$data['datauser']=$this->m_user->get_iduser($id_user)->result();
				$this->template->load('index','user/v_edit_user',$data);
			}
			}
		else {
			$this->load->view('error');
		}
	}

	//hapus data user
	public function hapususer(){
		if ($this->session->userdata('posisi')=="Administrator") {
			$id_user= $this->uri->segment(3);
			$this->m_user->del_user($id_user);
			redirect('user'); 
		}
		else {
			$this->load->view('error');
		}
	}

	//menampilkan form tambah data user di halaman v_tambah_user
	public function tambahuser()
	{
		if ($this->session->userdata('posisi')=="Administrator") {
			$id_user=$this->input->post('nuser');
			$data['tambahuser']=$this->m_user->get_iduser($id_user)->result();
			$this->template->load('index','user/v_tambah_user',$data);
		}
		else {
			$this->load->view('error');
		}
	}
	
	//proses tambah data user
	public function tambah_user()
	{
		//nama pada proses diatas merupakan nama untuk menampung dari view
		//pada bagian post nama harus sama dengan yang ada di view
		if ($this->session->userdata('posisi')=="Administrator") {
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$namalengkap = $this->input->post('namalengkap');
		$password = $this->input->post('password');
		$posisiuser = $this->input->post('posisiuser');
		$teleponuser = $this->input->post('teleponuser');

		$cek=$this->db->where('id_user',$id_user)->get('user')->result();
		foreach ($cek as $ck) {
			$kd=$ck->id_user;
		}
		if (isset($kd)) {
			$this->session->set_flashdata('gagal','DUPLIKAT KODE. Maaf kode sudah ada, silahkan masukkan kode lain.');
			redirect('user/tambahuser');
		}

		//nama di dalam array adalah nama yang ada di database
		$data = array(
				'id_user' => $id_user,
				'username' => $username,
				'nama_lengkap' => $namalengkap,
				'password' => $password,
				'posisi' => $posisiuser,
				'tlp' => $teleponuser
				);
		$this->m_user->insert_user($data);
		redirect('user');
		}
	
	else {
			$this->load->view('error');
		}
}
}