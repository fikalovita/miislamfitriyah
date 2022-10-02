<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guru extends CI_Model
{
    public function tambah_pelajaran($data)
    {
        $this->db->insert('mapel', $data);
    }

    public function get_mapel()
    {
        $this->db->select('*');
        $this->db->from('mapel');
        $this->db->join('kelas', 'kelas.id_kelas = mapel.id_kelas');
        return $this->db->get();
    }

    public function detail_materi($id_mapel)
    {
        return  $this->db->get_where('mapel', $id_mapel);
    }

    public function tambah_materi($data)
    {
        $this->db->insert('materi', $data);
    }

    public function get_materi($id_mapel = "")
    {
        $this->db->select('*');
        $this->db->where('id_mapel', $id_mapel);
        $this->db->from('materi');

        return $this->db->get();
    }

    public function get_materi_byId($id_mapel)
    {
        $result = $this->db->where('id_mapel', $id_mapel)->get('materi');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function hapus_mapel($id_mapel)
    {
        $this->db->where($id_mapel);
        $this->db->delete('mapel');
    }
    public function get_guru()
    {
        $this->db->select("*");
        $this->db->from('guru');
        $this->db->where('id_guru', $this->session->userdata('id_guru'));
        return $this->db->get();
    }
    public function get_listMateri_byId($id_materi)
    {
        $result = $this->db->where('id_materi', $id_materi)->get('materi');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function hapus_materi($id_materi)
    {
        $this->db->where($id_materi);
        $this->db->delete('materi');
    }

    public function ubah_materi($id_materi, $data)
    {
        $this->db->where($id_materi);
        $this->db->update('materi', $data);
    }

    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get();
    }

    public function tambah_pengumuman($data)
    {
        $this->db->insert('pengumuman', $data);
    }
    public function  get_pengumuman()
    {
        $this->db->select('*');
        $this->db->from('pengumuman');
        return $this->db->get();
    }

    public function hapus_pengumuman($id_pengumuman)
    {
        $this->db->where('id_pengumuman', $id_pengumuman);
        $this->db->delete('pengumuman');
    }

    public function edit_pengumuman($id_pengumuman)
    {
        return  $this->db->get_where('pengumuman', $id_pengumuman);
    }

    public function update_pengumuman($id_pengumuman, $data)
    {
        $this->db->where($id_pengumuman);
        $this->db->update('pengumuman', $data);
    }
    
    public function get_materi_dashboard()
    {
        $this->db->limit(5);
        $this->db->select("*");
        $this->db->from('materi');
        $this->db->where('id_guru', $this->session->userdata('id_guru'));
        return $this->db->get();
    }
}
