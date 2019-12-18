<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	public function getlogin($u,$p)
	{
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('login');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array('username' =>$row->username,'posisi' =>$row->posisi,);
				$this->session->set_userdata($sess);
				redirect('admin');
	
			}
		}
		else
		{
			$this->session->set_flashdata('info','Username dan Password Salah');
			redirect('login');
		}
	}
}