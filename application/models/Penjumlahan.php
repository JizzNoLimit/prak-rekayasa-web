<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjumlahan extends CI_Model
{
    public function __construct() {
		parent::__construct();
	}
    
 public function tambah($anga1, $anga2)
 {
    return $anga1 + $anga2;
 }   
}
