<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

function __construct(){
		parent::__construct();		
		$this->cek_login->cek();
	}
	
	public function index()
	{

		$this->template->load('index','home');
		// echo "string";
	}
}
