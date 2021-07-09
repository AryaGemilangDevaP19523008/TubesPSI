<?php
require 'function.php';

if( isset($_POST["register"]) ) {
  
  if( tambahAkun($_POST) > 0 ) {
    echo "
      <script>
        alert('Berhasil membuat akun');
        document.location.href = 'dashboard.php';
      </script>";
  } else {
    echo "
      <script>
        alert('Gagal');
        document.location.href = 'register.php';
      </script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dealerku</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="regisStyle.css">
</head>
<body>
	<menu class="home" id="home">
		<div class="content">
			<h1>SIGN UP</h1>
				<div class="register">
					<form id="regisregis" method="post">
						<table>
							<tr>
								<td><label for="username">Username</label></td>
							</tr>
							<tr>
								<td><input type="text" name="username" id="username" placeholder="INSERT HERE" required></td>
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
							</tr>
							<tr>
								<td><input type="password" name="password" id="password" placeholder="INSERT HERE" required></td>
							</tr>
							<tr>
								<td><input type="submit" name="register" class="btn" value="SIGN UP"></td>
							</tr>
						</table>
					</form>

				</div>
		</div>
	</menu>
</body>
</html>