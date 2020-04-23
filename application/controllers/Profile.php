<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="https://randomuser.me/api/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('profile');
	}
	public function get_data()
	{
		$get = json_decode($this->curl->simple_get($this->API));
		// print_r($get->results[0]);
		$data = $get->results;
		echo json_encode($data);
	}
}
