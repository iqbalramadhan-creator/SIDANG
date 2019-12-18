 <?php 
// if (!defined('BASEPATH')) exit('AccessDenied');
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangkeluar extends CI_Controller {
	function __construct(){
		parent::__construct();	
		//chek_session();
	
		$this->load->model('m_barangkeluar');
	}

	//------------------- coding untuk menu barangkeluar -------------------//
	//menampilkan data barang keluar di halaman list_barangkeluar
	public function index()
	{
		//buat simpan data dari model
		$data['databarangkeluar']=$this->m_barangkeluar->get_barangkeluar()->result();
		$this->template->load('index','barangkeluar/list_barangkeluar',$data);
	}

	//menampilkan detail data barang keluar sesuai data di database
	public function detailbarangkeluar(){
		$kode_barang= $this->uri->segment(3);
		$data['databarangkeluar']=$this->m_barangkeluar->get_kodebarangkeluar($kode_barang)->result();
		$this->template->load('index','barangkeluar/v_detail_barangkeluar',$data);
	}

	//melakukan edit data barang keluar
	public function editbarangkeluar()
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
			$harga = $this->input->post('harga');
			$keterangan = $this->input->post('keterangan');

			//nama di dalam array adalah nama yang ada di database
			$data = array(
				'kode_barang' => $kode_barang,
				'kodebarang' => $kodebarang,
				'jenis_barang' => $jenisbarang,
				'qty' => $qty,
				'satuan' => $satuan,
				'keterangan' => $keterangan,
				'tgl_input'=>date('Y-m-d')
				);
			$this->m_barangkeluar->editbarangkeluar($kode_barang,$data);
			redirect('barangkeluar');
		}
		else {
			$kode_barang= $this->uri->segment(3);
			$data['databarangkeluar']=$this->m_barangkeluar->get_kodebarangkeluar($kode_barang)->result();
			$this->template->load('index','barangkeluar/v_edit_barangkeluar',$data);
		}
	}
	else {
			$this->load->view('error');
		}
	}

	//hapus data barang keluar
	 public function hapusbarangkeluar(){
	 	if ($this->session->userdata('posisi')=="Administrator"  || $this->session->userdata('posisi')=="Operator") {
	 		$kode_barang= $this->uri->segment(3);
	 		$this->m_barangkeluar->del_barangkeluar($kode_barang);
	 		redirect('barangkeluar');
	 	}
	 	else {
	 		echo "Maaf Halaman Tidak Ditemukan";
	 		//$this->load->view('errors/html/error_404');
	 	}
	}


	public function kirim(){
		if ($this->session->userdata('posisi')=="Administrator" || $this->session->userdata('posisi')=="Operator") {
			//$kode_barang = $this->input->post('kode_barang');
			$kode_barang = $this->input->post('kode_barang');
			$kodebarang = $this->input->post('kodebarang');
			$jenisbarang = $this->input->post('jenis_barang');
			$qty = $this->input->post('qty');
			$satuan = $this->input->post('satuan');
			$keterangan = $this->input->post('keterangan');

			$data = array(
				//'kode_barang' => $kode_barang,
				'kode_barang' => $kode_barang,
				'kodebarang' => $kodebarang,
				'jenis_barang' => $jenisbarang,
				'qty' => $qty,
				'satuan' => $satuan,
				'keterangan' => $keterangan,
				'tgl_input'=>date('Y-m-d')
				);
			$temp = $this->m_barangkeluar->get_qty($kodebarang);
			foreach ($temp->result() as $pakai) {
				//Pemilihan penggunaan kolum sisa atau kuantiti awal
				if ($pakai->qty_akhir == 0) {
					$qtyakhir = $pakai->qty - $qty;
				} else {
					$qtyakhir = $pakai->qty_akhir - $qty;
				}
				$id = $pakai->kode_barang;
			}
			//Alert jika pemakaian lebih dari sisa
			if ($qtyakhir < 0) {
				$uri = 'http://localhost/sintaris/index.php/barang/pakaibarang/'.$id;
				echo "<script>alert('Pemakaian melebihi sisa barang.');
						window.location = '$uri';
					  </script>";
			}
			else {
				$this->m_barangkeluar->input_data($data,'barang_keluar');
				$this->m_barangkeluar->update($kodebarang, $qtyakhir);
				redirect('barangkeluar');
			}
		} else {
			$this->load->view('error');
		}
	}

}