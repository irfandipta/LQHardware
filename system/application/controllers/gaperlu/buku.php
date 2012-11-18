<?php
class Buku extends Controller {
	
	function index() {
		$this->load->view('buku1');
	}
	
	function semua() {
		$this->load->view('buku1');		
		$this->load->view('penulis1');
	}
}
?>
