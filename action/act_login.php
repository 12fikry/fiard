<?php
require_once 'action/connection.php';
$errors = array();
session_start();

if (isset($_POST['Login'])) {
  	$username = $_POST['username'];
	$password = $_POST['password'];

	// memastikan semua input telah diisi
	if (empty($username) || empty($password)) {
    	if ($username == "") {
    	$errors[] = "Username dibutuhkan";
    	}
    	if ($password == "") {
    	$errors[] = "Password dibutuhkan";
    	}
	} else {
		// memastikan bahwa user telah terdaftar
		$sql = "SELECT * FROM user WHERE username = '$username'";
		$result = $connect->query($sql);
		if($result->num_rows == 1) {
			$mainSql = "SELECT * FROM user WHERE username = '$username' AND password = MD5('$password')";
			$mainResult = $connect->query($mainSql);

			if(mysqli_num_rows($mainResult) > 0) {
				$value = $mainResult->fetch_assoc();
				$id = $value['UserID'];
				$user = $value['username'];

				$_SESSION['UserID'] = $id;
				$_SESSION['username'] = $user;
				header('location: home.php');
			}
			else{
				$errors[] = "Username/ password salah";
			}
		}
		else {
			$errors[] = "Username belum terdaftar, silahkan daftar";
		}
	 }
}

?>
