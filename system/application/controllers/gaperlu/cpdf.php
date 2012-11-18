<?php
Class Conpdf extends Controller {

   function index(){
	$this->load->library('cezpdf');
	$this->cezpdf->addText(250, 820, 16,'<b> Daftar Alumni </b>');
	$data = array(
		array(
			'No' => 1,
			'Nim' => '2007101002',
			'Nama' => 'Agus Saputra, A.Md.',
			'JK' => 'L',
			'Prodi' => 'D3',
			'Jurusan' => 'Manajemen Informatika'),
		array(
			'No' => 2,
			'Nim' => '2007101015',
			'Nama' => 'Feni Agustin, A.Md.',
			'JK' => 'P',
			'Prodi' => 'D3',
			'Jurusan' => 'Manajemen Informatika'),
		array(
			'No' => 3,
			'Nim' => '2007101016',
			'Nama' => 'Fredi Sutejo, A.Md.',
			'JK' => 'L',
			'Prodi' => 'D3',
			'Jurusan' => 'Manajemen Informatika'),
		array(
			'No' => 4,
			'Nim' => '2007101020',
			'Nama' => 'Helmi Dita Gumilar, A.Md.',
			'JK' => 'L',
			'Prodi' => 'D3',
			'Jurusan' => 'Manajemen Informatika'),
		array(
			'No'=> 5,
			'Nim' => '2007101021',
			'Nama' => 'Nathanael Kurniawan, S.Kom.',
			'JK' => 'L',
			'Prodi' => 'S1',
			'Jurusan' => 'Sistem Informasi')
	);
	$this->cezpdf->ezTable($data);
	$this->cezpdf->ezStartPageNumbers(320, 15, 8);
	$this->cezpdf->ezStream();
   }
}
?>
