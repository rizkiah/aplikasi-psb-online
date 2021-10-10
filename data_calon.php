<?php
session_start();
include('koneksi.php');
include('fungsi.php');
if($_SESSION['username']==""){
		header("location:login.php");
}
$jlh=jumlah_data($table,$syarat);

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

    <title>Data Calon Siswa</title>
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

                <h1> Data Calon Siswa</h1>
                Selamat Datang <?php echo $_SESSION['username']."-".$_SESSION['level']?>

                <?php if($_SESSION['level']=='Administrator')
{ ?>
                <div class="container"><br>
                    <a href="laporan.php" class="btn btn-primary target=" _blank"">Cetak Data</a>
                    <div class="row">
                        <div class="col-md-2"><br></div>
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th scope="col">No</th>
                                        <th scope="col">No Pendaftaran</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Nama Siswa</th>
                                        <th scope="col">JK</th>
                                        <th scope="col">Tempat/Tanggal Lahir</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Asal Sekolah</th>
                                        <th scope="col">Nilai Akhir</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <?php
  	$no=1;
  	$tampil = mysqli_query($db, "SELECT * FROM peserta");
  	while ($data=mysqli_fetch_array($tampil)){
  ?>
                                <tbody>
                                    <tr style="text-align: center;">
                                        <th scope="row"><?php echo $no ?></th>
                                        <td><?php echo $data['user_id'];?></td>
                                        <td><?php echo $data['nis'];?></td>
                                        <td><?php echo $data['nama'];?></td>
                                        <td><?php echo $data['jk'];?></td>
                                        <td><?php echo $data['ttl'];?></td>
                                        <td><?php echo $data['alamat'];?></td>
                                        <td><?php echo $data['asal_sekolah'];?></td>
                                        <td><?php echo $data['NA'];?></td>
                                        <td><img src="images/<?php echo $data['foto'];?>"
                                                style="width: 70px;height: 70px"></td>
                                        <td><?php echo $data['status'];?></td>

                                        <td align="center">
                                            <button type="edit" name="edit">
                                                <a class="btn btn-dark btn-sm" href="editstatus.php?id=<?php echo $data['id']?>">EDIT</a></button>
                                            <button type="delete" name="delete">
                                                <a class="btn btn-danger btn-sm" href="deletesiswa.php?id=<?php echo $data['id']?>"
                                                    onclick="return confirm ('Yakin akan menghapus?')">DELETE</a></button>
                                        </td>

                                    </tr>                                     
                                </tbody>
                        </div>
                    </div>
                </div>
                <?php
	$no++;
	}
  ?>

                <tfoot>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td scope="row" colspan="5" align="right"><b>Total : <?=$jlh?></b></td>
                </tfoot>
                </table>
                <?php 
                }
                ?>
            </div>
        </div>
        <div class="row" style="padding-top: 50px">
            <div class="navbar navbar-expand-lg  fixed-bottom col-sm navbar-dark bg-dark">
                <div class="text-white">Copyright &copy; 2021 - PSB Online</div>
            </div>
        </div>
    </div>

</body>

<script type="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>