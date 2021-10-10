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

    <title>Status Pendaftaran</title>


</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <div class="container" style="padding-top: 70px">
        <div class="row">
            <div class="col-sm-2">
                <h4>Menu</h4>
                <ul style="list-style-type:none;padding: 0">
                    <li><a class="btn btn-primary btn-md" role="button" href="dashboard.php"><img src="icons/house.svg">
                            Dashboard</a></li><br>
                    <li><a class="btn btn-primary btn-md" role="button" href="entri_siswa.php"><img
                                src="icons/people.svg"> Isi Formulir</a></li><br>
                    <li><a class="btn btn-primary btn-sm" role="button" href="status.php"><img
                                src="icons/bell.svg">Status Pendaftaran</a></li><br>
                    <li><a class="btn btn-primary btn-md" role="button" href="logout.php"><img src="icons/unlock.svg">
                            Logout</a></li><br>
                </ul>


            </div>
            <div class="col-sm" style="padding-top: 20px">

                <?php if($_SESSION['level'] !=='Administrator'){ 		
 		
				$tampil = mysqli_query($db, "SELECT *FROM users WHERE username='$_SESSION[username]' ");
				$data=mysqli_fetch_array($tampil);
				$user_id=$data['id'];
				$tampil2 = mysqli_query($db, "SELECT * FROM users, peserta WHERE users.id='$user_id'
				AND users.id=peserta.user_id");
				$data2=mysqli_fetch_array($tampil2);
				?>

                <table>
                    <tr>
                        <td rowspan="10" width="158"><img src="images/<?php echo $data2['foto'];?>" width="128"></td>
                        <td width="100">Nama</td>
                        <td>:</td>
                        <td><?php echo $data2['nama']?></td>
                    </tr>

                    <tr>

                        <td>NIS</td>
                        <td>:</td>
                        <td><?php echo $data2['nis']?></td>
                    </tr>

                    <tr>

                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $data2['alamat']?></td>
                    </tr>

                    <tr>

                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><?php echo $data2['asal_sekolah']?></td>
                    </tr>
                    <tr>

                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $data2['email']?></td>
                    </tr>
                    <tr>

                        <td>Status</td>
                        <td>:</td>
                        <td><?php echo $data2['status']?></td>
                    </tr>

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
        <div class="row" style="padding-top: 50px">
                    <div class="navbar navbar-expand-lg  fixed-bottom col-sm navbar-dark bg-dark">
                        <div class="text-white">Copyright &copy; 2021 - PSB Online Versi 1.0 - Rizkiah Rahmah Hatta :
                            <?php
                //membuat procedure menampilkan tanggal saat ini
                function do_print(){                   
                    echo date('d-m-Y');                    
                    
                }

                do_print();
                 
                ?>
                        </div>

                    </div>
                </div>
    </div>



    <script type="js/bootstrap.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>