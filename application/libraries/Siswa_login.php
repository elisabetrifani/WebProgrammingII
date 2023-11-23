<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_siswaauth');
    }

    public function login($nis, $password)
    {
        $cek = $this->ci->m_siswaauth->siswa_login($nis, $password);
        if ($cek){
            $nama_siswa = $cek->nama_siswa;
            $nis_siswa = $cek->nis_siswa;
            $id_siswa = $cek->id_siswa;

            // membuat session
            $this->ci->session->set_userdata('id_siswa', $id_siswa);
            $this->ci->session->set_userdata('nama_siswa', $nama_siswa);
            $this->ci->session->set_userdata('nis_siswa', $nis_siswa);
            redirect('siswa');
        } else {
            $this->ci->session->set_flashdata('error', 'NIS Atau Password Salah');
            redirect('siswaauth/siswa_login'); 
        }
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('nis_siswa') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum Login');
            redirect('siswaauth/siswa_login'); 
        }
    }

    public function logout(){
        $this->ci->session->unset_userdata('id_siswa');
        $this->ci->session->unset_userdata('nama_siswa');
        $this->ci->session->unset_userdata('nis_siswa');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout !');
        redirect('siswaauth/siswa_login'); 
    }

}

/* End of file Siswa_login.php */
