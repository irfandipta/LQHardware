<?php
class CSecure extends Controller {
	var $user = "";
	
	function CSecure(){
		parent::Controller();
		session_start();
	}
	
	function index(){
		$this->load->view('vsecure');
	}
	
	function cekuser(){
		$this->load->model('msecure');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['result'] = $this->msecure->cekdb();
		
		if($data['result'] != null)
		{
			return "yes";
		}
		else
		{
			return "no";
		}
	}
	
	function usermasuk()
	{
		if($this->cekuser() == "yes")
		{
			$this->load->model('msecure');
			$data['username'] = $this->input->post('username');
			$newdata = array('username' => $data['username'],'login' => TRUE);
			$this->session->set_userdata('username',$data['username']);
			$this->session->set_userdata('login',TRUE);
			$data['tampil'] = $this->msecure->cekdb();
			$data['jenis'] = "Admin";
			//$this->load->view('admin/vdashboard',$data);
			
			
			$this->load->model('mbarang');
			$data['daftarbarang'] = $this->mbarang->daftar(1,0);
			$this->load->library('pagination');
			
			$config['base_url'] = base_url().'index.php/csecure/usermasuk/';
			$config['per_page'] = 20;
			$config['num_links'] = 20;
			$config['total_rows'] = 200;
			$this->pagination->initialize($config);
			
			$data['jenis'] = 'Manajemen_Barang';
			$data['result'] = $this->db->get('barang', $config['per_page'], $this->uri->segment(3));
			
			$this->load->view('admin/vdashboard', $data);
		}
	}
}
?>