<?php

	class MSecure extends Model {
		
		function MSecure(){
			parent::Model();
		}
		
		function cekdb(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('profil');
			return $query->result();
		}
			
	}
?>