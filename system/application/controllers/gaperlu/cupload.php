<?php
class Cupload extends Controller {
	
	function index() {
		$this->load->model('mupload');
		if ($this->input->post('upload')) {
			
			
			$this->mupload->do_upload();
		}
		$data['hasil'] = $this->mupload->ambil();
		$this->load->view('vupload', $data);
	}
	
	function download($gambar){
		$this->load->helper('download');
		$data = file_get_contents("./system/gambar/".$gambar);
		$nama = 'images1.jpg';
		force_download($nama, $data);
	}
}
?>
