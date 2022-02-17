<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CRUD_Model');
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        if (!$this->session->has_userdata('id')) {
            redirect('authentication');
        }
        $data = array(
            'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
        );
        $data['title'] = 'Profil • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
        $this->load->view('dashboard/pengguna/dashboard', $data);
        $this->load->view('dashboard/pengguna/template/pengguna_footer');
    }

    public function profil()
    {

        $id = $this->session->userdata('id');
        if (!$this->session->has_userdata('id')) {
            redirect('authentication');
        }
        $data = array(
            'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
        );
        $data['title'] = 'Profil • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
        $this->load->view('dashboard/pengguna/profil_pengguna', $data);
        $this->load->view('dashboard/pengguna/template/pengguna_footer');
    }

    public function datadiri()
    {
        $id = $this->session->userdata('id');
        if (!$this->session->has_userdata('id')) {
            redirect('authentication');
        }
        $data = array(
            'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
            'siswa' => $this->CRUD_Model->read($id, 'tb_datadiri')
        );
        $data['title'] = 'Data Diri • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
        $this->load->view('dashboard/pengguna/data_diri', $data);
        $this->load->view('dashboard/pengguna/template/pengguna_footer');
    }

    public function dataorangtua()
    {
        $id = $this->session->userdata('id');
        if (!$this->session->has_userdata('id')) {
            redirect('authentication');
        }
        $data = array(
            'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
            'orangtua' => $this->CRUD_Model->read($id, 'tb_orangtua')
        );
        $data['title'] = 'Data Orangtua • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
        $this->load->view('dashboard/pengguna/data_orangtua', $data);
        $this->load->view('dashboard/pengguna/template/pengguna_footer');
    }

    public function datanilai()
    {
        $id = $this->session->userdata('id');
        if (!$this->session->has_userdata('id')) {
            redirect('authentication');
        }

        $data = array(
            'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
            'siswa' => $this->CRUD_Model->read($id, 'tb_nilai')
        );

        $data['title'] = 'Data Nilai • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
        $this->load->view('dashboard/pengguna/data_nilai', $data);
        $this->load->view('dashboard/pengguna/template/pengguna_footer');
    }

    public function dataprestasi()
    {
        $id = $this->session->userdata('id');
        if (!$this->session->has_userdata('id')) {
            redirect('authentication');
        }
        $data = array(
            'pengguna' => $this->CRUD_Model->read($id, 'pengguna'),
            'siswa' => $this->CRUD_Model->readprestasi($id, 'tb_prestasi')
        );

        $data['title'] = 'Data Prestasi • Dashboard PPDB SMA  Harapan Bangsa';
        $this->load->view('dashboard/pengguna/template/pengguna_header', $data);
        $this->load->view('dashboard/pengguna/data_prestasi', $data);
        $this->load->view('dashboard/pengguna/template/pengguna_footer');
    }
}
