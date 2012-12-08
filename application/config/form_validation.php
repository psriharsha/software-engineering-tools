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
						'rules' => 'alpha_numeric'
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
						'field' => 'qual',
						'label' => '\'Qualification\'',
						'rules' => 'required'
				),
				array(
						'field' => 'course',
						'label' => '\'Course\'',
						'rules' => 'required'
				),
				array(
						'field' => 'insti',
						'label' => '\'Institution\'',
						'rules' => 'required'
				)
		),
		'professional' => array(
				array(
						'field' => 'profyear',
						'label' => '\'Year Obtained\'',
						'rules' => 'numeric'
				),
				array(
						'field' => 'awardingbody',
						'label' => '\'Awarding Body\'',
						'rules' => 'required'
				),
				array(
						'field' => 'qualification',
						'label' => '\'Qualification\'',
						'rules' => 'required'
				)
		)
		);