<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Web2 extends CI_Controller 
{ 
  function __construct()
  { 
    parent::__construct(); $this->load->helper('url'); 
  } 
    public function index()
    { 
      $this->load->view('head'); 
      $this->load->view('konten/main2'); 
      $this->load->view('footer'); 
    } 
  }
?>