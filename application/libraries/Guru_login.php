<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_guruauth');
    }

    public function login($nip, $password)
    {
        $cek = $this->ci->m_guruauth->guru_login($nip, $password);
        if ($cek){
            $nama_guru = $cek->nama_guru;
            $nip_guru = $cek->nip_guru;
            $id_guru = $cek->id_guru;

            // membuat session
            $this->ci->session->set_userdata('nama_guru', $nama_guru);
            $this->ci->session->set_userdata('nip_guru', $nip_guru);
            $this->ci->session->set_userdata('id_guru', $id_guru);
            redirect('guru');
        } else {
            $this->ci->session->set_flashdata('error', 'NIP Atau Password Salah');
            redirect('guruauth/guru_login'); 
        }
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('nip_guru') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum Login');
            redirect('guruauth/guru_login'); 
        }
    }

    public function logout(){
        $this->ci->session->unset_userdata('nama_guru');
        $this->ci->session->unset_userdata('nip_guru');
        $this->ci->session->unset_userdata('id_guru');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout !');
        redirect('guruauth/guru_login'); 
    }

}

/* End of file Guru_login.php */
