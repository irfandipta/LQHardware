<?php
class Mupload extends Model {
	var $gallerypath;
	var $gallery_path_url;
	
	function Mupload(){
		parent::Model();
		$this->gallerypath = realpath(APPPATH . '../gambar');
		$this->gallery_path_url = base_url().'system/gambar/';
	}
	
	function do_upload() {
		$konfigurasi = array(
			'allowed_types' =>'jpg|jpeg|gif|png|bmp',
			'upload_path' => $this->gallerypath
		);
		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload();
		$datafile = $this->upload->data();
	
		$konfigurasi = array(
			'source_image' => $datafile['full_path'],
			'new_image' => $this->gallerypath . '/thumbnails',
			'maintain_ration' => true,
			'width' => 160,
			'height' =>120
		);

		$this->load->library('image_lib', $konfigurasi);
		$this->image_lib->resize();
		$nama = $this->input->post('nama');
			$userfile = $_FILES['userfile']['name'];
			$data = array(
				'nama' => $nama,
				'gambar' => $userfile
			);
			$this->db->insert('upload', $data);
	}


	function ambil() {
		$files = scandir($this->gallerypath);
		$files = array_diff($files, array('.','..','thumbnails'));
		
		$ambil = $this->db->get('upload');
		if ($ambil->num_rows() > 0) {
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;			
		}
	}
}
?>