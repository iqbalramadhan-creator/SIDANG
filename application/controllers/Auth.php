<?php 

class Auth extends CI_controller{

    function __construct(){
        parent::__construct();
        //$this->load->library('session');      
        
    }

        public function index(){
            if ($this->session->userdata('isLogin')==TRUE) {
                redirect('admin');
            }else{

            $this->load->view('login');
            }

        }

        public function login(){
             $data = array('username' => $this->input->post('username'),
                        'password' => $this->input->post('password')
            );


             // print_r($data);
        $this->load->model('m_admin'); // load model_user
        $hasil = $this->m_admin->login($data);
        if ($hasil->num_rows() == 1) {

            foreach ($hasil->result() as $sess) {
                # code...
                $se = array(
                    'isLogin' => TRUE,
                    'status' => 'test',
                    'username' => $sess->username,
                    'posisi' => $sess->posisi );
            }

            $this->session->set_userdata($se);
            redirect('admin');
                    // print_r($this->session->userdata('username'));
        }
        else {

            echo "<script>alert('Nama Pengguna & Password anda salah!');history.go(-1);</script>";
        }
              // print_r($this->session->userdata('username'));
        }


        public function logout(){
            $this->session->sess_destroy();
            // $this->load->view('admin/login');
            redirect('auth','refresh');

        }
}