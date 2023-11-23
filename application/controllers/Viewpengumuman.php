<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Viewpengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_getpengumuman');
    }

    public function index()
    {
        $data = array(
            'title' => 'Pengumuman',
            'pengumuman' => $this->m_getpengumuman->get_all_data(),
            'content' => 'siswa/v_pengumuman'
        );

        $this->load->view('siswa/layout/wrapper', $data, false);
    }
}