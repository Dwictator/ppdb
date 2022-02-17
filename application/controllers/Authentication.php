<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password_1', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login PPDB SMA Harapan Bangsa';
			$this->load->view('auth/template/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('auth/template/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password_1');

		$pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();

		if ($pengguna) {

			if ($pengguna['active'] == 1) {

				if (password_verify($password, $pengguna['password'])) {
					$data = [
						'email' => $pengguna['email'],
						'id' => $pengguna['id'],
						'role' => $pengguna['role']
					];
					$this->session->set_userdata($data);
					redirect('pengguna/');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau password salah!</div>');
					redirect('authentication');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktivasi</div>');
				redirect('authentication');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar</div>');
			redirect('authentication');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('namadepan', 'Nama Depan', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]', [
			'is_unique' => 'Email ini sudah digunakan.'
		]);
		$this->form_validation->set_rules('telepon', 'Nomer Telepon', 'required|integer|trim', [
			'integer' => 'Isikan nomer telepon pada form diatas'
		]);
		$this->form_validation->set_rules('password_1', 'Password', 'required|trim|min_length[6]|matches[password_2]', [
			'matches' => 'Konfirmasi password tidak sesuai',
			'min_length' => 'Panjang password minimal 6 karakter'
		]);
		$this->form_validation->set_rules('password_2', 'Password ', 'required|trim|matches[password_1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registrasi PPDB SMA Harapan Bangsa';
			$this->load->view('auth/template/auth_header', $data);
			$this->load->view('auth/register');
			$this->load->view('auth/template/auth_footer');
		} else {
			$data = [
				'namalengkap' => htmlspecialchars($this->input->post('namadepan', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password_1'), PASSWORD_DEFAULT),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
				'role' => 2,
				'active' => 1,
				'date_created' => date("Y-m-j")
			];
			$this->db->insert('pengguna', $data);

			$email = htmlspecialchars($this->input->post('email', true));
			$pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();

			$datain = [
				'id' => $pengguna['id'],
				'namalengkap' => $pengguna['namalengkap'],
			];
			$this->db->insert('tb_datadiri', $datain);
			$this->db->insert('tb_orangtua', $datain);
			$this->db->insert('tb_nilai', $datain);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda berhasil dibuat. Silahkan login dengan akun yang sudah dibuat</div>');
			redirect('authentication');
		}
	}


	public function login_admin()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password_1', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login PPDB SMA Harapan Bangsa';
			$this->load->view('auth/template/auth_header', $data);
			$this->load->view('auth/login_admin');
			$this->load->view('auth/template/auth_footer');
		} else {
			$this->_loginadmin();
		}
	}

	private function _loginadmin()
	{
		$user = $this->input->post('username');
		$password = $this->input->post('password_1');

		$admin = $this->db->get_where('admin', ['username' => $user])->row_array();

		if ($admin) {

			if ($password == $admin['password']) {
				$data = [
					'username' => $admin['username'],
					'id' => $admin['id']
				];
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
				redirect('authentication/login_admin');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
			redirect('authentication/login_admin');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('authentication');
	}

	public function logout_admin()
	{
		$this->session->sess_destroy();
		redirect('authentication/login_admin');
	}
}
