<?php 
	session_start();
	require 'functions.php';

	if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
		$id = $_COOKIE['id'];
		$key = $_COOKIE['key'];

		// cek username berdasarkan id
		$result = mysqli_query(koneksi(), "SELECT username, admin FROM user WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);

		if ($key === hash('sha256', $row['username'], true)) {
			// set session
			$_SESSION['login'] = $row['username'];
			$_SESSION['admin'] = $row['admin'];
 			// masuk ke halaman admin
			header("Location: backend.php");
			exit;
		}
	}

	if(isset($_SESSION['login'])) {
		header("Location: index.php");
		exit;
	}

	// proses login
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

		if(mysqli_num_rows($cek_user) > 0) {
			$row = mysqli_fetch_assoc($cek_user);
			// cek password
			if(password_verify($password, $row['password'])) {
				// jika berhasil login
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['hash'] = hash('sha256', $row['id'], false);
				$_SESSION['login'] = true;
				$_SESSION['admin'] = $row['admin'];
				// jika remember me di checklist
				if (isset($_POST['remember'])) {
					//buat cookie
					setcookie('id', $row['id'], time() + 60 * 60 * 24);
					$hash = hash('sha256', $row['username']);
					setcookie('key', $hash, time() + 60 * 60 * 24);
				}
				// jika kondisinya TRUE
				if(hash('sha256', $row['id']) == $_SESSION['hash']) {
					header("Location: index.php");
					die;
				}
				header("Location: index.php");
				die;
			}
		}
			$error = true;
	} 

 ?>