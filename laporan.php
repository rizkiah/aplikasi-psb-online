<?php
    ob_start();
    include('koneksi.php');
    include('fungsi.php');
 
    $jlh=jumlah_data($table,$syarat);

?>

<page backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size:10pt">
    <div align="center">
        <b>LAPORAN DATA CALON SISWA</b><br><br>
    </div>
    <table style="width:99%" border="1">
        <tr valign="top" align="center">
            <th style="width:3%">No</th>
            <th style="width:3%">User ID</th>
            <th style="width:14%">Nama Siswa</th>
            <th style="width:3%">JK</th>
            <th style="width:15%">Tempat/Tanggal Lahir</th>
            <th style="width:10%">Alamat</th>
            <th style="width:15%">Telp</th>
            <th style="width:10%">Nama Ortu</th>            
            <th style="width:13%">Asal Sekolah</th>
            <th style="width:4%">Nilai Akhir</th>
            <th style="width:10%">Status</th>
            

        </tr>
        <?php
            $no=0;
            $tampil = mysqli_query($db, "SELECT * FROM peserta");
            while ($isi=mysqli_fetch_array($tampil)){
                $no++;
        ?>

        <tr valign="top">
            <td style="width:3%"><?=$no?></td>
            <td style="width:3%"><?=$isi['user_id']?></td>
            <td style="width:14%"><?=$isi['nama']?></td>
            <td style="width:3%"><?=$isi['jk']?></td>
            <td style="width:15%"><?=$isi['ttl']?></td>
            <td style="width:10%"><?=$isi['alamat']?></td>
            <td style="width:15%"><?=$isi['telp']?></td>
            <td style="width:10%"><?=$isi['nama_ortu']?></td>
            <td style="width:13%"><?=$isi['asal_sekolah']?></td>
            <td style="width:4%"><?=$isi['NA']?></td>
            <td style="width:10%"><?=$isi['status']?></td>
            

        </tr>
        <?php
    }
    ?>     
     
    </table>
</page>

<?php 
    //menggunakan html2pdf
    $content = ob_get_clean();
        // convert
    require_once('lib/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'A4', 'en', true, 'UTF-8', 0);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('data-clon-siswa.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }