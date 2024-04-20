<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_bagusAuth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	// Login User
	public function index()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {

			// Gagal validasi
			$data['title'] = 'Login Hotel';
			$this->load->view('V_bagusLogin', $data);
		} else {

			// Lolos validasi
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user_pengguna = $this->db->get_where('user_pengguna', ['email' => $email])->row_array();

		// jika usernya ada
		if ($user_pengguna) {

			// cek password
			if (password_verify($password, $user_pengguna['password'])) {

				$data = [
					'email' => $user_pengguna['email'],
					'level' => $user_pengguna['level'],
				];

				// Kondisi
				$this->session->set_userdata($data);
				if ($user_pengguna['level'] == 1) {
					redirect('C_bagusDAdmin'); //admin
				} else if ($user_pengguna['level'] == 2) {
					redirect('C_bagusDAdmin'); //resepsionis
				} else {
					redirect('C_bagusUser'); //user
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Wrong password !
		  	</div>');
				redirect('C_bagusAuth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email is not registered !
		  	</div>');
			redirect('C_bagusAuth');
		}
	}





	// Register User
	public function register()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('gender', 'Gender', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match !',
			'min_length' => 'password too short !',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



		if ($this->form_validation->run() == false) {

			$data['title'] = 'Register Hotel';
			$this->load->view('V_bagusRegister', $data);
		} else {

			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'gender' => htmlspecialchars($this->input->post('gender', true)),
				'status' => htmlspecialchars($this->input->post('status', true)),
				'level' => 3,


			];

			$this->db->insert('user_pengguna', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Congratulation your account has been created !
		  	</div>');
			redirect('C_bagusAuth');
		}
	}


	// public function userregister()
	// {
	// 	$this->load->view('V_arsya_userregister');
	// }

	// Register Admin
	public function registerAdmin()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('gender', 'Gender', 'required|trim');

		$this->form_validation->set_rules('status', 'Status', 'required|trim');

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match !',
			'min_length' => 'password too short !',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



		if ($this->form_validation->run() == false) {

			$data['title'] = 'Register Hotel';
			$this->load->view('V_bagusRegisterAdmin', $data);
		} else {

			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'gender' => htmlspecialchars($this->input->post('gender', true)),
				'status' => htmlspecialchars($this->input->post('status', true)),
				'level' => 1,


			];

			$this->db->insert('user_pengguna', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Congratulation your account has been created !
				  </div>');
			redirect('C_bagusAuth/loginAdmin');
		}
	}

	// Login Admin
	public function loginAdmin()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {

			// Gagal validasi
			$data['title'] = 'Login Hotel';
			$this->load->view('V_bagusLoginAdmin', $data);
		} else {

			// Lolos validasi
			$this->_loginAdmin();
		}
	}

	private function _loginAdmin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user_pengguna = $this->db->get_where('user_pengguna', ['email' => $email])->row_array();

		// jika usernya ada
		if ($user_pengguna) {

			// cek password
			if (password_verify($password, $user_pengguna['password'])) {

				$data = [
					'email' => $user_pengguna['email'],
					'level' => $user_pengguna['level'],
				];

				// Kondisi
				$this->session->set_userdata($data);
				if ($user_pengguna['level'] == 1) {
					redirect('C_bagusDAdmin'); //admin
				} else if ($user_pengguna['level'] == 2) {
					redirect('C_bagusDAdmin'); //resepsionis
				} else {
					redirect('C_bagusUser'); //user
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Wrong password !
		  	</div>');
				redirect('C_bagusAuth/loginAdmin');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email is not registered !
		  	</div>');
			redirect('C_bagusAuth/loginAdmin');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			You have been logout !
		  	</div>');
		redirect('C_bagusAuth');
	}
}