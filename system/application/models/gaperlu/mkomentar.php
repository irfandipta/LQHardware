<?php
class Mkomentar extends Model {

	function ambil() {
			$ambil = $this->db->get('komentar');
			if ($ambil->num_rows() > 0) {
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
				return $hasil;			
			}
	}

	function tambah() {
		$nama = $this->input->post('nama');
		$url = $this->input->post('url');
		$pesan = $this->input->post('pesan');
		$data = array(
			'nama' => $nama,
			'url' => $url,
			'pesan' => $pesan
			);
		$this->db->insert('komentar', $data);
	}

		function update($id){
			$nama = $this->input->post('nama');
			$url = $this->input->post('url');
			$pesan = $this->input->post('pesan');
			$data = array(
				'nama' => $nama,
				'url' => $url,
				'pesan' => $pesan
				);
	        $this->db->where('id', $id);
	        $this->db->update('komentar', $data);
	  }
	 
		function select($id){
	        return $this->db->get_where('komentar', array('id' => $id))->row();
	  }	

    function hapus($id) {
	       $this->db->delete('komentar', array('id' => $id));
	  }

}
?>
