<?php 

// WWW.MALASNGODING.COM === Author : Diki Alfarabi Hadi
// Model yang terstruktur. agar bisa digunakan berulang kali untuk membuat CRUD. 
// Sehingga proses pembuatan CRUD menjadi lebih cepat dan efisien.

class M_rental extends CI_Model{

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function get_data($table){
		return $this->db->get($table);
	}

	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	
	
	function joinkegiatan($table1){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join('bps_seksi', 'bps_detil_keg.id_seksi = bps_seksi.id_seksi');
		return $this->db->get();
	}

	function joinmasalah($table1){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join('bps_detil_keg', 'bps_detil_keg.id_detil = masalah.id_keg');
		return $this->db->get();
	}

	function joinkegiatan2($table1,$where){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join('bps_seksi', 'bps_detil_keg.id_seksi = bps_seksi.id_seksi');
		$this->db->where(array('bps_detil_keg.id_seksi' => $where));
		return $this->db->get();
	}

	function joinuser($table1){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join('bps_seksi', 'admin.id_seksi = bps_seksi.id_seksi');
		return $this->db->get();
	}

	function editkegiatan($where,$table1){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join('bps_seksi', 'bps_detil_keg.id_seksi = bps_seksi.id_seksi');
		$this->db->where($where);
		return $this->db->get();
	}


	function keg_terakhir($table1){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join('bps_seksi', 'bps_detil_keg.id_seksi = bps_seksi.id_seksi');
		$this->db->order_by('id_detil','desc');
		$this->db->limit(5);
		return $this->db->get();
	}

	function keg_terakhir_user($table1,$where){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join('bps_seksi', 'bps_detil_keg.id_seksi = bps_seksi.id_seksi');
		$this->db->where(array('bps_detil_keg.id_seksi' => $where));
		$this->db->order_by('id_detil','desc');
		$this->db->limit(5);
		return $this->db->get();
	}

	function warning($table1){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->where('DATEDIFF(tanggal_target,CURRENT_DATE()) < 7');
		$this->db->where('tanggal_target > tanggal_mulai');
		$this->db->order_by('id_detil','desc');
		return $this->db->get();
	}

	function warning_user($table1,$where){
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->where('DATEDIFF(tanggal_target,CURRENT_DATE()) < 7');
		$this->db->where(array('id_seksi' => $where));
		$this->db->order_by('id_detil','desc');
		return $this->db->get();
	}
	
	
	function totalipd($table){

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id_seksi = 530062');
		return $this->db->get();
	}	

	function totaljrs($table){

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id_seksi = 530063');
		return $this->db->get();
	}	

	function totaldls($table){

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id_seksi = 530061');
		return $this->db->get();
	}	
}
?>
