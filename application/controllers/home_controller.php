<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home_controller extends CI_Controller
{

	public function __constructer()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('index_model');
		if (json_decode((file_get_contents('php://input')), true) != '') {
			$_POST = json_decode((file_get_contents('php://input')), true);
		}
	}

	public function index()
	{
		$this->load->view('index');
	}
}
