<?php

class KalkulatorModel extends CI_Model {
    function __construct(){
        parent::__construct();  
    }

    public function index($angka1, $angka2, $opr)
    {
        $total = 0;
        if ($opr == "*") {
            $total = $angka1 * $angka2;
        } elseif ($opr == "/") {
            $total = $angka1 / $angka2;
        } elseif ($opr == "+") {
            $total = $angka1 + $angka2;
        } elseif ($opr == "-") {
            $total = $angka1 + $angka2;
        }
        return $total;
    }
}