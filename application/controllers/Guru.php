<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function Index()
    {
        $data = array(
            'title' => 'Halaman guru',
            'content' => 'guru/v_home'
        );

        $this->load->view('guru/layout/wrapper', $data);
    }
}


/* End of file Guru.php */
