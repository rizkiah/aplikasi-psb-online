<?php
session_start();
include('koneksi.php');
 
?>
<!--
Tampilan Resgister Akun Peserta
-->

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Register Akun Peserta</title>

    <style type="text/css">
    body {
        padding-top: 40px;
        padding-bottom: 50px;
        background-color: #ffffff;
    }

    .container {
        height: 200px;
        width: 600px;
    }

    .from-signin {
        max-width: 500px;
        padding: 50px;
        margin: 0 auto;
        box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.4);
        display: block;
        border-radius: 7px;
    }

    input {
        margin-bottom: 10px;
    }
    </style>

</head>

<body>


    <div class="container">
        <div class="card text-white" style="width:400px; height: 470px;">
            <form method="POST" action="?page=buat_akun&aksi=tambah">
                <div class="card-header bg-primary">
                    <h2 class="form-signin-heading"><span class="glyphicon glyphicon-lon-in"></span>Register</h2>
                    
                </div>
                <div class="card-body text-dark">

                <img class="mb-4" src="images/man.png" alt="" width="72" height="57">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Buat Username"
                            name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Buat Password" name="password">
                    </div>
                    <div class="form-group">

                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>

                </div>
        </div>

        </form>

    </div>



    <!--
Aksi Untuk Create 
-->


    <?php if(isset($_GET['aksi']) && $_GET['aksi']=='tambah'){ 
	$username =$_POST['username'];
	$password =md5($_POST['password']);
	$level="User";
	$sql=mysqli_query($db,"INSERT INTO users(username, password, level) VALUES ('$username','$password','$level')");
	
    if($sql){       
       
        header('location:login.php?');
        
	}
}
?>

</body>
<script type="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>