<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function Index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'content' => 'admin/v_home'
        );

        $this->load->view('admin/layout/wrapper', $data);
    }
}


/* End of file Admin.php */
