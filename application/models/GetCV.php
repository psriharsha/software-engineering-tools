<?php
class GetCV extends CI_Model{
	
	public function getPerson() {
	$person = $this->session->userdata('username');
	$this->db->select('*');
	$this->db->from('persons');
	$this->db->where('username', $person);
	$query = $this->db->get();
	if($query->num_rows() == 1) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}	
	
	public function getEducationalQuals() {
	$person = $this->session->userdata('username');
	$this->db->select('*');
	$this->db->from('educational_qualifications');
	$this->db->join('persons', 'persons.idUser = educational_qualifications.Persons_idUser');
	$this->db->where('persons.username', $person);
	$query = $this->db->get();
	if($query->num_rows() > 0) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}
	
	public function getExperiences() {
	$person = $this->session->userdata('username');
	$this->db->select('*');
	$this->db->from('experiences');
	$this->db->join('persons', 'persons.idUser = experiences.Persons_idUser');
	$this->db->where('persons.username', $person);
	$query = $this->db->get();
	if($query->num_rows() > 0) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}
}
?>