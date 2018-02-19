<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	function tampil_user(){
		return $this->db->get('user');
	}

	function input_user($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_user($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
