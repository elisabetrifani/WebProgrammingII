<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Guruauth extends CI_Controller
{
    public function guru_login()
    {
        $this->load->library('form_validation');
        $this->load->model('m_guruauth');

        $this->set_validation_rules();

        if ($this->form_validation->run()) {
            $this->process_login();
        }

        $data = array(
            'title' => 'Login Guru',
        );

        $this->load->view('guru/v_guru_login', $data, false);
    }

    public function guru_logout()
    {
        $this->load->model('m_guruauth');
        $this->guru_login->logout();
    }

    private function set_validation_rules()
    {
        $validation_rules = array(
            array(
                'field' => 'nip_guru',
                'label' => 'NIP',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s Harus Di isi !'
                )
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s Harus Di isi !'
                )
            )
        );
        $this->form_validation->set_rules($validation_rules);
    }

    private function process_login()
    {
        $nip = $this->input->post('nip_guru');
        $password = md5($this->input->post('password'));
        $this->guru_login->login($nip, $password);
    }
}

/* End of file siswaauth.php */
