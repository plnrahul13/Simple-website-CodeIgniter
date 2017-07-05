<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class LoginController extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('model');
		}
		public function loginValidation(){
			 $username=$_POST["uname"];
			 $password=$_POST["pword"];
			 $status=$this->model->loginvalid($username,$password);
			 if($status!=NULL){
			 	echo "Login Successful";
			 }else{
			 	echo "Login Failed";
			 }
		}		

	}
	
?>