<?php
class register extends CI_Model{
	
	public function createJobseeker($data){
		$this->db->insert('persons',$data);
		return;
	}
	
	public function editDetails($data)
	{
		$query = "update `jobsite`.`persons` SET `addressLine1`=\"".$data['addressLine1']."\",";
		$query .= "`addressLine2`=\"".$data['addressLine2']."\",";
		$query .= "`town`=\"".$data['town']."\",";
		$query .= "`postcode`=\"".$data['postcode']."\",";
		$query .= "`personalUrl`=\"".$data['personalUrl']."\",";
		$query .= "`female`=".$data['female'].",";
		$query .= "`authorityToWorkStatement`=\"".$data['authorityToWorkStatement']."\",";
		$query .= "`noOfGcses`=".$data['noOfGcses'].",";
		$query .= "`gcseEnglishGrade`=\"".$data['gcseEnglishGrade']."\",";
		$query .= "`gcseMathsGrade`=\"".$data['gcseMathsGrade']."\",";
		$query .= "`studentStatus`=\"".$data['studentStatus']."\"";
		$query .= " where `persons`.`username` =\"".$this->session->userdata('username')."\"";
		$res = $this->db->query($query);
		if($res == 1)
			return true;
		else
			return false;
	}
	
	public function updateContact($data){
		$query = "UPDATE `jobsite`.`persons` SET `secondEmail`=\"".$data['secondEmail']."\",";
		$query .= "`mobile`=\"".$data['mobile']."\",";
		$query .= "`landline`=\"".$data['landline']."\",";
		$query .= "`contactPreference`='".$data['contactPreference']."'";
		$query .= " where `persons`.`username` =\"".$this->session->userdata('username')."\"";
		$res = $this->db->query($query);
		if($res == 1)
			return true;
		else
			return false;
	}
	
	public function insEdu($data){
		$query = "INSERT INTO `jobsite`.`educational_qualifications` (
`idEducationalQualifications` ,
`Persons_idUser` ,
`qualificationType` ,
`courseName` ,
`EducationLevels_idEducationLevel` ,
`vocational` ,
`mainSubject` ,
`nameOfInstitutions` ,
`country` ,
`yearObtained` ,
`result` ,
`thesesTitle` ,
`verified` ,
`howVerified`
)
VALUES (
NULL ,";
$query .= "".$this->session->userdata('user_id').",";
$query .= "'".$data['qualificationType']."',";
$query .= "'".$data['courseName']."',";
$query .= "".$data['EducationLevels_idEducationLevel'].",";
$query .= "".$data['vocational'].",";
$query .= "'".$data['mainSubject']."',";
$query .= "'".$data['nameOfInstitutions']."',";
$query .= "'".$data['country']."',";
$query .= "'".$data['yearObtained']."',";
$query .= "'".$data['result']."',NULL,";
$query .= "".$data['verified'].",";
$query .= "'".$data['howVerified']."');";
$res = $this->db->query($query);
		if($res == 1)
			return true;
		else
			return false;
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
	
	public function insExp($data){
		$query = "INSERT INTO `jobsite`.`experiences` (
`idExperiences` ,
`Persons_idUser` ,
`JobTitles_idJobTitles` ,
`otherJobTitle` ,
`EmploymentLevels_idLevelsOfEmployment` ,
`employerName` ,
`dateStarted` ,
`dateFinished` ,
`keyDuties`,
`verified` ,
`howVerified`
)
VALUES (
NULL ,";
		$query .= "".$this->session->userdata('user_id').",";
		$query .= "".$data['JobTitles_idJobTitles'].",";
		$query .= "'".$data['otherJobTitle']."',";
		$query .= "".$data['EmploymentLevels_idLevelsOfEmployment'].",";
		$query .= "'".$data['employerName']."',";
		$query .= "'".$data['dateStarted']."',";
		$query .= "'".$data['dateFinished']."',";
		$query .= "'".$data['keyDuties']."',";
		$query .= "".$data['verified'].",";
		$query .= "'".$data['howVerified']."')";
		$res = $this->db->query($query);
		if($res == 1)
			return true;
		else
			return false;
	}
	
	public function insRef($data){
		$query = "INSERT INTO `jobsite`.`referees` (
`idReferees` ,
`Persons_idUser` ,
`title` ,
`forename` ,
`surname` ,
`email` ,
`contactPhone` ,
`relationship`
)
VALUES (
NULL ,";
		$query .= "".$this->session->userdata('user_id').",";
		$query .= "'".$data['title']."',";
		$query .= "'".$data['forename']."',";
		$query .= "'".$data['surname']."',";
		$query .= "'".$data['email']."',";
		$query .= "'".$data['contactPhone']."',";
		$query .= "'".$data['relationship']."')";
		$res = $this->db->query($query);
		if($res == 1)
			return true;
		else
			return false;
	}
	
	public function getInfo($data)
	{
		$this->db->order_by($data['what'], "asc");
		if($data['where'] == "persons")
			$res = $this->db->get_where($data['where'],array('idUser'=>$this->session->userdata('user_id')));
		else 
			$res = $this->db->get_where($data['where'],array('Persons_idUser'=>$this->session->userdata('user_id')));
		return $res;
	}
	
	
}