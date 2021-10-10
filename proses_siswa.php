<?php
session_start();
include('koneksi.php');
if($_SESSION['username']==""){
		header("location:login.php");
}

if (isset($_POST['submit']))
{
	$status1 ="Menunggu Konfirmasi";
	
	$namaFile=$_FILES['foto']['name'];
	$namaSementara=$_FILES['foto']['tmp_name'];
	$dirUpload="images/";

	$terupload = move_uploaded_file($namaSementara,$dirUpload.$namaFile);

	$ekstensiGambarValid = ['JPG','PNG','JPEG','jpg','png','jpeg'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid))
	{
		echo '<script type="text/javascript">
				alert("Format Foto Anda Salah");
			  </script>';
		return false;
	}
	$tampil = mysqli_query($db, "SELECT * FROM users WHERE username='$_SESSION[username]' ");
	$data=mysqli_fetch_array($tampil);
	$userid=$data['id'];
  
    
    $query=mysqli_query($db,"INSERT INTO peserta(user_id,nis,nama,jk,ttl,alamat,email,telp,nama_ortu,pekerjaan_ortu,asal_sekolah,foto,NA,status)
	 VALUES ('$userid','$_POST[nis]','$_POST[nama]','$_POST[jk]','$_POST[ttl]','$_POST[alamat]','$_POST[email]','$_POST[telp]','$_POST[nama_ortu]','$_POST[pekerjaan_ortu]',
     '$_POST[asal_sekolah]','$namaFile','$_POST[NA]','$status1')");

	if ($query){
		echo '<script type="text/javascript">
				alert("Data Berhasil di upload");
			  </script>';

		header("location: status.php");

	}
	
}


