<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    public function aksi_login_guru()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_login->aksi_login_guru($username, $password)->row_array();

        if ($user) {
            $data = [
                'id_guru' => $user['id_guru'],
                'nuptk' => $user['nuptk'],
                'nama_guru' => $user['nama_guru'],
                'tempat_lahir' => $user['tempat_lahir'],
                'tgl_lahir' => $user['tgl_lahir'],
                'jenis_kelamin' => $user['jenis_kelamin'],
                'jabatan' => $user['jabatan'],
                'foto' => $user['foto'],
                'username' => $user['username'],
                'password' => $user['password'],
                'guru' => true

            ];

            $this->session->set_userdata($data);
            redirect('guru');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger my-2" role="alert">
				<strong>username dan password salah</strong>
				</div>');
            redirect('home/login');
        }
    }
    public function guru_logout()
    {
        $this->session->sess_destroy();
        redirect('home/login');
    }
    public function admin()
    {
        $data = [
            'title' => 'MI Islam Fitriyah | Login Admin'
        ];
        $this->load->view('admin_layout/header', $data);
        $this->load->view('admin/login');
        $this->load->view('admin_layout/footer');
    }

    public function aksi_login_admin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->M_login->aksi_login_admin($username, $password)->row_array();
        if ($user) {
            $data = [
                'id_admin ' => $user['id_admin '],
                'nama_admin' => $user['nama_admin'],
                'foto_admin' => $user['foto_admin'],
                'username_admin' => $user['username_admin'],
                'password_admin' => $user['password_admin'],
                'admin' => true
            ];

            $this->session->set_userdata($data);
            redirect('admin');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger my-2" role="alert">
				<strong>username dan password salah</strong>
				</div>');
            redirect('login/admin');
        }
    }
    public function admin_logout()
    {
        $this->session->sess_destroy();
        redirect('login/admin');
    }
}
