<?php

	class MCategory extends Model {
		
		function MCategory(){
			parent::Model();
		}
		
		function getdata($induk=null){
			$data = array();
			$this->db->from('category');
			$this->db->where('pName',$induk);
			$result = $this->db->get();
		
			foreach($result->result() as $row)
			{
				$data[] = array(
						'id'	=>$row->id,
						'nama'	=>$row->nama,
						// recursive
						'child'	=>$this->getdata($row->nama)
					);
			}
			return $data;
		}
		
		function getchild($category){
			$data = array();
			$this->db->from('category');
			$this->db->where('pName',$category);
			$result = $this->db->get();
			foreach($result->result() as $row)
			{
				$data[$row->nama] = $row->nama;
			}
			return $data;
		}
			
	}
?>