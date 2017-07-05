<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function loadHome()
	{
		$this->load->view('home');
	}
	public function loadAbout()
	{
		$this->load->view('aboutus');
	}
	public function loadContact()
	{
		$this->load->view('contactus');
	}
	public function loadLogin()
	{
		$this->load->view('login');
	}
	public function loadReg()
	{
		$this->load->view('register');
	}
}

?>
