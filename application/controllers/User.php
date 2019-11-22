<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Pak Deh Furniture';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array(); {

            $this->load->model('Daftar_model');

            //pagination
            $this->load->library('pagination');

            //searching
            if ($this->input->post('submit')) {
                $data['keyword'] = $this->input->post('keyword');
                $this->session->set_userdata('keyword', $data['keyword']);
            } else {
                $data['keyword'] = $this->session->userdata('keyword');
            }

            //konfigurasi

            $this->db->like('kategori', $data['keyword']);
            $this->db->like('nama', $data['keyword']);
            $this->db->like('harga', $data['keyword']);
            $this->db->like('tanggal', $data['keyword']);
            $this->db->like('toko', $data['keyword']);
            $this->db->from('daftar');

            //pagination 

            $config['base_url'] = 'http://localhost/sistempos/user/index';

            //style
            $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
            $config['full_tag_close'] = ' <ul></nav>';

            $config['first_link'] = "Awal";
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = "Akhir";
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';

            $config['next_link'] = "&raquo";
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';

            $config['prev_link'] = "&laquo";
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');

            $config['total_rows'] = $this->db->count_all_results();
            $config['per_page'] = 5;

            //inisialisasi
            $this->pagination->initialize($config);


            $data['mulai'] = $this->uri->segment('3');
            $data['daftar'] = $this->Daftar_model->getDaftar($config['per_page'], $data['mulai'], $data['keyword']);
            //end pagination

            date_default_timezone_set('Asia/Jakarta');


            $this->load->view('templates/user_header', $data);
            $this->load->view('user/index', $data);
            // $this->load->view('templates/user_footer', $data);
        }
    }

    public function view($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Daftar_model');
        $data['daftar'] = $this->Daftar_model->getBarangById($id); {

            $this->load->view('templates/user_header', $data);
            $this->load->view('user/view');
            // $this->load->view('templates/user_footer', $data);
        }
    }
    public function hitung()
    {
        $data['title'] = 'Form Hitung';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Daftar_model');
        $data['daftar'] = $this->Daftar_model->getAllDaftar(); {

            $this->load->view('templates/user_header', $data);
            $this->load->view('user/hitung');
        }
    }
}
