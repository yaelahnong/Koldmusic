<?php 
	$link = mysqli_connect('localhost','root','0888','db_login');
//menguji error
	if ( !$link ) {
		die('ada error' . mysqli_connect_error());
	}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validasi dengan Javascript</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username">
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password">
			</div>
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi(){
		var username = document.getElemmentById("username").value;
		var password = document.getElemmentById("password").value;
		if(username!="" && password!=""){
			return true;
		}
		else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>
</html>