<?php
function chek_session()
{
	$CI= & get_instance();
	echo print_r($CI->session->userdata());
   /* $CI= & get_instance();
    $session=$CI->session->userdata('status');
    if(isset($session))
    {
        redirect('auth');
    } else {
    	redirect('login');
    }
*/
}