<?php
session_start();
include('koneksi.php');

if($_SESSION['username']==""){
		header("location:login.php");
} 
 
$sql = "select nama, NA from peserta order by NA desc";
$result = $db->query($sql);

$arrayNama = array();
$arrayNilaiAkhir = array();
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $arrayNama[]='"'.$row['nama'].'"';
        $arrayNilaiAkhir[]=$row['NA'];
    }
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
    <title>DashBoard</title>
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

                <h1> Dashboard </h1>
                Selamat Datang <?php echo $_SESSION['username']."-".$_SESSION['level']?>
                <div class="col md-2"><br>
                    <div class="card">
                        <div class="card-header bg-primary text-white">Grafik Nilai Siswa yang Mendaftar</div>
                        <div class="card-body">
                            
<script type="text/javascript" src="lib/Highcharts-3.0.10/js/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Informasi Nilai Calon Siswa'
            },
            subtitle: {
                text: 'Source: www.psb_online.com'
            },
            xAxis: {
                categories: [
                    <?=join($arrayNama,',')?>
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Nilai Akhir'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Nilai Siswa',
                data: [ <?=join($arrayNilaiAkhir,',')?>]
    
            },   ]
        });
    });
</script>
 
<div class="col md-2" >
    <div class="card">         
        <div class="card-body">
            <div id="container"></div>
        </div>
    </div> 
</div>
<script src="lib/Highcharts-3.0.10/highcharts.js"></script>
<script src="lib/Highcharts-3.0.10/modules/exporting.js"></script>

                            <div id="container"></div>
                        </div>
                    </div>
                </div>   
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
    ?>

</body>

<script type="js/bootstrap.js"></>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="lib/Highcharts-3.0.10/highcharts.js"></script>
<script src="lib/Highcharts-3.0.10/modules/exporting.js"></script>
</html>