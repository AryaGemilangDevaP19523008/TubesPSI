<?php
require 'function.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
	if( mysqli_num_rows($result) == 1 ) {
		$row = mysqli_fetch_assoc($result);
		$resultpass = mysqli_query($conn, "SELECT * FROM akun WHERE password = '$password'");

		if( mysqli_num_rows($resultpass) == 1 ) {
			header("Location: dashboard.php");
			exit;
		}
	}

	$error = true;

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dealerku</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="loginStyle.css">
</head>
<body>
	<menu class="home" id="home">
		<div class="content">
			<h1>SIGN IN</h1>
				<div class="login">
					<form id="loginlogin" method="post">
						<table>
							<tr>
								<td><label for="username">Username</label></td>
								<td></td>
							</tr>
							<tr>
								<td><input type="text" name="username" id="username" placeholder="INSERT HERE" required></td>
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
								<td></td>
							</tr>
							<tr>
								<td><input type="password" name="password" id="password" placeholder="INSERT HERE" required></td>
							</tr>
							<tr>
								<td><input type="submit" name="login" class="btn" value="SIGN IN"><td>
							</tr>
							<tr>
								<td><p>OR<p><td>
							</tr>
							<tr>
								<td><a href="register.php"><input type="button" name="register" class="btnUp" value="CREATE AN ACCOUNT"></a><td>
							<tr>
						</table>
					</form>
				</div>
		</div>
	</menu>
</body>
</html>