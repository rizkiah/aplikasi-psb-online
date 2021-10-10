<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <style type="text/css">
    body {
        padding-top: 40px;
        padding-bottom: 50px;
        background-color: #FFFAF0;
    }

    .container {
        height: 200px;
        width: 500px;
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

    <br />


    <br />
    <br />
    <div class="container">
        <div class="card text-white" style="width:400px; height: 470px;">
            <form class="form-signin-heading" method="POST" action="ceklogin.php">
                <div class="card-header bg-primary">
                    <h2 class="form-signin-heading"><span class="glyphicon glyphicon-lon-in"></span>PSB Online SMA</h2>
                </div>
                <div class="card-body text-dark">
                    <div class="form-group"><br>


                        <label for="username">
                            <font color="black" class="font-weight-bold">Username</font>
                        </label>
                        <input type="text" id="username" name="username" class="form-control"
                            placeholder="Masukkan username" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <font color="black" class="font-weight-bold">Password</font>
                        </label>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Masukkan password" required>
                    </div>

                    <div class="form-group"><br>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                            <label class="form-check-label" for="dropdownCheck2">
                                <font color="black"> Remember me</font>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">LOGIN</button>
                    <p><br>Belum Punya Akun? Klik <a class="btn btn-sm btn-primary" href="buat_akun.php">Buat Akun</a>
                    </p>


                </div>
        </div>

        </form>

    </div>



    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			 echo "
			        <script type='text/javascript'>
			        alert('Username atau Password Anda Salah!');
			        history.back(self);
			        </script>";
    	}
			  
	}
?>



    <script type="js/bootstrap.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>