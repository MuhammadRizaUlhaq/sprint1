<?php

class User extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
        $this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->m_user->tampil_user()->result();
		$this->load->view('user/tampil',$data);
	}

	function tambah(){
		$this->load->view('user/tambah'); 
	}

	function tambah_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
			);

		$this->m_user->input_user($data, 'user');
		redirect('user/index');
	}

	function hapus($id){
		$where = array('userid' => $id);
		$this->m_user->hapus_user($where,'user');
		redirect('user/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_user->edit_user($where,'user')->result();
		$this->load->view('user/edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
			);

		$where = array(
			'id' => $id
		);

		$this->m_user->update_user($where,$data,'user');
		redirect('user/index');
	}
	
}
