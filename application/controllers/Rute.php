<?php

class Rute extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('rute/tampil');
	}

	function tambah(){
		$this->load->view('rute/tambah');
	}
}