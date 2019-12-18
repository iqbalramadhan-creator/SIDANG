<?php 
// if (!defined('BASEPATH')) exit('AccessDenied');
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
		parent::__construct();	
		//chek_session();
	
		$this->load->model('m_barang');
	}

	//------------------- coding untuk menu barang -------------------//
	//menampilkan data barang di halaman list_barang
	public function index()
	{
		//buat simpan data dari model
		$data['barang']=$this->m_barang->get_barang()->result();
		$this->template->load('index','barang/list_barang',$data);
	}

	//menampilkan detail data barang sesuai data di database
	public function detailbarang(){
		$kode_barang= $this->uri->segment(3);
		$data['databarang']=$this->m_barang->get_kodebarang($kode_barang)->result();
		$this->template->load('index','barang/v_detail_barang',$data);
	}

	//melakukan edit data barang
	public function editbarang()
	{
		//coding proses
	if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
		if(isset($_POST['edit'])) {
			$kode_barang = $this->input->post('kode_barang');
			$kodebarang = $this->input->post('kodebarang');
			$jenisbarang = $this->input->post('jenisbarang');
			$qty = $this->input->post('qty');
			$satuan = $this->input->post('satuan');
			$tgl_input = $this->input->post('tgl_input');
			$tahunbelibarang = $this->input->post('tahunbelibarang');
			$keterangan = $this->input->post('keterangan');

			//nama di dalam array adalah nama yang ada di database
			$data = array(
				'kode_barang' => $kode_barang,
				'kodebarang' => $kodebarang,
				'jenis_barang' => $jenisbarang,
				'qty' => $qty,
				'th_beli' => $tahunbelibarang,
				'satuan' => $satuan,
				'keterangan' => $keterangan,
				'tgl_input'=>date('Y-m-d')
				);
			$this->m_barang->edit_barang($kode_barang,$data);
			redirect('barang');
		}
		else {
			$kode_barang= $this->uri->segment(3);
			$data['databarang']=$this->m_barang->get_kodebarang($kode_barang)->result();
			$this->template->load('index','barang/v_edit_barang',$data);
		}
	}
	else {
			$this->load->view('error');
		}
	}

	// //hapus data barang
	public function hapusbarang(){
	 	if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
	 		$kode_barang= $this->uri->segment(3);
	 		$this->m_barang->del_barang($kode_barang);
	 		redirect('barang');
	 	}
	 	else {
	 		echo "Maaf Halaman Tidak Ditemukan";
	 		//$this->load->view('errors/html/error_404');
	 	}
	 }

	 //fungsi simpan barang pakai
	 /*public function simpan()
	{
		$this->load->model('m_barang');
		$id = $this->uri->segment('3');
		$this->m_barang->getbarang();
		$this->db->select("*");
  		$this->db->from('barang_tersimpan');
		$data['query'] = $this->db->get()->result();
		$this->template->load('index','gedung/list_gedung',$data);
	}*/
	 //fungsi menampilkan form pakai
	public function pakaibarang()
		{
			if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
				$kode_barang=$this->input->post('nbarang');
				$id = $this->uri->segment('3');
				$data['tambahbarang']=$this->m_barang->get_kodepakai($id)->result();
				$this->template->load('index','barang/v_pakai_barang',$data);
			}
			else {
				$this->load->view('error');
			}
		}

	//menampilkan data kodebarang
	public function pilihkode() 
    {
    	if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
    			/*$kode_barang = $this->input->post('kode_barang');
    			$kodebarang = $this->input->post('kodebarang');

    			$data = array(
    				'kode_barang' => $kode_barang,
    				'kodebarang' => $kodebarang
    			);

			    $this->m_barang->get_kode($data);
				redirect('barang');*/
				$id = $this->uri->segment('3');
				$data['kib_barang'] = $this->m_barang->get_kodepakai($id);
				//$this->m_barang->insert_barang($data);
				//redirect('barang');
				$this->template->load('index','barang/v_pakai_barang',$data);
    		}else{
  				$this->load->view('error');
    		}
    		
	}

	public function tambahbarang()
	{
		if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
			$kode_barang=$this->input->post('nbarang');
			$data['tambahbarang']=$this->m_barang->get_kodebarang($kode_barang)->result();
			$this->template->load('index','barang/v_tambah_barang',$data);
		}
		else {
			$this->load->view('error');
		}
	}
	//proses tambah data barang
	public function tambah_barang()
	{
		//nama pada proses diatas merupakan nama untuk menampung dari view
		//pada bagian post nama harus sama dengan yang ada di view
		if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
			//$kode_barang = $this->input->post('kode_barang');
			$kode_barang = $this->input->post('kode_barang');
			$kodebarang = $this->input->post('kodebarang');
			$jenisbarang = $this->input->post('jenisbarang');
			$qty = $this->input->post('qty');
			$satuan = $this->input->post('satuan');
			$tgl_input = $this->input->post('tgl_input');
			$tahunbelibarang = $this->input->post('tahunbelibarang');
			$keterangan = $this->input->post('keterangan');

		// $cek=$this->db->where('kode_barang',$kode_barang)->get('kib_barang')->result();
		// foreach ($cek as $ck) {
		// 	$kd=$ck->kode_barang;
		// }
		// if (isset($kd)) {
		// 	$this->session->set_flashdata('gagal','DUPLIKAT KODE. Maaf kode sudah ada, silahkan masukkan kode lain.');
		// 	redirect('barang/tambahbarang');
		// }

		//nama di dalam array adalah nama yang ada di database
		$data = array(
				//'kode_barang' => $kode_barang,
				'kode_barang' => $kode_barang,
				'kodebarang' => $kodebarang,
				'jenis_barang' => $jenisbarang,
				'qty' => $qty,
				'th_beli' => $tahunbelibarang,
				'satuan' => $satuan,
				'keterangan' => $keterangan,
				'tgl_input'=>date('Y-m-d')
				);
		$this->m_barang->insert_barang($data);
		redirect('barang');
	}
	else {
			$this->load->view('error');
		}
	}

	
    // function cetak_html(){
    // 	$this->load->view('cetakbarang');
    // }
}