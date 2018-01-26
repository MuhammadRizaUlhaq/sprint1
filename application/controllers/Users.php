<?php
	class Users extends CI_Controller{
		function index(){
			$this->load->model('user_m');

			$data['tbusers'] = $this->user_m->gets();
			$this->load->view('User_v', $data);
		}
		function del($id){
			$this->load->model('user_v');

			$this->user_m->del($id);
			redirect(Users)
		}
	}