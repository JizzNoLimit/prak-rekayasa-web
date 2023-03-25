<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjumlahan');
    }


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $data = array(
            'title' => 'Latihan Codeigniter - Prak. Rekayasa Web'
        );
        $this->load->helper('url');
        $this->load->view('template/header', $data);
        $this->load->view('index');
        $this->load->view('template/footer');
    }

    public function jumlah_angka($angka1, $angka2)
    {
        $data = array(
            'title' => 'Latihan Codeigniter - Prak. Rekayasa Web', // dakusah
            'angka1' => $angka1,
            'angka2' => $angka2,
            'hasil' => $this->Penjumlahan->tambah($angka1, $angka2)
        );
        $this->load->helper('url'); //dakusah
        $this->load->view('template/header', $data); //dakusah
        $this->load->view('penjumlahan', $data);
        $this->load->view('template/footer'); // dakuah
    }
}
