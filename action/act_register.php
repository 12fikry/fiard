<?php
require_once 'action/connection.php';
$errors = array();
session_start();

if (isset($_POST['Login'])) {
  	$username = $_POST['username'];
	$password = $_POST['password'];
    $Email = $_POST['Email'];
    $NamaLengkap = $_POST['NamaLengkap'];
    $alamat = $_POST['alamat'];

	// memastikan semua input telah diisi
	if (empty($username) || empty($password) || empty($Email) || empty($NamaLengkap) || empty($alamat)) {
    	if ($username == "") {
    	$errors[] = "Username dibutuhkan";
    	}
    	if ($password == "") {
    	$errors[] = "Password dibutuhkan";
    	}
    	if ($Email == "") {
    	$errors[] = "Email dibutuhkan";
    	}
    	if ($NamaLengkap == "") {
    	$errors[] = "Nama Lengkap dibutuhkan";
    	}
    	if ($alamat == "") {
    	$errors[] = "Alamat dibutuhkan";
    	}
	} else {
		// memastikan bahwa data user tersedia
		$sql = "SELECT * FROM user WHERE username = '$username'";
		$result = $connect->query($sql);
		if($result->num_rows == 0 ) {
			$mainSql = "INSERT INTO user(username, password, Email, NamaLengkap, alamat) VALUES ('$username',MD5('$password'),'$Email','$NamaLengkap','$alamat');";
			$mainResult = $connect->query($mainSql);
			if($mainResult) {
                echo "<script> alert ('Berhasil melakukan Register.'); window.location.replace('login.php')</script>";
			}
			else{
				$errors[] = "Username/ password salah";
			}
		}
		else {
			$errors[] = "Username Sudah terdaftar";
		}
	 }
}

?>
