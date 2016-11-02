<?php 
class Asiakas_model extends CI_Model {

	public function getAsiakas(){
		$this->db->select('etunimi,sukunimi,email');
		$this->db->from('asiakas');
		return $this->db->get()->result_array();
	}
	public function addAsiakas($lisaa_asiakas){
		$this->db->set($lisaa_asiakas);
		$this->db->insert('asiakas');
		$testi=$this->db->affected_rows();
		return $testi;
	}
}