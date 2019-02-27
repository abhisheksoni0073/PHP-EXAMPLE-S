<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
	$username=$_POST['name'];
	$password=$_POST['pass'];
	$con=mysqli_connect("localhost","root","","mss");
	$query="SELECT * FROM hacker where name='$username' and pass='$password'";
	$res=mysqli_query($con,$query);
	$rows = mysqli_num_rows($res);
	session_start();
 	if($rows==1){
 	header('location:home.php');
 	$_SESSION['name']=$username;
 	}
	else{
	echo "INVALID USERNAME AND PASSWORD";
	}
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<style type="text/css">
		div{
		margin: 100px;
		padding: 50px;
		border: 1px solid pink;
		border-radius: 50px;

		}
	</style>
</head>
<body>

	<div>
	<form method="post">
		<table>
			<tr>
				<td>USER-NAME</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="PASSWORD" name="pass"></td>

			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Login"></td>
				<td><a href="signup.php">SignUp</a></td>

			</tr>


		</table>

	</form>
</div>s

</body>
</html>