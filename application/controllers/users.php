<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('page.php');
	}

	public function random() {
		$names = array('Katrina', 'Timothy', 'Justin', 'Zachary', 'Joey');
		$output = array("name" => $names[rand(0, count($names)-1)], "age" => rand(18, 60));
		echo json_encode($output);
	}
}