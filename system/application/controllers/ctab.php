<?php
class Ctab extends Controller {
	
	function index() {
		$data['tab1'] = "Ini adalah tab1";
		$data['tab2'] = "Ini adalah tab2";
		$data['tab3'] = "Ini adalah tab3";
		$data['tab4'] = "Ini adalah tab4";
		$this->load->view('vtab', $data);
	}
}
?>
