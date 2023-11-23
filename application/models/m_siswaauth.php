<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswaauth extends CI_Model 
{
    public function siswa_login($nis, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->where(array(
            'nis_siswa' => $nis, 
            'password' => $password
        ));
        return $this->db->get()->row();
        
    }
}

/* End of file M_siswaauth.php */