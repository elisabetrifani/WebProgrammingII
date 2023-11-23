<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_datasiswa extends CI_Model {
    public function getSiswaByLoggedID() {
        $loggedID = $this->session->userdata('id_siswa');
    
        $this->db->select('tbl_siswa.*, tbl_kelas.kelas');
        $this->db->where('id_siswa', $loggedID);
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left');
        $query = $this->db->get('tbl_siswa');
    
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left');
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_siswa', $data);
    }

    public function update($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update('tbl_siswa', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->delete('tbl_siswa`', $data);
    }
}



/* End of file m_datasiswa.php */
