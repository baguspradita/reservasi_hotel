<?php

class M_bagusJoin extends CI_Model
{
    public function ruanganId($kamar)
    {
        $this->db->select("*");
        $this->db->from('ruangan');
        $this->db->join('tipe_kamar', 'tipe_kamar.id = ruangan.id_tipe_kamar');
        $this->db->where('tipe_kamar.nama_kamar', $kamar);
        return $this->db->get();
    }

    public function booking()
    { 
       
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('tipe_kamar','tipe_kamar.nama_kamar=booking.tipe_kamar');
        $this->db->join('user_pengguna', 'user_pengguna.id=booking.user_id');
        // $this->db->join('ruangan', 'ruangan.ruangan_id=booking.id_ruangan');
        return  $this->db->get();
    }

    public function detail_booking($kode_booking)
    {
       $clause=array(
        'booking.kode_booking'=>$kode_booking,
       );
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('tipe_kamar','tipe_kamar.nama_kamar=booking.tipe_kamar');
        $this->db->join('user_pengguna', 'user_pengguna.id=booking.user_id');
        $this->db->where($clause);
        // $this->db->join('ruangan', 'ruangan.ruangan_id=booking.id_ruangan');
        return  $this->db->get( );
    }

    public function search_booking($search)
    {
       
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('tipe_kamar','tipe_kamar.nama_kamar=booking.tipe_kamar');
        $this->db->join('user_pengguna', 'user_pengguna.id=booking.user_id');
        $this->db->where('booking.kode_booking', $search);
        // $this->db->join('ruangan', 'ruangan.ruangan_id=booking.id_ruangan');
        return  $this->db->get();
    }

}
