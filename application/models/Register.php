<?php
class register extends CI_Model{
	
	public function createJobseeker($data){
		$this->db->insert('persons',$data);
		return;
	}
	
	public function insPro($data){
		$query = "INSERT INTO `jobsite`.`professional_qualifications` (
`idProfessionalQualifications` ,
`Persons_idUser` ,
`qualificationName` ,
`Sectors_idSectors` ,
`otherSector` ,
`awardingBody` ,
`yearObtained` ,
`result` ,
`verified` ,
`howVerified`
)
VALUES (
NULL ,";
		$query .= "".$this->session->userdata('user_id').",";
		$query .= "'".$data['qualificationName']."',";
		$query .= "".$data['Sectors_idSectors'].",";
		$query .= "'".$data['otherSector']."',";
		$query .= "'".$data['awardingBody']."',";
		$query .= "'".$data['yearObtained']."',";
		$query .= "'".$data['result']."',";
		$query .= "".$data['verified'].",";
		$query .= "'".$data['howVerified']."')";
		$res = $this->db->query($query);
		if($res == 1)
			return true;
		else
			return false;
	}
	
	public function getInfo($data)
	{
		$this->db->order_by($data['what2'], "asc");
		if($data['where'] == "persons")
			$res = $this->db->get_where("persons",array('idUser'=>$this->session->userdata('user_id')));
		else 
			$res = $this->db->get_where($data['where'],array('Persons_idUser'=>$this->session->userdata('user_id')));
		return $res;
	}
	
	public function deleteData($from,$del){
		$criteria = "";
		if($from == "educational_qualifications")
			$criteria = "idEducationalQualifications";
		else if($from == "professional_qualifications")
			$criteria = "idProfessionalQualifications";
		else if($from == "experiences")
			$criteria = "idExperiences";
		else if($from == "skills")
			$criteria = "idSkills";
		else $criteria = "idReferees";
		$this->db->where($criteria, $del);
		$res = $this->db->delete($from);
		if($res == 1)
			return true;
		else
			return false;
	}
	
	public function insertData($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	
	public function updateData($data)
	{
		$this->db->where('idUser',$this->session->userdata('user_id'));
		return $this->db->update("persons",$data);
	}
	
	public function getValues($table)
	{
		return $this->db->get($table);
	}
	
}