<?php
$this->load->view('PDFHeader');
//$this->load->view('jobseeker/Menu');
$this->load->view($content);
$this->load->view('PDFfooter');
?>