<?php
class Ckendaraan extends Controller {
	
	function index() {
	    $this->load->model('mkendaraan','',TRUE);
	    $data['kalimat'] = $this->mkendaraan->mobil();
	    $this->load->view('vkendaraan', $data);
	}
}
?>
