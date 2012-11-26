<?php
class GetCV extends CI_Model{
	
	public function getPerson() {
	$person = $this->session->userdata('user_id');
	$this->db->select('*');
	$this->db->from('persons');
	$this->db->where('idUser', $person);
	$query = $this->db->get();
	if($query->num_rows() == 1) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}	
	
	public function getEducationalQuals() {
	$person = $this->session->userdata('user_id');
	$this->db->select('*');
	$this->db->from('educational_qualifications');
	$this->db->join('persons', 'persons.idUser = educational_qualifications.Persons_idUser');
	$this->db->where('persons.idUser', $person);
	$query = $this->db->get();
	if($query->num_rows() > 0) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}
	
	public function getProfessionalQuals() {
	$person = $this->session->userdata('user_id');
	$this->db->select('*');
	$this->db->from('professional_qualifications');
	$this->db->join('persons', 'persons.idUser = professional_qualifications.Persons_idUser');
	$this->db->where('persons.idUser', $person);
	$query = $this->db->get();
	if($query->num_rows() > 0) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}
	
	public function getExperiences() {
	$person = $this->session->userdata('user_id');
	$this->db->select('*');
	$this->db->from('experiences');
	$this->db->join('job_titles', 'experiences.JobTitles_idJobTitles = job_titles.idJobTitles');
	$this->db->join('persons', 'persons.idUser = experiences.Persons_idUser');
	$this->db->join('employment_levels', 'experiences.EmploymentLevels_idLevelsOfEmployment = employment_levels.idLevelsOfEmployment');
	$this->db->where('persons.idUser', $person);
	$query = $this->db->get();
	if($query->num_rows() > 0) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}
	
	public function getSkills() {
	$person = $this->session->userdata('user_id');
	$this->db->select('*');
	$this->db->from('skills');
	$this->db->join('persons', 'persons.idUser = skills.Persons_idUser');
	$this->db->where('persons.idUser', $person);
	$query = $this->db->get();
	if($query->num_rows() > 0) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}
	
	public function getPreferences() {
	$person = $this->session->userdata('user_id');
	$this->db->select('*');
	$this->db->from('job_preferences');
	$this->db->join('persons', 'persons.idUser = job_preferences.person_idUser');
	$this->db->join('job_titles', 'job_titles.idJobTitles = job_preferences.JobTitles_idJobTitles');
	$this->db->where('persons.idUser', $person);
	$query = $this->db->get();
	if($query->num_rows() > 0) {
		foreach($query->result() as $row) {
			$data[] = $row;
			}
			return $data;
		}
	}
	
	public function getReferees() {
	$person = $this->session->userdata('user_id');
	$this->db->select('referees.title, referees.forename, referees.surname, referees.email, referees.contactPhone, referees.Relationship, referees.permissionToContact, referees.permissionToStoreDetails, referees.verified, referees.howVerified');
	$this->db->from('referees');
	$this->db->join('persons', 'persons.idUser = referees.persons_idUser');
	$this->db->where('persons.idUser', $person);
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