<?php
class M_bagusDAdmin extends CI_Model
{

	public function userAccess()
	{
		return $this->db->get('user_pengguna');
	}

	public function tipeKamar()
	{
		return $this->db->get('tipe_kamar');
	}

	public function get_kamar($kamar)
	{
		return $this->db->get_where('ruangan', ['id_tipe_kamar' => $kamar]);
	}

	public function tambahKamar($add)
	{
		$this->db->insert('tipe_kamar', $add);
	}

	public function tambahRoom($add)
	{
		$this->db->insert('ruangan', $add);
	}

	public function mengurutkanTanggal($urutkan)
	{
	}

	public function booking($urutkan)
	{
		// mengurutkan tanggal 
		if ($urutkan == 'terbaru') {
			$this->db->select('*');
			$this->db->from('booking');
			$this->db->where('booking_id');
			$this->db->order_by('tanggal_mulai', 'desc');
			return $this->db->get();
		} elseif ($urutkan == 'terlama') {
			$this->db->select('*');
			$this->db->from('booking');
			$this->db->where('booking_id');
			$this->db->order_by('tanggal_mulai', 'asc');
			return $this->db->get();
		} else {
			return $this->db->get('booking');
		}
	}

	public function customer()
	{
		return $this->db->get_where('user_pengguna', ['level' => 3]);
	}

	public function resep()
	{
		return $this->db->get_where('user_pengguna', ['level' => 2]);
	}
}