<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editprofile extends CI_Controller {

	function __construct() {
    	parent::__construct();
		$this->load->library( 'session' );
	}

	public function index(){

		$this->load->view('editprofile');

	}


}
