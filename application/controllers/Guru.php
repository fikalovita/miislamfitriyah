<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
		$this->load->model('M_admin');
		if (!$this->session->userdata('guru')) {

			redirect('home/login');
		}
	}

	public function index()
	{
		$data = [
			'title' =>  'Dashboard | ' . $this->session->userdata('nama_guru'),
			'materi' => $this->M_guru->get_materi_dashboard()->result()

		];

		$this->load->view('guru_layout/header', $data);
		$this->load->view('guru_layout/sidebar');
		$this->load->view('guru/dashboard',$data);
		$this->load->view('guru_layout/footer');
	}
	public function pengumuman()
	{

		$data = [
			'pengumuman' => $this->M_guru->get_pengumuman()->result()
		];

		$this->load->view('guru_layout/header');
		$this->load->view('guru_layout/sidebar');
		$this->load->view('guru/pengumuman', $data);
		$this->load->view('guru_layout/footer');
	}
	public function materi()
	{
		$data = [
			'mapel' => $this->M_guru->get_mapel()->result()

		];

		$this->load->view('guru_layout/header');
		$this->load->view('guru_layout/sidebar');
		$this->load->view('guru/elerning', $data);
		$this->load->view('guru_layout/footer');
	}
	public function form_tambah_pelajaran()
	{

		$data = [
			'kelas' => $this->M_guru->get_kelas()->result()
		];

		$this->load->view('guru_layout/header');
		$this->load->view('guru_layout/sidebar');
		$this->load->view('guru/tambah_pelajaran', $data);
		$this->load->view('guru_layout/footer');
	}

	public function tambah_pelajaran()
	{
		$matpel = $this->input->post('matpel');
		$kelas = $this->input->post('kelas');
		$data = [
			'nama_mapel' => $matpel,
			'id_kelas' => $kelas
		];

		$this->M_guru->tambah_pelajaran($data);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('guru/materi', 'refresh');
	}
	public function list_materi()
	{
		$id_mapel = $this->uri->segment(3);
		$data = [
			'materi' => $this->M_guru->get_materi($id_mapel)->result()

		];
		$this->load->view('guru_layout/header');
		$this->load->view('guru_layout/sidebar');
		$this->load->view('guru/list_materi', $data);
		$this->load->view('guru_layout/footer');
	}

	public function tambah_materi()
	{
		$id_mapel = $this->input->post('id_mapel');
		$judul_materi = $this->input->post('judul_materi');
		$file = $_FILES['file']['name'];

		if ($file = '') {
		} else {
			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|pptx|xls|xlsx|docx|txt';
			$config['detect_mime']     = TRUE;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('form', $error);
			} else {
				$file = $this->upload->data('file_name');
			}
		}

		$data = [

			'id_mapel' => $id_mapel,
			'nama_materi' => $judul_materi,
			'file' => $file,
			'id_guru' => $this->session->userdata('id_guru')

		];

		$this->M_guru->tambah_materi($data);

		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('guru/list_materi/' . $id_mapel, 'refresh');
	}

	public function hapus_mapel($id_mapel)
	{
		$data = $this->M_guru->get_materi_byId($id_mapel);
		$file = './assets/uploads/' . $data->file;
		$id_mapel  = array('id_mapel' => $id_mapel);
		$this->M_guru->hapus_mapel($id_mapel);
		unlink($file);
		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('guru/materi', 'refresh');
	}
	public function ubah_profile()
	{
		$nuptk = $this->input->post('nuptk');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jabatan = $this->input->post('jabatan');
		$foto = $_FILES['foto']['name'];
		$foto_lama = $this->input->post('foto_lama');
		$id_guru = $this->input->post('id_guru');

		if ($foto) {

			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$data = $this->M_admin->get_guru_byId($id_guru);
				$foto = $data->foto;
				if ($foto != 'user.png') {
					$foto_guru = './assets/uploads/' . $data->foto;
					unlink($foto_guru);
				}

				$new_foto = $this->upload->data('file_name');
			}
		} else {

			$new_foto = $foto_lama;
		};

		$data = [

			'nuptk' => $nuptk,
			'nama_guru' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'jabatan' => $jabatan,
			'foto' => $new_foto
		];

		$id_guru = ['id_guru' => $id_guru];

		$this->M_admin->update_guru($data, $id_guru);
		$this->session->set_userdata($data);
		$this->session->set_flashdata('pesan', 'diubah');
		redirect('guru', 'refresh');
	}

	public function view_profile()
	{
		$data = [
			'guru' => $this->M_guru->get_guru(),
			'title' =>  'Profile | ' . $this->session->userdata('nama_guru')

		];
		$this->load->view('guru_layout/header', $data);
		$this->load->view('guru_layout/sidebar');
		$this->load->view('guru/profile', $data);
		$this->load->view('guru_layout/footer');
	}

	public function download_materi($id_materi)
	{
		$data = $this->M_guru->get_listMateri_byId($id_materi);
		force_download('./assets/uploads/' . $data->file, NULL);
	}

	public function hapus_materi($id_materi)
	{
		$data = $this->M_guru->get_listMateri_byId($id_materi);
		$file = './assets/uploads/' . $data->file;
		$id_materi  = array('id_materi' => $id_materi);
		$this->M_guru->hapus_materi($id_materi);
		unlink($file);
		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('guru/list_materi/' . $data->id_mapel, 'refresh');
	}

	public function ubah_materi()
	{
		$judul_materi = $this->input->post('judul_materi');
		$file = $_FILES['file']['name'];
		$id_materi = $this->input->post('id_materi');
		$materi_lama = $this->input->post('materi_lama');
		$id_mapel = $this->input->post('id_mapel');

		if ($file) {

			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|pptx|xls|xlsx|docx|txt';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file')) {
				$new_materi = $this->upload->data('file_name');
				$data = $this->M_guru->get_listMateri_byId($id_materi);
				$materi = './assets/uploads/' . $data->file;
				unlink($materi);
			}
		} else {

			$new_materi = $materi_lama;
		};
		$id_materi = ['id_materi' => $id_materi];
		$data = [
			'nama_materi' => $judul_materi,
			'file' => $new_materi
		];

		$this->M_guru->ubah_materi($id_materi, $data);
		// die();
		$this->session->set_flashdata('pesan', 'diubah');
		redirect('guru/list_materi/' . $id_mapel, 'refresh');
	}
	public function tambah_pengumuman()
	{
		$judul_pengumuman = $this->input->post('judul_pengumuman');
		$pengumuman = $this->input->post('pengumuman');

		$data = [
			'tanggal_pengumuman' => date('Y-m-d'),
			'judul_pengumuman' => $judul_pengumuman,
			'isi_pengumuman' => $pengumuman

		];

		$this->M_guru->tambah_pengumuman($data);
		$this->session->set_flashdata('pesan', 'ditambahkan');
		redirect('guru/pengumuman', 'refresh');
	}
	public function hapus_pengumuman($id_pengumuman)
	{
		$this->M_guru->hapus_pengumuman($id_pengumuman);
		$this->session->set_flashdata('pesan', 'dihapus');
		redirect('guru/pengumuman', 'refresh');
	}

	public function edit_pengumuman($id_pengumuman)
	{
		$id_pengumuman = ['id_pengumuman' => $id_pengumuman];
		$data = [
			'pengumuman' => $this->M_guru->edit_pengumuman($id_pengumuman)->result()
		];
		$this->load->view('guru_layout/header', $data);
		$this->load->view('guru_layout/sidebar');
		$this->load->view('guru/edit_pengumuman', $data);
		$this->load->view('guru_layout/footer');
	}

	public function ubah_pengumuman()
	{
		$judul_pengumuman = $this->input->post('judul_pengumuman');
		$pengumuman = $this->input->post('pengumuman');
		$id_pengumuman = $this->input->post('id_pengumuman');

		$id_pengumuman = ['id_pengumuman' => $id_pengumuman];
		$data = [
			'judul_pengumuman' => $judul_pengumuman,
			'isi_pengumuman' => $pengumuman

		];
		$this->M_guru->update_pengumuman($id_pengumuman, $data);
		$this->session->set_flashdata('pesan', 'diubah');
		redirect('guru/pengumuman', 'refresh');
	}
}
