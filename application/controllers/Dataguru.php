<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dataguru');
        $this->load->model('m_mapel');
    }
    public function index()
    {
        $data = array(
            'title' => 'Data Siswa',
            'dataguru' => $this->m_dataguru->getGuruByLoggedID(),
            'content' => 'guru/v_dataguru'
        );

        $this->load->view('guru/layout/wrapper', $data);
    }
}


/* End of file Dataguru.php */
