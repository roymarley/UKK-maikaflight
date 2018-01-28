<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function view_by($id){
		$this->db->where('id', $id);
		return $this->db->get('user')->row();
	}

	// function update_data($where,$data,$table){
	// 	$this->db->where($where);
	// 	$this->db->update($table,$data);
	// }	

	function update($id){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$level = $this->input->post('level');
		$foto = $this->input->post('foto');
		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'level' => $level,
			'foto' => $foto
		);
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
}