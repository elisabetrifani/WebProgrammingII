<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_pengumuman extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengumuman');
        $this->db->order_by('id_pengumuman', 'desc');
        return $this->db->get()->result();
    }
    

    public function add($data)
    {
        $this->db->insert('tbl_pengumuman', $data);
    }

    public function update($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->update('tbl_pengumuman', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->delete('tbl_pengumuman', $data);
    }
}


/* End of file M_Pengumuman.php */
