<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_kelas');
        $this->db->order_by('id_kelas', 'asc');
        return $this->db->get()->result();
    }
}

/* End of file M_kelas.php */
