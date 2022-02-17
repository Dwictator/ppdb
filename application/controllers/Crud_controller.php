<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class CRUD_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('CRUD_Model');
        $this->load->library('form_validation');
        $this->load->model('Upload_model');
    }

    // WILAYAH FUNCTION PENGGUNA

    function buat_pesan()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subyek = $this->input->post('subyek');
        $pesan = $this->input->post('pesan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'subyek' => $subyek,
            'pesan' => $pesan,
            'tanggal' => date("Y-m-d")
        );

        $this->CRUD_Model->create($data, 'tb_pertanyaan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengirim Pesan, Jawaban Akan Dikirim Ke Email Anda</div>');
        redirect('homepage/kontak');
    }

    // WILAYAH FUNCTION PENGGUNA

    function update_profil()
    {
        $this->form_validation->set_rules('password_1', 'Password', 'required|trim|min_length[6]|matches[password_2]', [
            'matches' => 'Konfirmasi password tidak sesuai',
            'min_length' => 'Panjang password minimal 6 karakter'
        ]);
        $this->form_validation->set_rules('password_2', 'Password ', 'required|trim|matches[password_1]');
        if ($this->form_validation->run() == false) {
            $id = $this->session->userdata('id');
            $data = array(
                'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
            );
            $data['title'] = 'Profil • Dashboard PPDB SMA Harapan Bangsa';
            $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
            $this->load->view('dashboard/pengguna/profil_pengguna', $data);
            $this->load->view('dashboard/pengguna/template/pengguna_footer');
        } else {
            $id = $this->session->userdata('id');
            $password = password_hash($this->input->post('password_1'), PASSWORD_DEFAULT);

            $data = array(
                'password' => $password
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'pengguna');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('pengguna/profil');
        }
    }

    function update_datadiri()
    {
        $this->form_validation->set_rules('namaijazah', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules(
            'nisn',
            'NISN',
            'required|integer|exact_length[10]|trim',
            [
                'exact_length' => 'NISN salah. NISN memiliki 10 digit nomer'
            ]
        );
        $this->form_validation->set_rules('alamatsiswa', 'Alamat Domisili Siswa', 'required|trim');
        $this->form_validation->set_rules('namasekolah', 'Nama Sekolah', 'required|trim');
        $this->form_validation->set_rules('alamatsekolah', 'Alamat Sekolah', 'required|trim');
        $this->form_validation->set_rules(
            'npsn',
            'NPSN',
            'required|integer|exact_length[8]|trim',
            [
                'exact_length' => 'NPSN salah. NISN memiliki 8 digit nomer'
            ]
        );
        if ($this->form_validation->run() == false) {
            $id = $this->session->userdata('id');
            $data = array(
                'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
                'siswa' => $this->CRUD_Model->read($id, 'tb_datadiri')
            );
            $data['title'] = 'Data Diri • Dashboard PPDB SMA Harapan Bangsa';
            $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
            $this->load->view('dashboard/pengguna/data_diri', $data);
            $this->load->view('dashboard/pengguna/template/pengguna_footer');
        } else {
            $id = $this->session->userdata('id');
            $namaijazah = $this->input->post('namaijazah');
            $tanggallahir = $this->input->post('tanggal');
            $nisn = $this->input->post('nisn');
            $alamatsiswa = $this->input->post('alamatsiswa');
            $namasekolah = $this->input->post('namasekolah');
            $alamatsekolah = $this->input->post('alamatsekolah');
            $npsn = $this->input->post('npsn');

            $data = array(
                'namaijazah' => $namaijazah,
                'tanggallahir' => $tanggallahir,
                'nisn' => $nisn,
                'alamatsiswa' => $alamatsiswa,
                'sekolah' => $namasekolah,
                'alamatsekolah' => $alamatsekolah,
                'npsn' => $npsn
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'tb_datadiri');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('pengguna/datadiri');
        }
    }

    function uploadgambarpasfoto()
    {
        $data['tb_datadiri'] = $this->db->get_where('tb_datadiri', ['id' => $this->session->userdata('id')])->row_array();
        $upload_image = $_FILES['gambar'];
        $id = $this->session->userdata('id');
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/uploads/pasfoto';

            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['tb_datadiri']['pasfoto'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/uploads/pasfoto/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->where("id", $id);
                $this->db->set('pasfoto', $new_image);
            } else {
                $this->session->set_flashdata('error_upload', $this->upload->display_errors());
                redirect('pengguna/datadiri', $this->upload->display_errors());
            }
        }
        $this->db->update('tb_datadiri');

        // $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
        redirect('pengguna/datadiri');
    }

    function update_orangtua()
    {
        $this->form_validation->set_rules(
            'namaayah',
            'Nama Ayah',
            'required|trim',
            [
                'required' => 'Form nama ayah harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'namaibu',
            'Nama Ibu',
            'required|trim',
            [
                'required' => 'Form nama ibu harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim',
            [
                'required' => 'Form alamat harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'pekerjaanayah',
            'Pekerjaan Ayah',
            'required|trim',
            [
                'required' => 'Form pekerjaan ayah harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'pekerjaanibu',
            'Tanggal Lahir',
            'required|trim',
            [
                'required' => 'Form pekerjaan ibu harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'penghasilan',
            'Tanggal Lahir',
            'required|integer|trim',
            [
                'required' => 'Form total penghasilan harus diisi',
                'integer' => 'Isi total penghasilan tanpa titik'
            ]
        );

        if ($this->form_validation->run() == false) {
            $id = $this->session->userdata('id');
            $data = array(
                'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
                'orangtua' => $this->CRUD_Model->read($id, 'tb_orangtua')
            );
            $data['title'] = 'Data Orangtua • Dashboard PPDB SMA Harapan Bangsa';
            $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
            $this->load->view('dashboard/pengguna/data_orangtua', $data);
            $this->load->view('dashboard/pengguna/template/pengguna_footer');
        } else {
            $id = $this->session->userdata('id');
            $namaayah = $this->input->post('namaayah');
            $namaibu = $this->input->post('namaibu');
            $alamat = $this->input->post('alamat');
            $pekerjaanayah = $this->input->post('pekerjaanayah');
            $pekerjaanibu = $this->input->post('pekerjaanibu');
            $penghasilan = $this->input->post('penghasilan');

            $data = array(
                'namaayah' => $namaayah,
                'namaibu' => $namaibu,
                'alamat' => $alamat,
                'pekerjaanayah' => $pekerjaanayah,
                'pekerjaanibu' => $pekerjaanibu,
                'penghasilan' => $penghasilan
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'tb_orangtua');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('pengguna/dataorangtua');
        }
    }

    function update_nilai()
    {
        $this->form_validation->set_rules(
            'nilai_bi',
            'Nilai bahasa Indonesia',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );
        $this->form_validation->set_rules(
            'nilai_ing',
            'Nilai bahasa Inggris',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );
        $this->form_validation->set_rules(
            'nilai_mtk',
            'Nilai matematika',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );
        $this->form_validation->set_rules(
            'nilai_ipa',
            'Nilai IPA',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );

        if ($this->form_validation->run() == false) {
            $id = $this->session->userdata('id');

            $data = array(
                'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
                'siswa' => $this->CRUD_Model->read($id, 'tb_nilai')
            );
            $data['title'] = 'Data Nilai • Dashboard PPDB SMA Harapan Bangsa';
            $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
            $this->load->view('dashboard/pengguna/data_nilai', $data);
            $this->load->view('dashboard/pengguna/template/pengguna_footer');
        } else {
            $id = $this->session->userdata('id');
            $indo = $this->input->post('nilai_bi');
            $ing = $this->input->post('nilai_ing');
            $mtk = $this->input->post('nilai_mtk');
            $ipa = $this->input->post('nilai_ipa');
            $jumlah = ($indo + $ing + $mtk + $ipa);

            $data = array(
                'indonesia' => $indo,
                'inggris' => $ing,
                'matematika' => $mtk,
                'ipa' => $ipa,
                'jumlahnilai' => $jumlah
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'tb_nilai');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('pengguna/datanilai');
        }
    }

    function uploadbuktinilai()
    {
        $data['tb_nilai'] = $this->db->get_where('tb_nilai', ['id' => $this->session->userdata('id')])->row_array();
        $upload_image = $_FILES['gambar'];
        $id = $this->session->userdata('id');
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/uploads/buktinilai';

            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['tb_nilai']['skhun'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/uploads/buktinilai/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->where("id", $id);
                $this->db->set('skhun', $new_image);
            } else {
                $this->session->set_flashdata('error_upload', $this->upload->display_errors());
                redirect('pengguna/datanilai', $this->upload->display_errors());
            }
        }
        $this->db->update('tb_nilai');
        $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
        redirect('pengguna/datanilai');
    }

    function uploadbuktiprestasi()
    {
        $data['tb_prestasi'] = $this->db->get_where('tb_prestasi', ['id' => $this->session->userdata('id')])->row_array();
        $upload_image = $_FILES['gambar'];
        $id = $this->session->userdata('id');
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/uploads/buktiprestasi';

            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->where("id", $id);
                $this->db->set('buktiprestasi', $new_image);
            } else {
                $this->session->set_flashdata('error_upload', $this->upload->display_errors());
                redirect('pengguna/dataprestasi', $this->upload->display_errors());
            }
        }
        // $this->db->update('tb_prestasi');

        $this->form_validation->set_rules('prestasi', 'Prestasi ', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis Prestasi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $id = $this->session->userdata('id');
            redirect('pengguna/dataprestasi');
        } else {
            $id = $this->session->userdata('id');
            $nama = $this->input->post('nama');
            $prestasi = $this->input->post('prestasi');
            $jenis = $this->input->post('jenis');

            $data = array(
                'id' => $id,
                'namalengkap' => $nama,
                'prestasi' => $prestasi,
                'jenisprestasi' => $jenis
            );

            $this->CRUD_Model->insertprestasi($data, 'tb_prestasi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Insert data prestasi</div>');
            redirect('pengguna/dataprestasi');
        }
    }


    /////////////////  WILAYAH FUNCTION ADMIN    ////////////////////

    function update_profil_admin()
    {
        //cara mengambil id setelah login
        $id = $this->session->userdata('id');

        $namalengkap = $this->input->post('namalengkap');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');

        $data = array(
            'nama' => $namalengkap,
            'email' => $email,
            'telepon' => $telepon
        );

        $where = array(
            'id' => $id
        );

        $this->CRUD_Model->update($where, $data, 'admin');
        $this->session->set_flashdata('message1', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
        redirect('admin/profil');
    }

    function uploadfotoadmin()
    {
        $data['admin'] = $this->db->get_where('admin', ['id' => $this->session->userdata('id')])->row_array();
        $upload_image = $_FILES['gambar'];
        $id = $this->session->userdata('id');
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/uploads/fotoadmin';

            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['admin']['foto'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/uploads/fotoadmin/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->where("id", $id);
                $this->db->set('foto', $new_image);
            } else {
                $this->session->set_flashdata('error_upload', $this->upload->display_errors());
                redirect('admin/profil', $this->upload->display_errors());
            }
        }
        $this->db->update('admin');
        redirect('admin/profil');
    }

    function update_pass_admin()
    {
        $this->form_validation->set_rules('password_1', 'Password', 'required|trim|min_length[6]|matches[password_2]', [
            'matches' => 'Konfirmasi password tidak sesuai',
            'min_length' => 'Panjang password minimal 6 karakter'
        ]);
        $this->form_validation->set_rules('password_2', 'Password ', 'required|trim|matches[password_1]');
        if ($this->form_validation->run() == false) {
            $id = $this->session->userdata('id');
            $data = array(
                'admin' => $this->CRUD_Model->read($id, 'admin'),
            );
            $data['title'] = 'Profil Admin • Dashboard PPDB SMA Harapan Bangsa';
            $this->load->view('dashboard/admin/template/dashboard_header', $data);
            $this->load->view('dashboard/admin/profil_admin', $data);
            $this->load->view('dashboard/admin/template/dashboard_footer');
        } else {
            $id = $this->session->userdata('id');
            $password = $this->input->post('password_1');

            $data = array(
                'password' => $password
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'admin');
            $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('admin/profil');
        }
    }

    function edit($id)
    {
        $id =  $id;
        $data = array(
            'siswa' => $this->CRUD_Model->read($id, 'tb_datadiri'),
            'orangtua' => $this->CRUD_Model->read($id, 'tb_orangtua'),
            'nilai' => $this->CRUD_Model->read($id, 'tb_nilai')
        );
        $data['title'] = 'Edit Data Diri Siswa • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/edit_datasiswa', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    function update_datadiri_siswa()
    {
        $this->form_validation->set_rules('namaijazah', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules(
            'nisn',
            'NISN',
            'required|integer|exact_length[10]|trim',
            [
                'exact_length' => 'NISN salah. NISN memiliki 10 digit nomer'
            ]
        );
        $this->form_validation->set_rules('alamatsiswa', 'Alamat Domisili Siswa', 'required|trim');
        $this->form_validation->set_rules('namasekolah', 'Nama Sekolah', 'required|trim');
        $this->form_validation->set_rules('alamatsekolah', 'Alamat Sekolah', 'required|trim');
        $this->form_validation->set_rules(
            'npsn',
            'NPSN',
            'required|integer|exact_length[8]|trim',
            [
                'exact_length' => 'NPSN salah. NISN memiliki 8 digit nomer'
            ]
        );
        if ($this->form_validation->run() == false) {
            $id = $this->input->post('id');
            redirect('crud_controller/edit/' . $id);
        } else {
            $id = $this->input->post('id');
            $namaijazah = $this->input->post('namaijazah');
            $tanggallahir = $this->input->post('tanggal');
            $nisn = $this->input->post('nisn');
            $alamatsiswa = $this->input->post('alamatsiswa');
            $namasekolah = $this->input->post('namasekolah');
            $alamatsekolah = $this->input->post('alamatsekolah');
            $npsn = $this->input->post('npsn');

            $data = array(
                'namaijazah' => $namaijazah,
                'tanggallahir' => $tanggallahir,
                'nisn' => $nisn,
                'alamatsiswa' => $alamatsiswa,
                'sekolah' => $namasekolah,
                'alamatsekolah' => $alamatsekolah,
                'npsn' => $npsn
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'tb_datadiri');
            $this->session->set_flashdata('message1', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('crud_controller/edit/' . $id);
        }
    }

    function update_orangtua_siswa()
    {
        $this->form_validation->set_rules(
            'namaayah',
            'Nama Ayah',
            'required|trim',
            [
                'required' => 'Form nama ayah harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'namaibu',
            'Nama Ibu',
            'required|trim',
            [
                'required' => 'Form nama ibu harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim',
            [
                'required' => 'Form alamat harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'pekerjaanayah',
            'Pekerjaan Ayah',
            'required|trim',
            [
                'required' => 'Form pekerjaan ayah harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'pekerjaanibu',
            'Tanggal Lahir',
            'required|trim',
            [
                'required' => 'Form pekerjaan ibu harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'penghasilan',
            'Tanggal Lahir',
            'required|integer|trim',
            [
                'required' => 'Form total penghasilan harus diisi',
                'integer' => 'Isi total penghasilan tanpa titik'
            ]
        );

        if ($this->form_validation->run() == false) {
            $id = $this->input->post('id');
            redirect('crud_controller/edit/' . $id);
        } else {
            $id = $this->input->post('id');
            $namaayah = $this->input->post('namaayah');
            $namaibu = $this->input->post('namaibu');
            $alamat = $this->input->post('alamat');
            $pekerjaanayah = $this->input->post('pekerjaanayah');
            $pekerjaanibu = $this->input->post('pekerjaanibu');
            $penghasilan = $this->input->post('penghasilan');

            $data = array(
                'namaayah' => $namaayah,
                'namaibu' => $namaibu,
                'alamat' => $alamat,
                'pekerjaanayah' => $pekerjaanayah,
                'pekerjaanibu' => $pekerjaanibu,
                'penghasilan' => $penghasilan
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'tb_orangtua');
            $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('crud_controller/edit/' . $id);
        }
    }

    function update_nilai_siswa()
    {
        $this->form_validation->set_rules(
            'nilai_bi',
            'Nilai bahasa Indonesia',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );
        $this->form_validation->set_rules(
            'nilai_ing',
            'Nilai bahasa Inggris',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );
        $this->form_validation->set_rules(
            'nilai_mtk',
            'Nilai matematika',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );
        $this->form_validation->set_rules(
            'nilai_ipa',
            'Nilai IPA',
            'required|numeric|trim',
            [
                'numeric' => 'Format pengisian salah',
            ]
        );

        if ($this->form_validation->run() == false) {
            $id = $this->input->post('id');
            redirect('crud_controller/edit/' . $id);
        } else {
            $id = $this->input->post('id');
            $indo = $this->input->post('nilai_bi');
            $ing = $this->input->post('nilai_ing');
            $mtk = $this->input->post('nilai_mtk');
            $ipa = $this->input->post('nilai_ipa');
            $gambar = $this->input->post('gambar');
            $jumlah = ($indo + $ing + $mtk + $ipa);

            $data = array(
                'indonesia' => $indo,
                'inggris' => $ing,
                'matematika' => $mtk,
                'ipa' => $ipa,
                'jumlahnilai' => $jumlah,
                'skhun' => $gambar
            );

            $where = array(
                'id' => $id
            );

            $this->CRUD_Model->update($where, $data, 'tb_nilai');
            $this->session->set_flashdata('message3', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
            redirect('crud_controller/edit/' . $id);
        }
    }

    function lihatprestasi($id)
    {
        $id =  $id;
        $data = array(
            'siswa' => $this->CRUD_Model->readprestasi($id, 'tb_prestasi')
        );
        $data['title'] = 'Edit Data Diri Siswa • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/lihat_prestasi', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    function validasi($id)
    {
        $id =  $id;
        $data = array(
            'siswa' => $this->CRUD_Model->read($id, 'tb_datadiri'),
            'orangtua' => $this->CRUD_Model->read($id, 'tb_orangtua'),
            'nilai' => $this->CRUD_Model->read($id, 'tb_nilai'),
            'prestasi' => $this->CRUD_Model->readprestasi($id, 'tb_prestasi')
        );

        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/validasi_siswa', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    ///////////////////////////////////////////////////////////////

    function updatestatussiswa()
    {
        $id = $this->input->post('id');

        $status = $this->input->post('status');

        $data = array(
            'status' => $status
        );

        $where = array(
            'id' => $id
        );

        $this->CRUD_Model->update($where, $data, 'tb_datadiri');
        $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">Berhasil update data</div>');
        redirect('crud_controller/validasi/' . $id);
    }

    //menghapus id dari beberapa tabel
    function delete($id)
    {
        $this->CRUD_Model->delete($id);
        redirect('admin/data_siswa');
    }

    function deleteprestasi($id)
    {
        $id = $id;
        $tables = array('tb_prestasi');
        $this->db->where('id_prestasi', $id);
        $this->db->delete($tables);
        redirect('pengguna/dataprestasi');
    }

    function deleteprestasisiswa($id)
    {
        $id = $id;
        $tables = array('tb_prestasi');
        $this->db->where('id_prestasi', $id);
        $this->db->delete($tables);
        redirect('admin/dataprestasi');
    }
}
