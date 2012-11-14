<?php
class Cemail extends Controller {
	
	function index() {
		$this->load->library('email');
		$this->email->from('agus@localhost', 'Agus Saputra');
		$this->email->to('agus@localhost');
		$this->email->subject('Tes Email');
		$this->email->message('Ini adalah tes dasar Email');
		if ($this->email->send()) {
			echo 'Email berhasil dikirim';
		}
		else {
			echo 'Email gagal';
		}
	}
	
	function form() {
		if ($this->input->post('submit')) {
			$this->load->library('email');
			$nama = $this->input->post('nama');
			$from = $this->input->post('from');
			$subjek = $this->input->post('subjek');
			$message = $this->input->post('message');
		
			$this->email->from($from, $nama);
			$this->email->to('agus@localhost');
			$this->email->subject($subjek);
			$this->email->message($message);
			if ($this->email->send()) {
				echo 'Email telah dikirimkan';
			}
			else {
				echo 'Email gagal';
			}
		}
		$this->load->view('form');
	}
}
?>