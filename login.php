<?php
	require 'functions.php';

	if( isset($_POST["login"]) ) {
		$email = $_POST["email"];
		$password = $_POST["password"];


		$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

		if(mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if($password == $row["password"]){
				$_SESSION["login"] = true;
				$_SESSION["nama"] = $row["nama"];
				header("Location: index.php");
				exit;
			}
		}
		$error = true;
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Masuk untuk lebih lanjut</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="img/logo.png">
</head>
<body id="halaman-login">

	<div class="container">
		<div id="kembali">
			<a href="index.php"><img src="img/TEST.png" width="500px" height="150px"></a>
		</div>
			<hr>
		<div class="login">
			<form name="login" action="" method="post">
				<ul>
					<label for="email">Email:</label>
					<input type="text" name="email" id="email">
				</ul>
				<ul>
					<label for="password">Password:</label>
					<input type="password" name="password" id="password">
				</ul>
				<ul>
					<button class="tombol" type="submit" name="login">Login</button>
				</ul>
				<p>belum punya akun ? <small><a href="daftar.php">daftar</a></small></p>
			</form>
		</div>
	</div>

</body>
</html>
