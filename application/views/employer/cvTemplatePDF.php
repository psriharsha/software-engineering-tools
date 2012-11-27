<?php
$this->load->view('PDFheader');
$this->load->view('employer/menu');
$this->load->view($content);
//$this->load->view($content2);
$this->load->view('PDFfooter');
