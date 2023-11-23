<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Addpengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengumuman');
    }

    public function index()
    {
        $data = array(
            'title' => 'Pengumuman',
            'pengumuman' => $this->m_pengumuman->get_all_data(),
            'content' => 'admin/v_crudpengumuman'
        );

        $this->load->view('admin/layout/wrapper', $data, false);
    }

    //Add new item
    public function add()
    {
        $data = array(
            'perihal' => $this->input->post('perihal'),
            'deskripsi' => $this->input->post('deskripsi'),
        );

            $this->m_pengumuman->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !');
            redirect('addpengumuman');
    }

    //Update an item
    public function update($id_pengumuman = NULL)
    {
        $data = array(
            'id_pengumuman' => $id_pengumuman,
            'perihal' => $this->input->post('perihal'),
            'deskripsi' => $this->input->post('deskripsi'),

        );
        $this->m_pengumuman->update($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Update !');
        redirect('addpengumuman');
    }

    //Delete an items
    public function delete($id_pengumuman = null)
    {
        $data = array('id_pengumuman' => $id_pengumuman);
        $this->m_pengumuman->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !');
        redirect('addpengumuman');
    }
}


/* End of file Admins.php */
