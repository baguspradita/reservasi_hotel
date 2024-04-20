<!-- <?php
class M_bagusPencarian extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("booking");
  if($query != '')
  {
   $this->db->like('username', $query);
   $this->db->or_like('tipe_kamar', $query);
   $this->db->or_like('kode_booking', $query);
   $this->db->or_like('tanggal_mulai', $query);
   $this->db->or_like('tanggal_selesai', $query);
  }
  $this->db->order_by('search', 'DESC');
  return $this->db->get();
 }
}
?> -->