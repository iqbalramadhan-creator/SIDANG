<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cek_login {
    public function cek(){
    	$this->ci =& get_instance();
    	$session_cek = $this->ci->session->userdata('isLogin');
    	if ($session_cek!= True) {
    		redirect('auth');
    	}
    }		
}
