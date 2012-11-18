<?php

	class MBarang extends Model {
		var $imagepath;
		var $imagepath_url;
		
		function MBarang(){
			parent::Model();
			
		}
		
		function daftar($limit = array()){
			if ($limit == NULL){
	            return $this->db->get('barang')->result();
			}
			else {				
				$this->db->from('barang');
				$this->db->limit($limit['perpage'],$limit['offset']);
				$this->db->order_by("nama","asc");
				$query = $this->db->get();
				return $query;
			}
		}
		
		function edit($id){
			if($this->input->post('category') !='0')
			{
				$kategori = $this->input->post('category');
				$nama = $this->input->post('nama');
				$harga = $this->input->post('harga');
				$stok = $this->input->post('stok');
				$diskon = $this->input->post('diskon');
				$data = array (
							'nama' => $nama,
							'harga' => $harga,
							'stok' => $stok,
							'diskon' => $diskon,
							'kategori' => $kategori);
				$this->db->where('id',$id);
				$this->db->update('barang',$data);
			}
			if($_FILES['file'] != null);
			{
				
				$this->imagepath = realpath(APPPATH.'../barang/');
				$this->imagepath_url = base_url().'system/barang/';
				
				$config = array(
							'allowed_types' => 'jpg|jpeg|gif|png|bmp',
							'upload_path' => $this->imagepath,
							'file_name' => $this->input->post('nama'),
							'overwrite' => TRUE);
				$this->load->library('upload',$config);
				
				if(!$this->upload->do_upload("file"))
				{
					 $error = array('error' => $this->upload->display_errors());
					 print_r($error);die();
				}
				else
				{
					$datafile = $this->upload->data();
					$nama =$this->input->post('nama');
					$harga =$this->input->post('harga');
					$stok =$this->input->post('stok');
					$diskon =$this->input->post('diskon');
					$gambar = $datafile['file_name'];
					
					$data = array(
								'nama' => $nama,
								'harga' => $harga,
								'stok' => $stok,
								'diskon' => $diskon,
								'image' => $gambar);
					$this->db->where('id',$id);
					$this->db->update('barang',$data);
				}
			}
			if($this->input->post('category') =='0' && $this->input->post('file') == null)
			{
				$nama = $this->input->post('nama');
				$harga = $this->input->post('harga');
				$stok = $this->input->post('stok');
				$diskon = $this->input->post('diskon');
				$data = array (
							'nama' => $nama,
							'harga' => $harga,
							'stok' => $stok,
							'diskon' => $diskon);
				$this->db->where('id',$id);
				$this->db->update('barang',$data);
			}
			
			if($this->input->post('category') !='0' && $this->input->post('file') != null)
			{
				$data = array(
								'nama' => $nama,
								'harga' => $harga,
								'stok' => $stok,
								'diskon' => $diskon,
								'kategori' => $kategori,
								'image' => $gambar);
					$this->db->where('id',$id);
					$this->db->update('barang',$data);
			}
		}
		
		function insert(){
			$this->imagepath = realpath(APPPATH.'../barang/');
			$this->imagepath_url = base_url().'system/barang/';
			
			$config = array(
						'allowed_types' => 'jpg|jpeg|gif|png|bmp',
						'upload_path' => $this->imagepath,
						'file_name' => $this->input->post('nama'));
			$this->load->library('upload',$config);
			
			if(!$this->upload->do_upload("file"))
			{
				 $error = array('error' => $this->upload->display_errors());
				 print_r($error);
			}
			else
			{
				$datafile = $this->upload->data();
				
				$nama =$this->input->post('nama');
				$harga =$this->input->post('harga');
				$stok =$this->input->post('stok');
				$diskon =$this->input->post('diskon');
				$kategori =$this->input->post('category');
				$gambar = $datafile['file_name'];
				
				$data = array(
							'nama' => $nama,
							'harga' => $harga,
							'stok' => $stok,
							'diskon' => $diskon,
							'kategori' => $kategori,
							'image' => $gambar);
				$this->db->insert('barang',$data);
				
			}
		}
		
		function select($id){
			return $this->db->get_where('barang', array('id' => $id))->row();
		}
			
	}
?>