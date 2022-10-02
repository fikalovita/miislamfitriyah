<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_admin');
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data = [
			'title' => "MI Islam Fitriyah | Home",
			'about' => $this->M_home->get_about()->result(),
			'sambutan' => $this->M_admin->get_sambutan()->result(),
			'artikel' => $this->M_home->get_artikel()->result(),
			'slider' => $this->M_admin->get_slider()->result(),
			'ekskul' => $this->M_admin->get_ekskul(),
			'guru' => $this->M_admin->get_guru()->num_rows(),
			'prestasi' => $this->M_admin->get_prestasi()->num_rows(),
			'sejarah' => $this->M_home->get_sejarah()->result(),
			'misi' => $this->M_home->get_misi()->result(),
			'visi' => $this->M_home->get_visi()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/index', $data);
		$this->load->view('home/layout/footer', $data);
	}

	public function login()
	{
		$this->load->view('home/layout/header');
		$this->load->view('home/layout/navbar');
		$this->load->view('home/login');
		$this->load->view('home/layout/footer');
	}
	public function profile()
	{
		$data = [
			'title' => "MI Islam Fitriyah | Profile",
			'about' => $this->M_home->get_about()->result(),
			'sejarah' => $this->M_home->get_sejarah()->result(),
			'misi' => $this->M_home->get_misi()->result(),
			'visi' => $this->M_home->get_visi()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/profile', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function blog()
	{
		$data = [
			'title' => "MI Islam Fitriyah | Blog",
			'blog' => $this->M_admin->get_artikel()->result(),
			'about' => $this->M_home->get_about()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/blog', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function prestasi()
	{
		$data = [
			'title' => "MI Islam Fitriyah | Prestasi",
			'prestasi' => $this->M_admin->get_prestasi()->result(),
			'about' => $this->M_home->get_about()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/prestasi', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function detail_artikel($id_artikel)
	{

		$id_artikel  = ['id_artikel' => $id_artikel];
		$data = [
			'artikel' => $this->M_admin->detail_artikel($id_artikel, 'artikel')->result(),
			'about' => $this->M_home->get_artikeL_detail()->result(),
		];

		$this->load->view('home/layout/header');
		$this->load->view('home/layout/navbar');
		$this->load->view('home/detail_artikel', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function elearning()
	{
		$data = [
			'title' => "MI Islam Fitriyah | E-Learning",
			'about' => $this->M_home->get_about()->result(),
			'sejarah' => $this->M_home->get_sejarah()->result(),
			'misi' => $this->M_home->get_misi()->result(),
			'visi' => $this->M_home->get_visi()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/elearning');
		$this->load->view('home/layout/footer', $data);
	}
	public function pengumuman()
	{
		$data = [
			'title' => "MI Islam Fitriyah | E-Learning",
			'pengumuman' => $this->M_guru->get_pengumuman()->result()
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/pengumuman', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function kelas_digital()
	{
		$data = [
			'title' => "MI Islam Fitriyah | E-Learning",
			'about' => $this->M_home->get_about()->result(),
			'kelas' => $this->M_home->get_kelas()->result()
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/kelas_digital', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function dokumentasi()
	{
		$data = [
			'title' => "MI Islam Fitriyah | E-Learning",
			'dokumentasi' => $this->M_admin->get_dokumentasi()->result()
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/dokumentasi', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function detail_sejarah()
	{
		$data = [
			'title' => "MI Islam Fitriyah | Detail sejarah",
			'about' => $this->M_home->get_about()->result(),
			'sejarah' => $this->M_home->get_sejarah()->result(),
			'misi' => $this->M_home->get_misi()->result(),
			'visi' => $this->M_home->get_visi()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/detail_sejarah', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function detail_visi()
	{
		$data = [
			'title' => "MI Islam Fitriyah | Detail Visi",
			'about' => $this->M_home->get_about()->result(),
			'sejarah' => $this->M_home->get_sejarah()->result(),
			'misi' => $this->M_home->get_misi()->result(),
			'visi' => $this->M_home->get_visi()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/detail_visi', $data);
		$this->load->view('home/layout/footer', $data);
	}
	public function detail_misi()
	{
		$data = [
			'title' => "MI Islam Fitriyah | Detail Misi",
			'about' => $this->M_home->get_about()->result(),
			'sejarah' => $this->M_home->get_sejarah()->result(),
			'misi' => $this->M_home->get_misi()->result(),
			'visi' => $this->M_home->get_visi()->result(),
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/detail_misi', $data);
		$this->load->view('home/layout/footer', $data);
	}

	public function detail_sambutan()
	{
		$data = [
			'about' => $this->M_home->get_about()->result(),
			'sambutan' => $this->M_admin->get_sambutan()->result(),
			'sejarah' => $this->M_home->get_sejarah()->result(),
			'misi' => $this->M_home->get_misi()->result(),
			'visi' => $this->M_home->get_visi()->result(),
		];

		$this->load->view('home/layout/header', $data);
		$this->load->view('home/layout/navbar');
		$this->load->view('home/detail_sambutan', $data);
		$this->load->view('home/layout/footer', $data);
	}
}
