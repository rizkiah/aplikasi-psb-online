<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Formulir Pendaftaran</title>

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
            <div class="col-sm-2"></div>
            <div class="col-sm" style="padding-top: 20px">

                <h3>Formulir Pendaftaran Siswa</h3>
                <!-- Formulir pendaftaran siswa -->

                <form method="POST" action="proses_siswa.php" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nis" required >
                            <div class="invalid-feedback">
                              Harus diisi.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama" required>
                            <div class="invalid-feedback">
                              Harus diisi.
                            </div>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="L" checked>
                                    <label class="form-check-label" for="gridRadios1">Laki-laki</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="P">
                                    <label class="form-check-label" for="gridRadios2">Perempuan</label>
                                </div>

                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="ttl">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="alamat" cols="45" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" name="email" placeholder="example123@gmail.com">
                            <div class="invalid-feedback">
                              Harus diisi.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telp/HP</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="telp">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Orang Tua/Wali</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama_ortu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan Orang Tua/Wali</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pekerjaan_ortu">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="asal_sekolah">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai Akhir</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="NA" required>
                            <div class="invalid-feedback">
                              Harus diisi.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Upload Pas Foto</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control-file" name="foto" id="foto" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4">
                            <button type="submit" name="submit" class="btn btn-warning"><img src="icons/plus.svg">
                                Simpan</button>
                            <button type="reset" name="reset" class="btn btn-success"><img src="icons/x.svg"> Reset
                            </button>
                        </div>
                    </div>

                </form>
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
</body> 
<script type="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>