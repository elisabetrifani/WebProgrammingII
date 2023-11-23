<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Crudguru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mapel');
        $this->load->model('m_dataguru');
    }

    public function index()
    {
        $data = array(
            'title' => 'Guru',
            'dataguru' => $this->m_dataguru->get_all_data(),
            'content' => 'admin/crudguru/v_dataguru',
        );

        $this->load->view('admin/layout/wrapper', $data, false);
    }

    public function add()
    {
        $this->form_validation->set_rules(
            'nip_guru',
            'NIP',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'nama_guru',
            'Nama Guru',
            'required',
            array('required' => '%s Harus Di Isi')
        );

        $this->form_validation->set_rules(
            'tempat_lahir',
            'Tempat Lahir',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'tgl_lahir',
            'Tanggal Lahir',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenis Kelamin',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat Rumah',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'no_hp',
            'Nomor Telepon',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'usia',
            'Usia',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'id_mapel',
            'Mapel',
            'required',
            array('required' => '%s Harus Di Isi !')
        );


        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        if ($this->form_validation->run() == True) {
                $data = array(
                    'nip_guru' => $this->input->post('nip_guru'),
                    'nama_guru' => strtoupper($this->input->post('nama_guru')),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat' => $this->input->post('alamat'),
                    'no_hp' => $this->input->post('no_hp'),
                    'email' => $this->input->post('email'),
                    'usia' => $this->input->post('usia'),
                    'id_mapel' => $this->input->post('id_mapel'),
                    'password' => md5($this->input->post('password')),
                );
                $this->m_dataguru->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil DI Tambahkan !');
                redirect('crudguru');
            
        }
        $data = array(
            'title' => 'Add Siswa',
            'mapel' => $this->m_mapel->get_all_data(),
            'content' => 'admin/crudguru/v_add',
        );

        $this->load->view('admin/layout/wrapper', $data, false);
    }

    public function update($id_guru = NULL)
    {
        $this->form_validation->set_rules(
            'nip_guru',
            'NIP',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'nama_guru',
            'Nama Guru',
            'required',
            array('required' => '%s Harus Di Isi')
        );

        $this->form_validation->set_rules(
            'tempat_lahir',
            'Tempat Lahir',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'tgl_lahir',
            'Tanggal Lahir',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenis Kelamin',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat Rumah',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'no_hp',
            'Nomor Telepon',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'usia',
            'Usia',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'id_mapel',
            'Mapel',
            'required',
            array('required' => '%s Harus Di Isi !')
        );


        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        if ($this->form_validation->run() == True) {
                $data = array(
                    'id_guru' => $id_guru,
                    'nip_guru' => $this->input->post('nip_guru'),
                    'nama_guru' => strtoupper($this->input->post('nama_guru')),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat' => $this->input->post('alamat'),
                    'no_hp' => $this->input->post('no_hp'),
                    'email' => $this->input->post('email'),
                    'usia' => $this->input->post('usia'),
                    'id_mapel' => $this->input->post('id_mapel'),
                    'password' => md5($this->input->post('password')),
                );
                $this->m_dataguru->update($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil DI Update !');
                redirect('crudguru');
            
        }
        $data = array(
            'title' => 'Update Guru',
            'mapel' => $this->m_mapel->get_all_data(),
            'dataguru' => $this->m_dataguru->get_data($id_guru),
            'content' => 'admin/crudguru/v_update',
        );

        $this->load->view('admin/layout/wrapper', $data, false);
    }

    //Delete one item
    public function delete($id_guru = NULL)
    {
        $guru = $this->m_dataguru->get_data($id_guru);
        $data = array('id_guru' => $id_guru);
        $this->m_dataguru->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !');
        redirect('crudguru');
    }
}


/* End of file Products.php */
