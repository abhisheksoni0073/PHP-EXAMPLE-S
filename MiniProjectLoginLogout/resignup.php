<?php
$con=mysqli_connect("localhost","root","","mss") or die(mysqli_error());
	  
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
	  
$query="INSERT INTO hacker(name, pass, email) VALUES('$name','$pass','$email')";
mysqli_query($con,$query);

					
?>