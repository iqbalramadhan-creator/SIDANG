<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct(){
		parent::__construct();		
		// chek_session();
				$this->cek_login->cek();
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
