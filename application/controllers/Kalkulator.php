<?php
class Kalkulator extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('KalkulatorModel');
    }

    public function index()
    {
        $angka1 = 0;
        $angka2 = 0;
        $opr = '+';
        if(isset($_POST["hitung"])) {
            $angka1 = $this->input->post('angka1');
            $angka2 = $this->input->post('angka2');
            $opr = $this->input->post('operator');
        }

        $data = array(
            'hasil' => $this->KalkulatorModel->index($angka1, $angka2, $opr)
        );
        $this->load->view('kalkulator', $data);
    }
}