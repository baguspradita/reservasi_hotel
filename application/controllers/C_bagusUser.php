x <?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_bagusUser extends CI_Controller
{
	public function index()
	{
		$this->load->model('M_bagusDAdmin');

		$data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();

		$data['title'] = 'Gemirlap Hotel';
		$this->load->view('V_bagusUser',  $data);
	}

	public function booking()
	{
		$this->load->model('M_bagusDAdmin');
		$this->load->model('M_bagusUser');

		// $data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array()
		$data['get_user'] = $this->M_bagusUser->get_user()->row_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();

		$data['title'] = 'Booking Room';
		$this->load->view('V_bagusBooking',  $data);
	}

	public function tambahBooking()
	{
		$data_user = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();
		$chekin = $this->input->post('chekin');
		$chekout = $this->input->post('chekout');
		$adults = $this->input->post('adults');
		$kids = $this->input->post('kids');
		$tipe_kamar = $this->input->post('tipe_kamar');


		$first_digit_booking_code = $this->db->get('booking')->num_rows() + 1;
		$add = array(
			'tanggal_mulai' => $chekin,
			'tanggal_selesai' => $chekout,
			'adults' => $adults,
			'kids' => $kids,
			'tipe_kamar' => $tipe_kamar,
			'username' => $data_user['username'],
			'user_id' => $data_user['id'],
			'kode_booking' => $first_digit_booking_code . '-' . $data_user['id'] . '-' . date('d-m-y')
		);

		$this->load->model('M_bagusUser');
		$this->M_bagusUser->userBooking($add);

		redirect('C_bagusUser/kodeBooking/' . $add['kode_booking']);
	}

	public function kodeBooking($kode_booking)
	{

		$data['detailbook'] = $this->M_bagusJoin->detail_booking($kode_booking)->row_array();

		$data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();

		$data['title'] = 'Kode Booking';
		$this->load->view('V_bagusKode', $data);
	}

	public function pdf_booking($kode_booking)
	{

		// $data['detailBook'] = $this->M_bagusJoin->booking()->result_array(); 
		// $data['detailbook'] = $this->M_bagusJoin->booking()->row_array(); 

		$data['userAccess'] = $this->M_bagusDAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();


		$data = array(
			"dataku" => array(
				"nama" => "Petani Kode",
				"url" => "http://petanikode.com"
			),
			'detailbook' => $this->M_bagusJoin->detail_booking($kode_booking)->row_array(),
		);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "booking.pdf";
		$data['title'] = 'Bukti Booking';
		$this->pdf->load_view('V_bagusLaporanPDF', $data);
	}
}