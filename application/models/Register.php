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
			return true;
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
			return true;
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
$query .= "'".$this->session->userdata('username')."',";
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
return $query;
	}
	
}