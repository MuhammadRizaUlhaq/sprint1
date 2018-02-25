<?php

class Reservation extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('reservation/tampil');
	}

	function tambah(){
		$this->load->view('reservation/tambah');
	}
}