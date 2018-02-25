<?php

class Transportation extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('transportation/tampil');
	}

	function tambah(){
		$this->load->view('transportation/tambah');
	}
}