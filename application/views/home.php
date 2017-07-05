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
		<h1><center>Home</center></h1>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et posuere orci. Cras sagittis orci sit amet justo ornare vehicula. Quisque maximus ipsum quis vulputate vehicula. Nullam id consequat ligula. In porta, ex ut pellentesque aliquam, velit tellus molestie urna, ut laoreet massa lacus vitae arcu. Curabitur euismod facilisis erat at bibendum. Integer id facilisis urna. Morbi velit urna, lobortis id vehicula vitae, molestie ac dui. Integer non leo imperdiet, sollicitudin risus vitae, aliquam dolor. Aliquam efficitur erat sed nisl egestas vehicula. Curabitur cursus, nunc id aliquam congue, turpis urna malesuada lacus, id bibendum magna risus et mi. Sed luctus volutpat vulputate. Ut mauris purus, aliquet eget iaculis in, pharetra a dolor. Sed vitae dui vel orci congue gravida.</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Mauris ullamcorper iaculis aliquam. Suspendisse sapien dui, finibus sit amet purus at, gravida imperdiet sapien. Suspendisse tempor ex ut nulla dictum posuere. Cras libero dolor, vehicula ac dignissim at, ornare sit amet erat. Etiam dictum quam in metus condimentum, tempor lacinia nunc pharetra. In sollicitudin commodo velit. Duis pretium, urna sed porttitor vehicula, felis massa cursus ipsum, vel viverra sapien augue et magna. Nunc vel faucibus mi, vitae malesuada nisi. Donec congue, lectus vitae gravida sagittis, ipsum ligula facilisis purus, in aliquet ex erat a risus. Vestibulum commodo consectetur placerat. Fusce malesuada erat eu dignissim cursus. Phasellus hendrerit, dolor vel scelerisque imperdiet, ipsum dolor blandit quam, vitae consectetur diam ligula nec nunc. Donec ornare feugiat convallis. Etiam rutrum velit et neque convallis accumsan.</p>	
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Praesent vehicula velit ut gravida tristique. Pellentesque at hendrerit sem. Curabitur sollicitudin dignissim arcu at sollicitudin. Nam at ligula sed dolor placerat aliquet. Etiam nec neque vitae arcu cursus laoreet. Nunc nibh nisl, aliquet sed varius vitae, facilisis in nulla. Maecenas diam ante, aliquet vel tincidunt et, placerat sed quam. Mauris urna eros, suscipit et placerat quis, mattis vitae libero. Fusce in maximus turpis. Maecenas ut tincidunt ante, ut porttitor quam. Duis porttitor leo magna. Vestibulum non purus non neque facilisis dictum sit amet ut lacus. Pellentesque consequat sodales sem non convallis. Ut bibendum, justo ac malesuada vestibulum, ante turpis auctor tortor, ut blandit libero ante ac mauris.</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Pellentesque consectetur neque ut tincidunt sollicitudin. In nec venenatis dui. Phasellus in neque accumsan, vestibulum dui id, cursus justo. Donec auctor magna at commodo pharetra. Quisque tincidunt eu ligula quis commodo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum gravida pretium ultrices. Integer semper suscipit turpis vitae imperdiet. Donec eget rutrum ipsum, commodo tincidunt nisl. Sed elementum urna neque, sed pulvinar turpis pellentesque vitae.</p>
	</div>
	<div id="footer">
		Copyright ©2016 PLN Rahul Inc.
	</div>
</body>
</html>