<?php
class M_bagusUser extends CI_Model
{
    public function userBooking($add)
    {
        $this->db->insert('booking', $add);
    }
    
    public function get_user()
    {
        return $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')]);
    }
}