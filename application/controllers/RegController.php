<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class RegController extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('model');
		}
		public function registration(){
			$firstname=$_POST["fname"];
			$lastname=$_POST["lname"];
			$email=$_POST["email"];
			$username=$_POST["uname"];
			$password=$_POST["pword"];
			$query1=$this->model->uservalid($username);
			if($query1!=NULL){
				echo "This Username is already in use!";
			}else{
				$this->model->register($firstname,$lastname,$email,$username,$password);
				echo "Registration done";
			}
		}
		
	}
	
?>