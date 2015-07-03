<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// logging message using rat
		$this->rat->log('This is a message that will be logged');
		$this->load->view('welcome_message');
	}

	public function get_log() {
		$log = $this->rat->get_log(); //this is if you want the general log
		$this->rat->get_log(1); // this is if you want a specific user's log
		$this->rat->get_log(1,1); // this is if you want a specific user's log, but only the success messages
		$this->rat->get_log(NULL,NULL,'2015-06-29'); // this is if you want the logs from a specific date
		echo "<pre>";
		print_r($log);
	}
}
