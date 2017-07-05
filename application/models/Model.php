<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function loginValid($username,$password){
			$query=$this->db->query("select * from myfirstapp where username='$username' and password='$password' ");
			return $query->result_array();;
		}
		public function userValid($username){
			$query=$this->db->query("select * from myfirstapp where username='$username'");
			return $query->result_array();
		}
		public function register($firstname,$lastname,$email,$username,$password){
			$this->db->query("insert into myfirstapp(firstname,lastname,email,username,password) values('$firstname','$lastname','$email','$username','$password')");
		}
	}
?>