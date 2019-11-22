<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
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

            $config['base_url'] = 'http://localhost/sistempos/admin/index';

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
            date_default_timezone_set('Asia/Jakarta');

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('daftar');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array(); {

            date_default_timezone_set('Asia/Jakarta');

            $this->form_validation->set_rules('kategori', 'Kategori', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|date');
            $this->form_validation->set_rules('toko', 'Toko', 'required');
            if ($this->form_validation->run() == FALSE) {

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/tambah', $data);
                $this->load->view('templates/footer');
            } else {
                $data = [
                    "kategori" => $this->input->post('kategori', true),
                    "nama" => $this->input->post('nama', true),
                    "harga" => $this->input->post('harga', true),
                    "tanggal" => $this->input->post('tanggal', true),
                    "toko" => $this->input->post('toko', true)

                ];

                $this->db->insert('daftar', $data);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin');
            }
        }
    }

    public function view($id)
    {
        $data['title'] = 'Detail Data Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Daftar_model');
        $data['daftar'] = $this->Daftar_model->getBarangById($id); {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/view', $data);
            $this->load->view('templates/footer');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Daftar_model');
        $data['daftar'] = $this->Daftar_model->getBarangById($id); {

            date_default_timezone_set('Asia/Jakarta');
            $this->form_validation->set_rules('kategori', 'Kategori', 'required');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|date');
            $this->form_validation->set_rules('toko', 'Toko', 'required');
            if ($this->form_validation->run() == FALSE) {

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $data = [
                    "kategori" => $this->input->post('kategori', true),
                    "nama" => $this->input->post('nama', true),
                    "harga" => $this->input->post('harga', true),
                    "tanggal" => $this->input->post('tanggal', true),
                    "toko" => $this->input->post('toko', true)

                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('daftar', $data);

                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin');
            }
        }
    }
}
