<?php
class Ccaptcha extends Controller {
	
	function buatcaptcha() {
		$this->load->model('mcaptcha');
		$data['captcha'] = $this->mcaptcha->createcaptcha();
        $this->load->view('vcaptcha', $data); 
    }
	
	function validasi() {
		$captcha = $_POST['captcha'];
         
		if($captcha!=""){
			$this->load->model('mcaptcha');
			$benar = $this->mcaptcha->captchabenar($_POST['captcha']);
			if($benar){
				$data['pesan'] = "Sukses! Captcha Benar.";
			}
			else {
				$data['pesan'] = 'Gagal! Captcha Salah';
			}
		}
		else {
			$data['pesan'] = 'Captcha belum diisi!';
		}

		$this->load->view('hasil',$data);
    } 
}
?>