<?php

class Customer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('customer/tampil');
	}

	function tambah(){
		$this->load->view('customer/tambah');
	}
}