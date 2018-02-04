<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('tables',$data);
	}

	function tambah(){
		$this->load->view('v_register');
	}

	function tambah_aksi(){
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
		$this->m_data->input_data($data,'user');
		redirect('login');
	}

	function update(){
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
		$this->m_data->input_data($data,'user');
		redirect('login/table');
		$where = array(
			'id' => $id
		);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('login/table');
	}

	function edit($id){
		if ($this->input->post('kirim')) {
			$this->m_data->update($id);
			redirect('crud','refresh');
		}
		$data['user']=$this->m_data->view_by($id);
		$this->load->view('v_edit',$data);
	}

}