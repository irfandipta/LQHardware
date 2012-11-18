<?php
class Mlogin extends Model {
	
	function cekdb() {
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		
		$this->db->where('username', $username);
		$this->db->where('pass', $pass);
		$query = $this->db->get('user');
		return $query->result();
	}
}
?>