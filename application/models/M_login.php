<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function aksi_login_guru($username, $password)
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }
    public function aksi_login_admin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username_admin', $username);
        $this->db->where('password_admin', $password);
        return $this->db->get();
    }
}
