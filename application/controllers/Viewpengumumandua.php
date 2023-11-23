<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Viewpengumumandua extends CI_Controller
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
            'content' => 'guru/v_pengumuman'
        );

        $this->load->view('guru/layout/wrapper', $data, false);
    }
}