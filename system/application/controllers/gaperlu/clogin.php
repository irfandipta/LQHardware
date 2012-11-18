<?php
class Clogin extends Controller {
	
	function Clogin() {
		parent::Controller();
		$this->load->model('mlogin');
		$this->load->library('session');
	}
	
	function index() {
		$this->load->view('vlogin');
	}
	
	function cekuser() {
		$data['username'] = $this->input->post('username');
		$data['pass'] = $this->input->post('pass');
		$data['hasil'] = $this->mlogin->cekdb();
		
		if($data['hasil'] == null) {
			return "no";
		}
		else {
			return "yes";
		}
	}
	
	function usermasuk() {
		if($this->cekuser() == "yes") {
			$data['username'] = $this->input->post('username');
			$newdata = array('username' => $data['username'], 'status' => 'ok');
			$this->session->set_userdata($newdata);
			$data['tampil'] = $this->mlogin->cekdb();
			$this->load->view('loginsukses', $data);
		}
		else {
			echo "Login gagal";
		}
	}
	
	function logout() {
		$this->session->sess_destroy();
		echo "Anda telah keluar (logout)";
	}
}
?>