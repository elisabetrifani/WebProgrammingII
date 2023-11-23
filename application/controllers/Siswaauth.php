<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Siswaauth extends CI_Controller
{
    public function siswa_login()
    {
        $this->load->library('form_validation');
        $this->load->model('m_siswaauth');

        $this->set_validation_rules();

        if ($this->form_validation->run()) {
            $this->process_login();
        }

        $data = array(
            'title' => 'Login Siswa',
        );

        $this->load->view('siswa/v_siswa_login', $data, false);
    }

    public function siswa_logout()
    {
        $this->load->model('m_siswaauth');
        $this->siswa_login->logout();
    }

    private function set_validation_rules()
    {
        $validation_rules = array(
            array(
                'field' => 'nis_siswa',
                'label' => 'NIS',
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
        $nis = $this->input->post('nis_siswa');
        $password = md5($this->input->post('password'));
        $this->siswa_login->login($nis, $password);
    }
}

/* End of file siswaauth.php */
