<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('CRUD_Model');
    }

    public function index()
    {
        redirect('authentication/login_admin');
    }

    public function dashboard()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $data['title'] = 'Dashboard • Dashboard PPDB SMA Lorem Ipsum';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/dashboard');
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function profil()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $id = $this->session->userdata('id');

        $data = array(
            'admin' => $this->CRUD_Model->read($id, 'admin'),
        );
        $data['title'] = 'Profil • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/profil_admin', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function data_siswa()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $this->load->library('pagination');
        $jumlahdata = $this->CRUD_Model->jumlahdata('tb_datadiri');

        $config['base_url'] = 'data_siswa/';
        $config['total_rows'] = $jumlahdata;
        $config['per_page'] = 10;

        $from = $this->uri->segment(3);

        $this->pagination->initialize($config);

        $data = array(
            'siswa' => $this->CRUD_Model->read2tabel()->result(),
            'data_siswa' => $this->CRUD_Model->data('tb_datadiri', $config['per_page'], $from)
        );

        $data['title'] = 'Data Siswa • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/data_siswa', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function validasi_data()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $data = array(
            'siswa' => $this->CRUD_Model->readvalidasi()->result()
        );
        $data['title'] = 'Validasi Data • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/validasi_data', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function seleksi_nilai()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $data = array(
            'siswa' => $this->CRUD_Model->readsiswaditerima()->result()
        );
        $data['title'] = 'Seleksi Nilai • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/seleksi_nilai', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function seleksi_prestasi()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $data = array(
            'siswa' => $this->CRUD_Model->readsiswaditerimaprestasi()->result()
        );
        $data['title'] = 'Seleksi Nilai • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/seleksi_prestasi', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function pertanyaan()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $data = array(
            'pesan' => $this->CRUD_Model->readdata('tb_pertanyaan')->result()
        );
        $data['title'] = 'Data Pertanyaan • Dashboard PPDB SMA Lorem Ipsum';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/data_pertanyaan', $data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function pencarian()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $data['title'] = 'Seleksi Nilai • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header', $data);
        $this->load->view('dashboard/admin/pencarian_data',$data);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }

    public function hasil()
    {
        if (!$this->session->has_userdata('id')) {
            redirect('admin');
        }

        $data2['cari'] = $this->CRUD_Model->carisiswa();

        $data['title'] = 'Seleksi Nilai • Dashboard PPDB SMA Harapan Bangsa';
        $this->load->view('dashboard/admin/template/dashboard_header');
        $this->load->view('dashboard/admin/pencarian_data', $data2);
        $this->load->view('dashboard/admin/template/dashboard_footer');
    }
}
