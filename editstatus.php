<?php
session_start();
include('koneksi.php');
if($_SESSION['username']==""){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Edit Status</title>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="admin.php">Admin</a>
        <a class="navbar-brand" href="data_calon.php">Data Pendaftar</a>
        <a class="navbar-brand" href="akun.php">Data Akun User</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="logout.php">
            Logout (<?=$_SESSION['level'];?>)
        </a>

    </nav>

    <div class="container" style="padding-top: 70px">
        <div class="row">
            <div class="col-sm" style="padding-top: 20px">

                <h1> Edit Calon Siswa</h1>
                <br>
                <br>
                <?php if(!isset($_GET['aksi']) && !isset($_GET['view'])&& $_SESSION['level']=='Administrator' )
{ ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
  	$no=1;
    $tampil = mysqli_query($db, "SELECT * FROM peserta WHERE id='$_GET[id]'");
  	while ($data=mysqli_fetch_array($tampil)){
  ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $data['nis'];?></td>
                            <td><?php echo $data['status'];?></td>
                            <td>    <a href="?page=editstatus&aksi=terima&id=<?php echo $data['id']?>">DITERIMA |
                                    <a href="?page=editstatus&aksi=cad&id=<?php echo $data['id']?>">CADANGAN |
                                    <a href="?page=editstatus&aksi=tidak&id=<?php echo $data['id']?>">TIDAK DITERIMA</td>
                        </tr>
                    </tbody>
                    <?php
	$no++;
	}
  ?>
                </table>

                <?php 
}
?> 

 
<!-- aksi jika diterima -->
<?php if(isset($_GET['aksi']) && $_GET['aksi']=='terima')
{ 
	$sql=mysqli_query($db,"UPDATE peserta SET status = 'Diterima' WHERE id='$_GET[id]' "); 
	if($sql)
	{
		header('location:data_calon.php');
	}
}

?>

<!-- aksi jika cadangan -->
<?php if(isset($_GET['aksi']) && $_GET['aksi']=='cad' )
{ 
	
	$sql=mysqli_query($db,"UPDATE peserta SET status = 'Cadangan' WHERE id='$_GET[id]'  "); 
	if($sql)
	{
		header('location:data_calon.php');
	}
}
?>

<!-- aksi jika tidak  diterima -->
<?php if(isset($_GET['aksi']) && $_GET['aksi']=='tidak' )
{ 
	
	$sql=mysqli_query($db,"UPDATE peserta SET status = 'Tidak Diterima' WHERE id='$_GET[id]'"); 
	if($sql)
	{
		header('location:data_calon.php');
	}
}
?>

</body>

<script type="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>