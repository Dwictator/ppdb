<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('CRUD_Model');
    }

    public function index()
    {
        $data['title'] = 'SMA Harapan Bangsa';
        $this->load->view('homepage/template/homepage_header', $data);
        $this->load->view('homepage/beranda');
        $this->load->view('homepage/template/homepage_footer');
    }

    public function seleksi()
    {
        $data = array(
            'siswa' => $this->CRUD_Model->readsiswaditerima()->result()
        );

        $data['title'] = 'Hasil Seleksi SMA Harapan Bangsa';
        $this->load->view('homepage/template/homepage_header', $data);
        $this->load->view('homepage/seleksi', $data);
        $this->load->view('homepage/template/homepage_footer');
    }

    public function panduan()
    {
        $data['title'] = 'Panduan PPDB SMA Harapan Bangsa';
        $this->load->view('homepage/template/homepage_header', $data);
        $this->load->view('homepage/panduan');
        $this->load->view('homepage/template/homepage_footer');
    }

    public function info()
    {
        $data['title'] = 'Informasi & Pemberitahuan SMA Harapan Bangsa';
        $this->load->view('homepage/template/homepage_header', $data);
        $this->load->view('homepage/info');
        $this->load->view('homepage/template/homepage_footer');
    }

    public function profil()
    {
        $data['title'] = 'Profil SMA Harapan Bangsa';
        $this->load->view('homepage/template/homepage_header', $data);
        $this->load->view('homepage/profil');
        $this->load->view('homepage/template/homepage_footer');
    }

    public function kontak()
    {
        $data['title'] = 'Kontak SMA Harapan Bangsa';
        $this->load->view('homepage/template/homepage_header', $data);
        $this->load->view('homepage/kontak');
        $this->load->view('homepage/template/homepage_footer');
    }
}
