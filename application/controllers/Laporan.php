<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

function __construct(){
		parent::__construct();		
		$this->cek_login->cek();

        $this->load->model('m_laporan');
	}
	
    //------------------- coding untuk menu print -------------------//
    //menampilkan data-data yang akan di print
	public function index()
	{
		$this->template->load('index','cetak');
	}

    
    //untuk memanggil form/laman pilih tahun
    public function formcetakbarangkeluar()
    {
        $data['tahun']=$this->m_laporan->gettahun()->result();
        $this->template->load('index','cetak/cetak_barangkeluar',$data);
    }

    //proses menampilkan data gedung
    public function cetak_barangkeluar()
    {
        $tahun=$this->input->post('tahun');
        $tanggalan = explode("-", $tahun);
        $data['tahun_2']=$this->m_laporan->gettahun()->result();
        $data['laporan']=$this->m_laporan->cetakbarangkeluar($tanggalan[0], $tanggalan[1])->result();
        $data['tahun']=$tahun;
        $this->template->load('index','barangkeluar/cetak_barangkeluar',$data);
    }

    //untuk memanggil tampilan cetak
    public function cetakbarangkeluar()
    {
        //$bulan=$this->input->post('tgl_masuk');
        $tahun=$this->input->post('tgl_masuk');
        $tanggalan = explode("-", $tahun);
        $data['databarangkeluar']=$this->m_laporan->cetakbarangkeluar($tanggalan[0], $tanggalan[1])->result();
        $data['tahun']=$tahun;
        $this->load->view('cetakbarangkeluar',$data);
    }

    //untuk memanggil form/laman pilih tahun
    public function formcetakbarang()
    {
        $data['tahun']=$this->m_laporan->gettahun()->result();
        $this->template->load('index','cetak/cetak_barang',$data);
    }

    //proses menampilkan data barang
    public function cetak_barang()
    {
        $tahun=$this->input->post('tahun');
        $tanggalan = explode("-", $tahun);
        $data['tahun_2']=$this->m_laporan->gettahun()->result();
        $data['laporan']=$this->m_laporan->cetakbarang($tanggalan[0], $tanggalan[1])->result();
        $data['tahun']=$tahun;
        $this->template->load('index','barang/cetak_barang',$data);
    }

    //untuk memanggil tampilan cetak
    public function cetakbarang()
    {
        //$bulan=$this->input->post('tgl_mulai');
        $tahun=$this->input->post('tgl_mulai');
        $tanggalan = explode("-", $tahun);
        $data['databarang']=$this->m_laporan->cetakbarang($tanggalan[0], $tanggalan[1])->result();
        $data['tahun']=$tahun;
        $this->load->view('cetakbarang',$data);
    }

}