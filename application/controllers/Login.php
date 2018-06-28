<?php defined('BASEPATH') or exit('no access');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index(){
		//tampilkan halaman login
		$this->load->view('login_page');
	}

	function login(){
		//proses login dan save session
	}

}