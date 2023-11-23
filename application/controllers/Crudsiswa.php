<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Crudsiswa extends CI_Controller
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
            'title' => 'Siswa',
            'datasiswa' => $this->m_datasiswa->get_all_data(),
            'content' => 'admin/crudsiswa/v_datasiswa',
        );

        $this->load->view('admin/layout/wrapper', $data, false);
    }

    public function add()
    {
        $this->form_validation->set_rules(
            'nis_siswa',
            'NIS',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'nisn_siswa',
            'NISN',
            'required',
            array('required' => '%s Harus Di Isi')
        );

        $this->form_validation->set_rules(
            'nama_siswa',
            'Nama Siswa',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'id_kelas',
            'Kelas',
            'required',
            array('required' => '%s Harus Di Isi !')
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
            'agama',
            'Agama',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'anak_ke',
            'Anak Ke',
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
            'no_telp',
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
            'asal_sekolah',
            'Asal Sekolah',
            'required',
            array('required' => '%s Harus Di Isi !')
        );


        $this->form_validation->set_rules(
            'no_ijazah',
            'Nomor Ijazah',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'thn_masuk',
            'Tahun Masuk',
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
                    'nis_siswa' => $this->input->post('nis_siswa'),
                    'nisn_siswa' => $this->input->post('nisn_siswa'),
                    'nama_siswa' => strtoupper($this->input->post('nama_siswa')),
                    'id_kelas' => $this->input->post('id_kelas'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'alamat' => $this->input->post('alamat'),
                    'no_telp' => $this->input->post('no_telp'),
                    'email' => $this->input->post('email'),
                    'asal_sekolah' => strtoupper($this->input->post('asal_sekolah')),
                    'no_ijazah' => $this->input->post('no_ijazah'),
                    'thn_masuk' => $this->input->post('thn_masuk'),
                    'password' => md5($this->input->post('password')),
                );
                $this->m_datasiswa->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil DI Tambahkan !');
                redirect('crudsiswa');
            
        }
        $data = array(
            'title' => 'Add Siswa',
            'kelas' => $this->m_kelas->get_all_data(),
            'content' => 'admin/crudsiswa/v_add',
        );

        $this->load->view('admin/layout/wrapper', $data, false);
    }

    public function update($id_siswa = NULL)
    {
        $this->form_validation->set_rules(
            'nis_siswa',
            'NIS',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'nisn_siswa',
            'NISN',
            'required',
            array('required' => '%s Harus Di Isi')
        );

        $this->form_validation->set_rules(
            'nama_siswa',
            'Nama Siswa',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'id_kelas',
            'Kelas',
            'required',
            array('required' => '%s Harus Di Isi !')
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
            'agama',
            'Agama',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'anak_ke',
            'Anak Ke',
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
            'no_telp',
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
            'asal_sekolah',
            'Asal Sekolah',
            'required',
            array('required' => '%s Harus Di Isi !')
        );


        $this->form_validation->set_rules(
            'no_ijazah',
            'Nomor Ijazah',
            'required',
            array('required' => '%s Harus Di Isi !')
        );

        $this->form_validation->set_rules(
            'thn_masuk',
            'Tahun Masuk',
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
                    'id_siswa' => $id_siswa,
                    'nis_siswa' => $this->input->post('nis_siswa'),
                    'nisn_siswa' => $this->input->post('nisn_siswa'),
                    'nama_siswa' => strtoupper($this->input->post('nama_siswa')),
                    'id_kelas' => $this->input->post('id_kelas'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'alamat' => $this->input->post('alamat'),
                    'no_telp' => $this->input->post('no_telp'),
                    'email' => $this->input->post('email'),
                    'asal_sekolah' => strtoupper($this->input->post('asal_sekolah')),
                    'no_ijazah' => $this->input->post('no_ijazah'),
                    'thn_masuk' => $this->input->post('thn_masuk'),
                    'password' => md5($this->input->post('password')),
                );
                $this->m_datasiswa->update($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil DI Update !');
                redirect('crudsiswa');
            
        }
        $data = array(
            'title' => 'Update Siswa',
            'kelas' => $this->m_kelas->get_all_data(),
            'datasiswa' => $this->m_datasiswa->get_data($id_siswa),
            'content' => 'admin/crudsiswa/v_update',
        );

        $this->load->view('admin/layout/wrapper', $data, false);
    }

    //Delete one item
    public function delete($id_siswa = NULL)
    {
        $datasiswa = $this->m_datasiswa->get_data($id_siswa);
        $data = array('id_siswa' => $id_siswa);
        $this->m_datasiswa->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !');
        redirect('crudsiswa');
    }
}


/* End of file Products.php */
