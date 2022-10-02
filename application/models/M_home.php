<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function get_about()
    {
        $this->db->select('*');
        $this->db->from('about');
        return $this->db->get();
    }

    public function get_artikel()
    {
        $this->db->limit('1');
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->order_by('id_artikel', 'DESC');
        return $this->db->get();
    }

    public function get_sejarah()
    {
        $this->db->select('*');
        $this->db->from('profile');
        return $this->db->get();
    }
    public function get_misi()
    {
        $this->db->select('*');
        $this->db->from('misi');
        return $this->db->get();
    }
    public function get_visi()
    {
        $this->db->select('*');
        $this->db->from('visi');
        return $this->db->get();
    }
    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get();
    }
    public function get_artikeL_detail()
    {
        $this->db->limit(10);
        $this->db->select('*');
        $this->db->from('artikel');
        return $this->db->get();
    }
}
