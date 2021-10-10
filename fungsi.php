<?php
 
//fungsi koneksi ke database
function koneksi(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "psb_online";
    $port = "3306";

    $conn = mysqli_connect($server,$user,$password,$nama_database,$port);
    if(!$conn){
        die("Gagal terhubung dengan database : ".mysqli_connect_error());
    }
    return $conn;
}

//fungsi query
function query($query){
    $qry = mysqli_query(koneksi(),$query);
    if($qry == true){
        return $qry;
    }else{
        return mysqli_error();
    }
}

//fungsi mengitung jumlah record data 
function jumlah_data($table,$syarat){

    $sql    = "select * from $table  $syarat";
    $jumlah = mysqli_num_rows(query($sql));

    return $jumlah;
}
 
//membuat procedure menampilkan tanggal saat ini
function do_print(){                   
    echo date('d-m-Y');                    
    
}

jumlah_data($table="peserta",$syarat=" ");
