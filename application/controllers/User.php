<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek login
        if($this->session->userdata('status') != "login")
        {
			redirect(base_url().'welcome?pesan=belumlogin');
		}
    }



}