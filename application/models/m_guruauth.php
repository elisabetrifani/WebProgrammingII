<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_guruauth extends CI_Model 
{
    public function guru_login($nip, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->where(array(
            'nip_guru' => $nip, 
            'password' => $password
        ));
        return $this->db->get()->row();
        
    }
}

/* End of file M_guruauth.php */