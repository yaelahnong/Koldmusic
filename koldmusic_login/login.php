<?php 
	include 'config.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$login = mysqli_query($host, "select * from user where username='$username' and password='$password'");
	$cek   = mysqli_num_rows($login);

	if ($cek > 0) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:admin/index.php");
	}
	else{
		header("location:index.php");
	}
 ?>