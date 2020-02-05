<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        // $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['title'] = "Jadwal Survey";

        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('jadwal/index', $data);
		$this->load->view('templates/footer', $data);
    }

    // protected function get_data_jadwal()
	// {
	// 	$list = $this->Barang_model->get_datatables();
	// 	$data = array();
	// 	$no = $_POST['start'];
	// 	foreach ($list as $field) {
	// 		$no++;
	// 		$row = array();
	// 		$row[] = $no;
	// 		$row[] = $field->nama_proyek;
	// 		$row[] = $field->tanggal;
	// 		$row[] = $field->no_tlp;
	// 		$row[] = $field->alamat;
	// 		$row[] = $field->deskripsi;

	// 	    $data[] = $row;
	// 	}

	// 	$output = array(
	// 		"draw" => $_POST['draw'],
	// 		"recordsTotal" => $this->Jadwal_model->count_all(),
	// 		"recordsFiltered" => $this->Jadwal_model->count_filtered(),
	// 		"data" => $data,
	// 	);
	// 	//output dalam format JSON
	// 	echo json_encode($output);
	// }

}
