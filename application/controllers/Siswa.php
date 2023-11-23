<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function Index()
    {
        $data = array(
            'title' => 'Halaman Siswa',
            'content' => 'siswa/v_home'
        );

        $this->load->view('siswa/layout/wrapper', $data);
    }
}


/* End of file Siswa.php */
