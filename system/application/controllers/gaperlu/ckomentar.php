<?php
class Ckomentar extends Controller {
	
  function index() {
			$this->load->model('mkomentar');
			$data['hasil'] = $this->mkomentar->ambil();
			$this->load->view('vkomentar', $data);
	}

	function tambahdata() {			
			if ($this->input->post('submit')) {
				$this->load->model('mkomentar');
				$this->mkomentar->tambah();
				redirect('ckomentar/index');
			}
		$this->load->view('tambahkomentar');
	}
	
  function updatedata($id) {
		    if($_POST==NULL) {
		       $this->load->model('mkomentar');
	         $data['hasil'] = $this->mkomentar->select($id);
	         $this->load->view('ubahkomentar', $data);
	        }
	        else {
		          $this->load->model('mkomentar');
	            $this->mkomentar->update($id);
	            redirect('ckomentar/index');
	        }
	}
	
	function hapusdata($id) {
	  $this->db->delete('komentar', array('id' => $id));
	  redirect('ckomentar/index');
	}
	
	function ckomentar() {
	parent::Controller();
	$this->load->scaffolding('komentar');
  }

}
?>
