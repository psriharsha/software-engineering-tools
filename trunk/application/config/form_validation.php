<?php
$config = array(
		'personal' => array(
				array(
						'field' => 'add1',
						'label' => '\'Address Line 1\'',
						'rules' => 'required'
				),
				array(
						'field' => 'town',
						'label' => '\'Town\'',
						'rules' => 'required|alpha'
				),
				array(
						'field' => 'postcode',
						'label' => '\'Postcode\'',
						'rules' => 'required'
				),
				array(
						'field' => 'gcseeng',
						'label' => '\'GCSE English Grade\'',
						'rules' => 'alpha|max_length[1]'
				),
				array(
						'field' => 'gcsemath',
						'label' => '\'GCSE Math Grade\'',
						'rules' => 'alpha|max_length[1]'
				)
				),
		'contact' => array(
				array(
						'field' => 'altmail',
						'label' => '\'Alternate Email\'',
						'rules' => 'valid_email'
				),
				array(
						'field' => 'mobile',
						'label' => '\'Mobile Number\'',
						'rules' => 'numeric'
				),
				array(
						'field' => 'land',
						'label' => '\'Landline Number\'',
						'rules' => 'numeric'
				)
				),
		'qualification' => array(
				array(
						'field' => 'qualificationType',
						'label' => '\'Qualification\'',
						'rules' => 'required'
				),
				array(
						'field' => 'courseName',
						'label' => '\'Course\'',
						'rules' => 'required'
				),
				array(
						'field' => 'nameOfInstitutions',
						'label' => '\'Institution\'',
						'rules' => 'required'
				)
		),
		'professional' => array(
				array(
						'field' => 'qualificationName',
						'label' => '\'Qualification\'',
						'rules' => 'required'
				),
				array(
						'field' => 'awardingBody',
						'label' => '\'Awarding Body\'',
						'rules' => 'required'
				),
				array(
						'field' => 'yearObtained',
						'label' => '\'Year Obtained\'',
						'rules' => 'numeric'
				)
		),
		'experience' => array(
				array(
						'field' => 'employerName',
						'label' => '\'Company Name\'',
						'rules' => 'required|alpha'
				),
				array(
						'field' => 'dateStarted',
						'label' => '\'Date Started\'',
						'rules' => 'required'
				),
				array(
						'field' => 'keyDuties',
						'label' => '\'Key Duties\'',
						'rules' => 'required'
				)
		),
		'skill' => array(
				array(
						'field' => 'skillName',
						'label' => '\'Skill Name\'',
						'rules' => 'required'
				)
				),
		'references' => array(
				array(
						'field' => 'forename',
						'label' => '\'First Name\'',
						'rules' => 'required|alpha'
				),
				array(
						'field' => 'email',
						'label' => '\'Email Id\'',
						'rules' => 'required|valid_email'
				),
				array(
						'field' => 'contactPhone',
						'label' => '\'Contact Number\'',
						'rules' => 'required|numeric'
				)
		)
		);