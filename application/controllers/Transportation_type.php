<?php

class Transportation_type extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('transportation_type/tampil');
	}

	function tambah(){
		$this->load->view('transportation_type/tambah');
	}
}