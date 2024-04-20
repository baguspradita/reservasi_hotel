<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_bagusDAdmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		// single
		$kondisi_single = array(
			'tipe_kamar' => 'single',
		);
		$this->db->where($kondisi_single);
		$single = $this->db->get('booking')->num_rows();

		// standar
		$kondisi_standar = array(
			'tipe_kamar' => 'standar',
		);
		$this->db->where($kondisi_standar);
		$standar = $this->db->get('booking')->num_rows();

		// deluxe
		$kondisi_deluxe = array(
			'tipe_kamar' => 'deluxe',
		);
		$this->db->where($kondisi_deluxe);
		$deluxe = $this->db->get('booking')->num_rows();

		// double
		$kondisi_double = array(
			'tipe_kamar' => 'double',
		);
		$this->db->where($kondisi_double);
		$double = $this->db->get('booking')->num_rows();

		$data['card'] = array(
			'jumlah_booking' => $this->db->get('booking')->num_rows(),
			'single' => $single,
			'deluxe' => $deluxe,
			'standar' => $standar,
			'double' => $double,
		);

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('M_bagusDAdmin');

		$data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();
		$data['customer'] = $this->M_bagusDAdmin->customer()->result_array();

		$data['title'] = 'Dashboard Gemirlap Hotel';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('V_bagusDAdmin',  $data);
		$this->load->view('templates/footer',  $data);
	}

	// Room
	public function room($kamar)
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('M_bagusDAdmin');
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();
		$data['tipekamar'] = $this->M_bagusDAdmin->tipeKamar()->row_array();
		// $id_tipe_kamar=$this->db->get_where('tipe_kamar',['nama_kamar'=>$kamar])->row_array();
		// $data['kamar'] = $this->M_bagusDAdmin->get_kamar($id_tipe_kamar['id'])->result_array();
		$data['tipe'] = $kamar;


		$this->load->model('M_bagusJoin');

		$data['list_kamar'] = $this->M_bagusJoin->ruanganId($kamar)->result_array();

		$data['title'] = 'Room';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('V_bagusRoomAdmin',  $data);
		$this->load->view('templates/footer',  $data);
	}


	public function fungsi_tambahRoom()
	{
		$tipekamar = $this->input->post('tipekamar');
		$nomor_ruangan = $this->input->post('nomor_ruangan');
		$status = $this->input->post('status');

		$add = array(
			'id_tipe_kamar' => $tipekamar,
			'nomor_ruangan' => $nomor_ruangan,
			'status' =>	 $status,
		);
		$tipe_redirect = $this->db->get_where('tipe_kamar', ['id' => $tipekamar])->row_array();
		$this->M_bagusDAdmin->tambahRoom($add);
		redirect('C_bagusDAdmin/room/' . $tipe_redirect['nama_kamar']);
	}


	public function fungsi_editRoom($id)
	{
		$tipekamar = $this->input->post('tipekamar');
		$nomor_ruangan = $this->input->post('nomor_ruangan');
		$status = $this->input->post('status');

		$update = array(
			'id_tipe_kamar' => $tipekamar,
			'nomor_ruangan' => $nomor_ruangan,
			'status' =>	 $status,
		);

		$tipe_redirect = $this->db->get_where('tipe_kamar', ['id' => $tipekamar])->row_array();
		$this->db->where('ruangan_id', $id);
		$this->db->update('ruangan', $update);
		redirect('C_bagusDAdmin/room/' . $tipe_redirect['nama_kamar']);
	}

	public function fungsi_deleteRoom($id)
	{
		$id_tipe_kamar = $this->db->get_where('ruangan', ['ruangan_id' => $id])->row_array();

		$tipe_redirect = $this->db->get_where('tipe_kamar', ['id' => $id_tipe_kamar['id_tipe_kamar']])->row_array();
		$this->db->where('ruangan_id', $id);
		$this->db->delete('ruangan');
		redirect('C_bagusDAdmin/room/' . $tipe_redirect['nama_kamar']);
	}
	// Akhir Room


	public function masterData()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('M_bagusDAdmin');

		$data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();
		$data['resep'] = $this->M_bagusDAdmin->resep()->result_array();

		$data['title'] = 'Master Data Gemirlap Hotel';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('V_bagusMasdatAdmin',  $data);
		$this->load->view('templates/footer',  $data);
	}

	// Tipe Kamar
	public function form_tambahKamar()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();

		$data['title'] = 'Form Tambah Tipe Kamar';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('V_bagusFormKamar',  $data);
		$this->load->view('templates/footer',  $data);
	}

	public function fungsi_tambahKamar()
	{
		$tipekamar = $this->input->post('tipekamar');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');

		// Upload File
		$config['upload_path']          = './assets/img/uploads';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('image');
		$upload_img = $this->upload->data('file_name');


		$add = array(
			'nama_kamar' => $tipekamar,
			'fasilitas_kamar' => $fasilitas,
			'tipe_harga' => $harga,
			'tanggal_update' => $tanggal,
			'img' => $upload_img,
		);

		$this->load->model('M_bagusDAdmin');
		$this->M_bagusDAdmin->tambahKamar($add);

		redirect('C_bagusDAdmin/masterData');
	}

	public function fungsi_editKamar($id)
	{
		$tipekamar = $this->input->post('tipekamar');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');

		// Upload File
		$config['upload_path']          = './assets/img/uploads';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('image');
		$upload_img = $this->upload->data('file_name');

		$update = array(
			'nama_kamar' => $tipekamar,
			'fasilitas_kamar' => $fasilitas,
			'tipe_harga' => $harga,
			'tanggal_update' => $tanggal,
			'img' => $upload_img,
		);

		$this->db->where('id', $id);
		$this->db->update('tipe_kamar', $update);

		redirect('C_bagusDAdmin/masterData');
	}

	public function fungsi_deletKamar($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tipe_kamar');
		redirect('C_bagusDAdmin/masterData');
	}
	// Akhir Tipe Kamar

	// Usser Acces
	public function fungsi_editUser($id)
	{
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');

		$update = array(
			'nama' => $nama,
			'level' => $level,
		);

		$this->db->where('id', $id);
		$this->db->update('user_pengguna', $update);
		redirect('C_bagusDAdmin/masterData');
	}

	public function fungsi_deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_pengguna');
		redirect('C_bagusDAdmin/masterData');
	}
	// Akhir Usser Acces

	// Booking 
	public function detailBook()
	{



		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();


		// $data['detailBook'] =  $this->M_bagusDAdmin->booking()->result_array();
		// $data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		// $data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();
		// $data['detailBook'] = $this->M_bagusJoin->booking()->result_array();

		// mengurutkan tanggal 
		$urutkan = $this->input->post('urut');
		if ($urutkan) {
			$data['detailBook'] =  $this->M_bagusDAdmin->booking($urutkan)->result_array();
		} else {
			$data['detailBook'] =  $this->M_bagusDAdmin->booking('')->result_array();
		}

		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();


		$data['title'] = 'Booking';
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('V_detailBook', $data);
		$this->load->view('templates/footer', $data);
	}

	public function deleteBook($id)
	{
		$this->db->where('booking_id', $id);
		$this->db->delete('booking');
		redirect('C_bagusDAdmin/detailBook');
	}

	// Akhir book

	// // Pencarian 
	public function pencarian()
	{


		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();
		$data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();


		$search = $this->input->get('search');

		if ($search) {
			// $data['detailBook'] = $this->db->get_where('booking', ['username' => $search])->result_array();

			$this->db->select('*');
			$this->db->from('booking');
			$this->db->or_like('username', $search);
			$this->db->or_like('tipe_kamar', $search);
			$this->db->or_like('kode_booking', $search);
			$this->db->or_like('tanggal_mulai', $search);
			$this->db->or_like('tanggal_selesai', $search);
			// $data['detailBook'] = $this->M_bagusJoin->booking()->result_array();
			// $data['detailBook'] =  $this->db->get('booking')->result_array();
			$data['detailBook'] =  $this->db->get()->result_array();
		} else {

			// $data['detailBook'] = $this->M_bagusJoin->booking('detailBook')->result_array();
			$data['detailBook'] =  $this->db->get('booking')->result_array();
		}




		$data['title'] = 'Pencarian';
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('V_bagusPencarian', $data);
		$this->load->view('templates/footer', $data);
	}
}