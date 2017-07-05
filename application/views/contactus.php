<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First Web App</title>
	<style type="text/css">
		#header{
			text-align: center;
			color: blue;
			background:#F705E5;
		}
		#body{
			color: blue;
			background:#F705E5;
			width:1200px;
			margin-left: 50px;
			margin-right: 0px;
		}
		#footer{
			color: blue;
			background:#F705E5;
			position: fixed;
			bottom: 0px;
			width: 1350px;
			text-align:center;
		}
		body{
			background-color: #196D6C;
		}
	</style>
</head>
<body>	
	<div id="header">
		<h1>Foot Power Generators</h1><br>
		<a href="<?php echo base_url("index.php/welcome/loadhome")?>">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo base_url("index.php/welcome/loadabout");?>">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo base_url("index.php/welcome/loadcontact");?>">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo base_url("index.php/welcome/loadreg");?>">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="<?php echo base_url("index.php/welcome/loadlogin");?>">Login</a>
	</div>
	<br><br>
	<div id="body">
		<h1><center>Contact Us</center></h1>
		Email:-abcd@gmail.com<br><br><br>
		Phone:-9876543210
	</div>
	<div id="footer">
		Copyright ©2016 PLN Rahul Inc.
	</div>
</body>
</html>