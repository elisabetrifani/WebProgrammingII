<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class m_getpengumuman extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengumuman');
        $this->db->order_by('id_pengumuman', 'desc');
        return $this->db->get()->result();
    }
}


/* End of file m_getpengumuman.php */
