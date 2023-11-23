<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Datasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datasiswa');
        $this->load->model('m_kelas');
    }
    public function index()
    {
        $data = array(
            'title' => 'Data Siswa',
            'datasiswa' => $this->m_datasiswa->getSiswaByLoggedID(),
            'content' => 'siswa/v_datasiswa'
        );

        $this->load->view('siswa/layout/wrapper', $data);
    }
}


/* End of file Datasiswa.php */
