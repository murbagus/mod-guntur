<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
		$this->load->model('Daftar_model');
		date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['daftar'] = $this->db->query(
			"SELECT * FROM daftar"
		)->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
		}
		
		public function tambahdaftar(){
			
			$data = [
				'kategori'	=> $this->input->post('kategori'),
				'nama'	=> $this->input->post('nama'),
				'harga'	=> $this->input->post('harga'),
				'tanggal'	=> $this->input->post('tanggal'),
				'toko'	=> $this->input->post('toko')
			];
			// die(print_r($data));
			 $this->db->insert('daftar', $data);
			 redirect('admin');
		}

		public function daftar_update(){
			
			$kategori = $this->input->post('kategori');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$tanggal = $this->input->post('tanggal');
			$toko = $this->input->post('toko');

			$where = [
				'id' => $id
			];

			$data = [
				'kategori' => $kategori,
				'nama' => $nama,
				'harga' => $harga,
				'tanggal' => $tanggal,
				'toko' => $toko
			];
		
			$this->Daftar_model->update_data($where,$data,'daftar');
			redirect('admin');

	}
	
	public function daftar_hapus($id) {
		$where = [
			'id' => $id
		];

		$this->Daftar_model->delete_data($where, 'daftar');
		redirect('admin');
	}
}

