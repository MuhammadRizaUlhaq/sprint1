<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('admin');
	}

	public function tambah_user()
	{
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('user/form',$data); 
	}

	public function lihat_user()
	{
		$data['user'] = null;
		$this->load->view('user/lihat',$data);
	}

	public function edit_form($id){
		$where = array('id' => $id );
		$data['user'] = $this->m_data->tampil_data_id($where,'user')->result();
		$this->load->view('user/edit',$data);
	}

	public function tambah_costumer()
	{
		$this->load->view('costumer/form');
	}

	public function lihat_costumer()
	{
		$this->load->view('costumer/lihat');
	}

	public function tambah_rute()
	{
		$this->load->view('rute/form');
	}

	public function lihat_rute()
	{
		$this->load->view('rute/lihat');
	}

}
