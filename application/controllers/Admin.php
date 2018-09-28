<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
	}

	function index(){
		$id_seksi=$this->session->userdata('id_seksi');
		if($this->session->userdata('userstatus') == "admin" || $this->session->userdata('userstatus') == "pemantau" || $this->session->userdata('userstatus') == "userkab" )
		{
			$data['kegiatan'] = $this->m_rental->keg_terakhir('bps_detil_keg')->result();
			$data['deadline'] = $this->m_rental->warning('bps_detil_keg')->result();
			$data['timeline'] = $this->m_rental->get_data('bps_detil_keg')->result();
			$data['late'] = $this->m_rental->get_telat('bps_detil_keg')->result();
		}
		else
		{
			$data['kegiatan'] = $this->m_rental->keg_terakhir_user('bps_detil_keg',$id_seksi)->result();
			$data['deadline'] = $this->m_rental->warning_user('bps_detil_keg',$id_seksi)->result();
		}	
		$this->load->view('user/header');
		$this->load->view('konten/dashboard',$data);
		$this->load->view('user/footer');
	}

	function kosong(){
		$this->load->view('user/header');
		$this->load->view('konten/comingsoon');
		$this->load->view('user/footer');
	}

	function evaluasiadd(){
		$data['masalah'] = $this->m_rental->get_data('bps_detil_keg')->result();
		$this->load->view('user/header');
		$this->load->view('konten/formevaluasi',$data);
		$this->load->view('user/footer');
	}

	function timelinekab(){
		$data['timeline'] = $this->m_rental->get_data('bps_detil_keg')->result();
		$this->load->view('user/header');
		$this->load->view('konten/timelinekab',$data);
		$this->load->view('user/footer');
	}

	function uploadsop(){
		if($this->session->userdata('userstatus') == "admin" || $this->session->userdata('userstatus') == "pemantau" )
		{
			$data['kegiatan'] = $this->m_rental->joinkegiatan('bps_detil_keg')->result();
			$this->load->view('user/header');
			$this->load->view('konten/uploadsop',$data);
			$this->load->view('user/footer');
		}
		else
		{
		$id_seksi=$this->session->userdata('id_seksi');
		$data['kegiatan'] = $this->m_rental->joinkegiatan2('bps_detil_keg',$id_seksi)->result();
		$this->load->view('user/header');
		$this->load->view('konten/uploadsop',$data);
		$this->load->view('user/footer');
		}
	}
	function tambahkegiatan(){
		//$data['transaksi'] = $this->db->query("select * from transaksi order by transaksi_id desc limit 10")->result();
		//$data['kostumer'] = $this->db->query("select * from kostumer order by kostumer_id desc limit 10")->result();
		//$data['mobil'] = $this->db->query("select * from mobil order by mobil_id desc limit 10")->result();

		$this->load->view('user/header');
		$this->load->view('konten/formkegiatan');
		$this->load->view('user/footer');
	}	

	function tambahmasalah()
	{
		$data['masalah'] = $this->m_rental->get_data('bps_detil_keg')->result();
		$this->load->view('user/header');
		$this->load->view('konten/formmasalah',$data);
		$this->load->view('user/footer');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome?pesan=logout');
	}

	function ganti_password(){
		$this->load->view('user/header');
		$this->load->view('konten/ganti_pass');
		$this->load->view('user/footer');
	}	

	
	function tambah_user(){
		$this->load->view('user/header');
		$this->load->view('konten/formuser');
		$this->load->view('user/footer');
	}	


	function update_evaluasi()
	{
		$kabupaten = $this->input->post('kabupaten');
		$data= array(
			'bps_telat' => implode(",",$this->input->post('kabupaten'))  
		);
		$w = array(
			'id_detil' => $this->input->post('id_detil')
		);
		$this->m_rental->update_data($w,$data,'bps_detil_keg');			
		redirect(base_url().'admin/evaluasiadd?pesan=berhasil');
	}	

	function ganti_password_act(){
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');				
		$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');

		if($this->form_validation->run() != false){
			$data = array(
				'admin_password' => md5($pass_baru)
			);
			$w = array(
				'admin_id' => $this->session->userdata('id')
			);			
			$this->m_rental->update_data($w,$data,'admin');			
			redirect(base_url().'admin/ganti_password?pesan=berhasil');						
		}else{
			$this->load->view('user/header');
			$this->load->view('konten/ganti_pass');
			$this->load->view('user/footer');
		}
	}	
	

	function tambah_user_act(){
		$namapengguna = $this->input->post('namapengguna');
		$seksi = $this->input->post('seksi');
		$status = "user";
		$username = $this->input->post('username');
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');				
		$this->form_validation->set_rules('pass_baru','Password','required|matches[ulang_pass]');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('namapengguna','Nama Pengguna','required');
		$this->form_validation->set_rules('ulang_pass','Ulang Password','required');

		if($this->form_validation->run() != false){
			$data = array(
				'admin_nama' => $namapengguna,
				'admin_username' => $username,			
				'id_seksi' => $seksi,		
				'status' => $status,	
				'admin_password' => md5($pass_baru)
			);		
			$this->m_rental->insert_data($data,'admin');			
			redirect(base_url().'admin/listuser');						
		}else{
			$this->load->view('user/header');
			$this->load->view('konten/formuser');
			$this->load->view('user/footer');
		}
	}	
	// CRUD VIEWKEGIATAN
	function listkegiatan(){
		if($this->session->userdata('userstatus') == "admin" || $this->session->userdata('userstatus') == "pemantau" || $this->session->userdata('userstatus') == "userkab" )
		{
			$data['kegiatan'] = $this->m_rental->joinkegiatan('bps_detil_keg')->result();
			$this->load->view('user/header');
			$this->load->view('konten/listkegiatan',$data);
			$this->load->view('user/footer');
		}
		else
		{
			$id_seksi=$this->session->userdata('id_seksi');
			$data['kegiatan'] = $this->m_rental->joinkegiatan2('bps_detil_keg',$id_seksi)->result();
			$this->load->view('user/header');
			$this->load->view('konten/listkegiatan',$data);
			$this->load->view('user/footer');
		}
	}

	function listuser(){
		$data['user'] = $this->m_rental->joinuser('admin')->result();
		$this->load->view('user/header');
		$this->load->view('konten/listpengguna',$data);
		$this->load->view('user/footer');
	}

	function lihatmasalah(){
		$data['masalah'] = $this->m_rental->joinmasalah('masalah')->result();
		$this->load->view('user/header');
		$this->load->view('konten/listmasalah',$data);
		$this->load->view('user/footer');
	}

	function hapususer($id){				
		$where = array(
			'admin_id' => $id		
		);
		$this->m_rental->delete_data($where,'admin');		
		redirect(base_url().'admin/listuser');
	}

	
	function hapusmasalah($id){				
		$where = array(
			'no' => $id		
		);
		$this->m_rental->delete_data($where,'masalah');		
		redirect(base_url().'admin/lihatmasalah');
	}


	function kegiatan_tambah(){		
		$seksi = $this->input->post('seksi');
		$namakegiatan = $this->input->post('namakegiatan');
		$satuan = $this->input->post('satuan');
		$target = $this->input->post('target');
		$start = $this->input->post('start');
		$seksiterkait = $this->input->post('seksiterkait');
		$deadline = $this->input->post('deadline');
		$linksop = $this->input->post('linksop');
		$linkmon = $this->input->post('linkmon');
		$linkapp = $this->input->post('linkapp');
		$user = $this->session->userdata('nama');
		$this->form_validation->set_rules('namakegiatan','Nama Kegiatan','required');
		$this->form_validation->set_rules('satuan','Satuan','required');
		$this->form_validation->set_rules('target','Tanggal Berakhir','required');
		$this->form_validation->set_rules('linksop','Link SOP','required');
		$this->form_validation->set_rules('linkmon','Link Monitoring','required');
		$this->form_validation->set_rules('linkapp','Link Aplikasi','required');
		

		if($this->form_validation->run() != false){
			$data = array(
				'id_seksi' => $seksi,
				'nama_detil' => $namakegiatan,			
				'satuan' => $satuan,			
				'target' => $target,
				'tanggal_mulai' => $start,	
				'seksi_terkait' => $seksiterkait,	
				'id_user' => $user,	
				'link_sop' => $linksop,
				'link_mon' => $linkmon,
				'link_app' => $linkapp,
				'tanggal_target' => $deadline
			);
			$this->m_rental->insert_data($data,'bps_detil_keg');
			redirect(base_url().'admin/listkegiatan');
		}else{
			$this->load->view('user/header');
			$this->load->view('konten/formkegiatan');
			$this->load->view('user/footer');
		}
	}

	function masalah_tambah(){		
		$id_detil = $this->input->post('id_detil');
		$judulmasalah = $this->input->post('judulmasalah');
		$masalah = $this->input->post('masalah');
		$solusi = $this->input->post('solusi');
		
		$this->form_validation->set_rules('masalah','Masalah','required');
		$this->form_validation->set_rules('solusi','Solusi','required');
		$this->form_validation->set_rules('judulmasalah','Judul Masalah','required');
		
		

		if($this->form_validation->run() != false){
			$data = array(
				'id_keg' => $id_detil,
				'masalah' => $masalah,
				'judul_masalah' => $judulmasalah,			
				'solusi' => $solusi
			);
			$this->m_rental->insert_data($data,'masalah');
			redirect(base_url().'admin/lihatmasalah');
		}else{
			$this->load->view('user/header');
			$this->load->view('user/formmasalah');
			$this->load->view('user/footer');
		}
	}

	function editkegiatan($id){				
		$where = array(
			'id_detil' => $id		
		);
		$data['kegiatan'] = $this->m_rental->editkegiatan($where,'bps_detil_keg')->result();		
		$this->load->view('user/header');
		$this->load->view('konten/editkegiatan',$data);
		$this->load->view('user/footer');
	}

	function updatekegiatan(){		
		$id = $this->input->post('id');
		$namakegiatan = $this->input->post('namakegiatan');
		$realisasi = $this->input->post('realisasi');
		$linksop = $this->input->post('linksop');
		$linkmon = $this->input->post('linkmon');
		$linkapp = $this->input->post('linkapp');
		$satuan = $this->input->post('satuan');
		$this->form_validation->set_rules('namakegiatan','Nama Kegiatan','required');
		$this->form_validation->set_rules('satuan','Satuan','required');
		$this->form_validation->set_rules('realisasi','Realisasi','required');
		$this->form_validation->set_rules('linksop','Link SOP','required');
		$this->form_validation->set_rules('linkmon','Link Monitoring','required');
		$this->form_validation->set_rules('linkapp','Link Aplikasi','required');
		if($this->form_validation->run() != false){
			$where = array(
				'id_detil' => $id		
			);
			$data = array(
				'nama_detil' => $namakegiatan,
				'satuan' => $satuan,
				'realisasi' => $realisasi,
				'link_sop' => $linksop,
				'link_mon' => $linkmon,
				'link_app' => $linkapp
			);
			$this->m_rental->update_data($where,$data,'bps_detil_keg');
			redirect(base_url().'admin/listkegiatan');
		   }else{
			$where = array(
				'id_detil' => $id		
			);
			$data['kegiatan'] = $this->m_rental->edit_data($where,'bps_detil_keg')->result();		
			$this->load->view('user/header');
			$this->load->view('konten/editkegiatan',$data);
			$this->load->view('user/footer');
		}
	}

	function hapuskegiatan($id){				
		$where = array(
			'id_detil' => $id		
		);
		$this->m_rental->delete_data($where,'bps_detil_keg');		
		redirect(base_url().'admin/listkegiatan');
	}


}
