
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
	<form action="resignup.php" method="post"> 
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
				<td>EMAIL-ID</td>
				<td><input type="email" name="email"></td>

			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
				<td><a href="index.php">Login</a></td>

			</tr>

		</table>

	</form>
</div>s

</body>
</html>