<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {

function login($data)
    {
      $query = $this->db->get_where('user', $data);
		return $query;
    }
}
?>