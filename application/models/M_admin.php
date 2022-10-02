<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function tambah_artikel($data)
    {
        $this->db->insert('artikel', $data);
    }

    public function hapus_artikel($id_artikel)
    {
        $this->db->where($id_artikel);
        $this->db->delete('artikel');
    }

    public function get_artikel()
    {
        $this->db->select('*');
        $this->db->from('artikel');
        return $this->db->get();
    }

    public function get_artikel_byId($id_artikel)
    {
        $result = $this->db->where('id_artikel', $id_artikel)->get('artikel');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function detail_artikel($id_artikel)
    {
        return  $this->db->get_where('artikel', $id_artikel);
    }

    public function update_artikel($data, $id_artikel)
    {
        $this->db->where($id_artikel);
        $this->db->update('artikel', $data);
    }

    public function edit_visi()
    {
        $this->db->select('*');
        $this->db->from('visi');
        return $this->db->get();
    }

    public function update_visi($data, $id_visi)
    {
        $this->db->where($id_visi);
        $this->db->update('visi', $data);
    }

    public function edit_misi()
    {
        $this->db->select('*');
        $this->db->from('misi');
        return $this->db->get();
    }
    public function update_misi($data, $id_misi)
    {
        $this->db->where($id_misi);
        $this->db->update('misi', $data);
    }
    public function tambah_ekskul($data)
    {
        $this->db->insert('ekskul', $data);
    }
    public function get_ekskul()
    {
        $this->db->select('*');
        $this->db->from('ekskul');
        return $this->db->get();
    }

    public function get_ekskul_byId($id_ekskul)
    {
        $result = $this->db->where('id_ekskul', $id_ekskul)->get('ekskul');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function hapus_ekskul($id_ekskul)
    {
        $this->db->where($id_ekskul);
        $this->db->delete('ekskul');
    }
    public function detail_ekskul($id_ekskul)
    {
        return  $this->db->get_where('ekskul', $id_ekskul);
    }
    public function update_ekskul($data, $id_ekskul)
    {
        $this->db->where($id_ekskul);
        $this->db->update('ekskul', $data);
    }
    public function get_prestasi()
    {
        $this->db->select('*');
        $this->db->from('prestasi');
        return $this->db->get();
    }
    public function tambah_prestasi($data)
    {
        $this->db->insert('prestasi', $data);
    }
    public function get_prestasi_byId($id_prestasi)
    {
        $result = $this->db->where('id_prestasi', $id_prestasi)->get('prestasi');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function update_prestasi($data, $id_prestasi)
    {
        $this->db->where($id_prestasi);
        $this->db->update('prestasi', $data);
    }
    public function hapus_prestasi($id_prestasi)
    {
        $this->db->where($id_prestasi);
        $this->db->delete('prestasi');
    }
    public function tambah_slider($data)
    {
        $this->db->insert('slider', $data);
    }

    public function tambah_guru($data)
    {
        $this->db->insert('guru', $data);
    }

    public function get_guru()
    {
        $this->db->select('*');
        $this->db->from('guru');

        return $this->db->get();
    }

    public function get_guru_byId($id_guru)
    {
        $result = $this->db->where('id_guru', $id_guru)->get('guru');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function update_guru($data, $id_guru)
    {
        $this->db->where($id_guru);
        $this->db->update('guru', $data);
    }

    public function hapus_guru($id_guru)
    {
        $this->db->where($id_guru);
        $this->db->delete('guru');
    }
    public function get_dokumentasi()
    {
        $this->db->select('*');
        $this->db->from('dokumentasi');
        return  $this->db->get();
    }

    public function tambah_dokumentasi($data)
    {
        $this->db->insert('dokumentasi', $data);
    }

    public function get_dokumentasi_byId($id_dokumentasi)
    {
        $result = $this->db->where('id_dokumentasi', $id_dokumentasi)->get('dokumentasi');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function hapus_dokumentasi($id_dokumentasi)
    {
        $this->db->where($id_dokumentasi);
        $this->db->delete('dokumentasi');
    }

    public function update_about($data, $id_about)
    {
        $this->db->where($id_about);
        $this->db->update('about', $data);
    }
    public function edit_about()
    {
        $this->db->select('*');
        $this->db->from('about');
        return $this->db->get();
    }

    public function get_slider()
    {
        $this->db->select('*');
        $this->db->from('slider');
        return $this->db->get();
    }

    public function hapus_slider($id_slider)
    {
        $this->db->where($id_slider);
        $this->db->delete('slider');
    }

    public function get_slider_byId($id_slider)
    {
        $result = $this->db->where('id_slider', $id_slider)->get('slider');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function update_slider($id_slider, $data)
    {
        $this->db->where($id_slider);
        $this->db->update('slider', $data);
    }

    public function update_profile($id_profile, $data)
    {
        $this->db->where($id_profile);
        $this->db->update('profile', $data);
    }

    public function get_profile()
    {
        $this->db->select('*');
        $this->db->from('profile');
        return $this->db->get();
    }

    public function update_dokumentasi($id_dokumentasi, $data)
    {
        $this->db->where($id_dokumentasi);
        $this->db->update('dokumentasi', $data);
    }

    public function get_sambutan()
    {
        $this->db->select('*');
        $this->db->from('sambutan');
        return $this->db->get();
    }

    public function get_sambutan_byId($id_sambutan)
    {
        $result = $this->db->where('id_sambutan', $id_sambutan)->get('sambutan');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function update_sambutan($data, $id_sambutan)
    {
        $this->db->where($id_sambutan);
        $this->db->update('sambutan', $data);
    }

    public function ubah_profile($id_admin, $data)
    {
        $this->db->where($id_admin);
        $this->db->update('admin', $data);
    }
}
