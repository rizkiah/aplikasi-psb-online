<?php
session_start();
include('koneksi.php');
include('fungsi.php');

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

    <title>Data Akun User</title>

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

                <h1> Data Akun User</h1>
                Selamat Datang <?php echo $_SESSION['username']."-".$_SESSION['level']?>
                
                <br><br><a href="buat_akun.php" class="btn btn-sm btn-primary">Tambah User</a>

                <?php if($_SESSION['level']=='Administrator')
{ ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th scope="col">No</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Level</th>
                                                                            
                                    </tr>
                                </thead>
                                <?php
  	$no=1;
  	$tampil = mysqli_query($db, "SELECT * FROM users");
  	while ($data=mysqli_fetch_array($tampil)){
  ?>
                                <tbody>
                                    <tr style="text-align: center;">
                                        <th scope="row"><?php echo $no ?></th>
                                        <td><?php echo $data['id'];?></td>
                                        <td><?php echo $data['username'];?></td>
                                        <td><?php echo $data['password'];?></td>
                                        <td><?php echo $data['level'];?></td>
                                        
                                         
                                    </tr>
                                </tbody>
                        </div>
                    </div>
                </div>
                <?php
	$no++;
	}
  ?>
                </table>

                <?php 
}
?>


            </div>
        </div>
        <div class="row" style="padding-top: 50px">
            <div class="navbar navbar-expand-lg  fixed-bottom col-sm navbar-dark bg-dark">
                <div class="text-white">Copyright &copy; 2021 -  PSB Online Versi 1.0 - Rizkiah Rahmah Hatta : 
                    <?php do_print()?>
                    </div>
            </div>
        </div>
    </div>


</body>

<script type="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>