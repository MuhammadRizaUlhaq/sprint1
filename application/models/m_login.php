<?php

class m_login extends CI_Models {
	
	public function getLoginData($username, $password){
		$u = mysql_real_escape_string($username);
		$p = mysql_real_escape_string($password);
		$cek_login = $this->db->get_where('user', array('username' => $u, 'password' => $p));
		if($cek_login->num_rows() > 0){
			$qad = $cek_login->row();
			if($u == $qad->username && $p == $qad->password){
				if($qad->status == 'admin')
					header('location:'.base_url().'admin');
				else
					header('location:'.base_url().'welcome');
			}
		}
	}

}
