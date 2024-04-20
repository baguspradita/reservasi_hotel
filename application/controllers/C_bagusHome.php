<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_bagusHome extends CI_Controller
{
	public function index()
	{
		$data['tipeKamar'] = $this->M_bagusDAdmin->tipeKamar()->result_array();

		$data['title'] = 'Gemirlap Hotel';
		$this->load->view('V_bagusHome',  $data);
	}
}