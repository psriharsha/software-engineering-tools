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
	
}