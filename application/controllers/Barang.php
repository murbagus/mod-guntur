<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Barang_model');
	}

	public function index()
	{
        $data['title'] = "Barangku";

        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('barang/index', $data);
		 $this->load->view('templates/footer', $data);
	}

	// public function get_data_barang()
	// {
	// 	$list = $this->Barang_model->get_datatables();
	// 	$data = array();
	// 	$no = $_POST['start'];
	// 	foreach ($list as $field) {
	// 		$no++;
	// 		$row = array();
	// 		$row[] = $no;
	// 		$row[] = $field->kategori;
	// 		$row[] = $field->nama;
	// 		$row[] = $field->harga;
	// 		$row[] = $field->tanggal;
	// 		$row[] = $field->toko;
			
	// 		$data[] = $row;
	// 	}

	// 	$output = array(
	// 		"draw" => $_POST['draw'],
	// 		"recordsTotal" => $this->Barang_model->count_all(),
	// 		"recordsFiltered" => $this->Barang_model->count_filtered(),
	// 		"data" => $data,
	// 	);
	// 	//output dalam format JSON
	// 	echo json_encode($output);
	// }
}
