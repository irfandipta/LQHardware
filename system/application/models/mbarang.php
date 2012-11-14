<?php

	class MBarang extends Model {
		
		function MBarang(){
			parent::Model();
		}
		
		function daftar($limit, $offset){
			$this->db->from('barang');
			$this->db->limit($limit,$offset);
			$this->db->order_by("nama","asc");
			$query = $this->db->get();
			return $query;
		}
			
	}
?>