<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Daftar Lombok Cyber";
		$this->load->view('templates/home_header', $data);
		$this->load->view('home/reg_calon');
		$this->load->view('templates/home_footer');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('user', ['username' => $username])->row_array();
		if ($cek) {
			if (password_verify($password, $cek['password'])) {
				$data = [
					'admin' => $cek['id']
				];
				$this->session->set_userdata($data);
				redirect('home/admin');
			} else {
				$this->session->set_flashdata('user', $username);
				$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Maaf username atau password salah !!!
			  </div>');
				$this->session->set_flashdata('modal', '<script>$(document).ready(function(){
				$("#login").modal("show");
			  });</script>');
				redirect('home');
			}
			$this->session->set_flashdata('user', $username);
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
			Maaf username atau password salah !!!
		  </div>');
			$this->session->set_flashdata('modal', '<script>$(document).ready(function(){
			$("#login").modal("show");
		  });</script>');
			redirect('home');
		}
		$this->session->set_flashdata('user', $username);
		$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
			Maaf username atau password salah !!!
		  </div>');
		$this->session->set_flashdata('modal', '<script>$(document).ready(function(){
			$("#login").modal("show");
		  });</script>');
		redirect('home');
	}

	public function daftar()
	{
		$nama = htmlspecialchars($this->input->post('nama'));
		$alamat = htmlspecialchars($this->input->post('alamat'));
		$nowa = htmlspecialchars($this->input->post('nowa'));
		$jk = htmlspecialchars($this->input->post('jk'));
		$email = htmlspecialchars($this->input->post('email'));
		$bidang = htmlspecialchars($this->input->post('bidang'));
		$cek = $this->db->get_where('calon', ['email' => $email])->row_array();
		if ($cek) {
			$this->session->set_flashdata('nama', $nama);
			$this->session->set_flashdata('alamat', $alamat);
			$this->session->set_flashdata('nowa', $nowa);
			$this->session->set_flashdata('jk', $jk);
			$this->session->set_flashdata('email', $email);
			$this->session->set_flashdata('bidang', $bidang);
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
				Email Sudah Terdaftar
			  </div>');
			redirect('home/index');
		} else {
			$gambar = $_FILES['gambar']['name'];
			if ($gambar) {
				$config['upload_path']          = "assets/img/foto/";
				$config['allowed_types']        = 'JPG|jpg|jpeg|png';
				$config['max_size']             = 10240;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">' . $error . '</div>');
				}
			}
			$this->db->set('gambar', $new_image);
			$this->db->set('nama', $nama);
			$this->db->set('alamat', $alamat);
			$this->db->set('nowa', $nowa);
			$this->db->set('jk', $jk);
			$this->db->set('email', $email);
			$this->db->set('bidang', $bidang);
			$this->db->insert('calon');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Selamat Anda Sudah Terdaftar
			  </div>');
			redirect('home/index');
		}
	}
	public function admin()
	{
		if (!$this->session->userdata('admin')) {
			redirect('home');
		}
		$data['title'] = "Admin page";
		$data['calon'] = $this->db->get('calon')->result_array();
		$this->load->view('templates/home_header', $data);
		$this->load->view('home/admin', $data);
		$this->load->view('templates/home_footer');
	}
	public function logout()
	{
		$this->session->unset_userdata('admin');
		$this->session->sess_destroy();
		redirect('home');
	}
}
