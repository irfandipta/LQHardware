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
	
	function usermasuk($offset = 0){
		if($this->session->userdata('login') == TRUE){
			$this->load->model('mbarang');
			$this->load->library('pagination');
			
			//Pagination
			$perpage = 20;
			$config['base_url'] = base_url().'index.php/csecure/usermasuk/';
			$config['per_page'] = $perpage;
			$config['total_rows'] = count($this->mbarang->daftar());
			$this->pagination->initialize($config);
			
			$data['jenis'] = 'Manajemen_Barang';
			$data['daftarbarang'] = $this->mbarang->daftar(array('perpage' => $perpage, 'offset' => $offset));
 			if($data['daftarbarang'] == NULL){
				$data['empty'] = 'Empty Table';
			}
			$this->load->view('admin/vdashboard', $data);
		}
		else if($this->cekuser() == "yes")
		{
			//Cek User
			$this->load->model('msecure');
			$data['username'] = $this->input->post('username');
			$newdata = array('username' => $data['username'],'login' => TRUE);
			$this->session->set_userdata('username',$data['username']);
			$this->session->set_userdata('login',TRUE);
			$data['tampil'] = $this->msecure->cekdb();
			$data['jenis'] = "Admin";
			
			//Load Tabel Barang
			$this->load->model('mbarang');
			$this->load->library('pagination');
			
			//Pagination
			$perpage = 20;
			$config['base_url'] = base_url().'index.php/csecure/usermasuk/';
			$config['per_page'] = $perpage;
			$config['total_rows'] = count($this->mbarang->daftar());
			$this->pagination->initialize($config);
			
			$data['jenis'] = 'Manajemen_Barang';
			$data['daftarbarang'] = $this->mbarang->daftar(array('perpage' => $perpage, 'offset' => $offset));
 
			$this->load->view('admin/vdashboard', $data);
		}
		else{
			redirect('csecure');
		}
	}
	
	function editbarang($id = null){
		if($this->session->userdata('login') == TRUE){
			if($_POST == NULL){
				$this->load->model('mbarang');
				$data['barang'] = $this->mbarang->select($id);
				$data['jenis'] = 'Edit_Barang';
				
				$this->load->model('mcategory');
				$data['category'] = array('0'=>'--- Choose ---') + $this->mcategory->getchild(null);
				
				$this->load->view('admin/veditbarang',$data);
			}
			else{
				$this->load->model('mbarang');
				$this->mbarang->edit($id);
				redirect('csecure/usermasuk');
			}
		}
		else{
			redirect('csecure');
		}
	}
	
	function uploadbarang(){
		if($this->session->userdata('login') == TRUE){
			$this->load->model('mcategory');
			$data['category'] = array(''=>'--- Choose ---') + $this->mcategory->getchild(null);
			$data['jenis'] = 'Insert_Barang';
			
			$this->load->view('admin/vinsertbarang',$data);
		}
		else{
			redirect('csecure');
		}
	}
	
	function showchild()
	{
		$this->load->model('mcategory');
		$parent = $this->uri->segment(3);
		$combo_level = $this->uri->segment(4);
		$childs = $this->mcategory->getchild($parent);
		if(count($childs) > 0)
		{
			$combo_level ++;
			$childs = array(''=>'--- Choose ---') + $childs;
			echo form_dropdown('category',$childs,'','onchange="show_extra_combo(this,'.$combo_level.')"');
		}
		else
		{
			echo "";
		}
	}
	
	function insertbarang(){
		if($this->session->userdata('login') == TRUE){
			$this->load->model('mbarang');
			$this->mbarang->insert();
			redirect('csecure/uploadbarang');
		}
		else{
			redirect('csecure');
		}
	}
	
}
?>