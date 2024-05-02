<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    /* class konstruktor */
    function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
    }
    function index()
    {
        $data['data'] = $this->post_model->get_records('tbl_foto'); // tbl_foto adalah nama table
        $this->load->view('home', $data);
    }
    function profil()
    {
        $data['data'] = $this->post_model->get_records('tbl_foto');
        $this->load->view('post/view', $data);
    }

    public function create()
    {
        $this->load->view('post/form_add');
    }

    public function insert()
    {
        $add['foto_ID']        = $this->input->post('');
        $add['judul_foto']     = $this->input->post('judul_foto');
        $add['deskripsi_foto'] = $this->input->post('deskripsi_foto');
        $foto                  = $_FILES['lokasi_file'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/images'; //lokasi penempatan gambar
            $config['allowed_types'] = 'jpg|png|jpeg'; //format yang diterima

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('lokasi_file')) { //lokasi_file=nama kolom datalam tabel
                echo "Upload Gagal!", '<br>', '<small>';
                print_r($this->upload->display_errors());
            } else {
                $add['lokasi_file'] = $this->upload->data('file_name');
            }
        }

        // arahkan ke post_model dengan method insert('nama tabel',$dd dari baris yg atas)
        $this->post_model->insert('tbl_foto', $add);

        // buat notifikasi
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambahkan.</div>');
        redirect(base_url());
    }

    public function form_edit($id)
    {
        $data['data'] = $this->post_model->find_record_by_id('tbl_foto', $id);
        $this->load->view('post/form_edit', $data);
    }

    public function update($id)
    {
        //$add['foto_ID']        = $this->input->post('');
        $add['judul_foto']     = $this->input->post('judul_foto');
        $add['deskripsi_foto'] = $this->input->post('deskripsi_foto');

        $this->post_model->update('tbl_foto', $add, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dirubah</div>');
        redirect(base_url());
    }

    public function delete($id)
    {
        $this->post_model->delete('tbl_foto', $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dihapus </div>');
        redirect(base_url());
    }
}
