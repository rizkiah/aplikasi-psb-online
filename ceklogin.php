<?php 
 
session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$query = mysqli_query($db," SELECT * FROM users WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
	$data=mysqli_fetch_assoc($query);
		if($data['level']=="Administrator"){
			$_SESSION['username'] = $username;
			$_SESSION['level']="Administrator";	
			$_SESSION['status'] = "login";		
			header("location: admin.php");
		}
		else if($data['level']=="User"){
			$_SESSION['username'] = $username;
			$_SESSION['level']="User";
			$_SESSION['status'] = "login";
			$_SESSION['SP']="Menunggu Konfirmasi";
			header("location: dashboard.php");

		}else{
		header("location:login.php?pesan=gagal");
		}
}else{
	header("location:login.php?pesan=gagal");
	}
?>