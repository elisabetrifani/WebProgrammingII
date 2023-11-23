<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_dataguru extends CI_Model
{
    public function getGuruByLoggedID()
    {
        $loggedID = $this->session->userdata('id_guru');
    
        $this->db->select('tbl_guru.*, tbl_mapel.nama_mapel');
        $this->db->where('id_guru', $loggedID);
        $this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel', 'left');
        $query = $this->db->get('tbl_guru');
    
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel', 'left');
        $this->db->order_by('id_guru', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_guru)
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->join('tbl_mapel', 'tbl_mapel.id_mapel = tbl_guru.id_mapel', 'left');
        $this->db->order_by('id_guru', 'desc');
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_guru', $data);
    }

    public function update($data)
    {
        $this->db->where('id_guru', $data['id_guru']);
        $this->db->update('tbl_guru', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_guru', $data['id_guru']);
        $this->db->delete('tbl_siswa`', $data);
    }
}



/* End of file m_dataguru.php */
