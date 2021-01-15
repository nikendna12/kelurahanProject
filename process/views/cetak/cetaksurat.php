<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bukti Pendaftaran Siswa Online</title>
<?php
  include "../../controller/koneksi.php"; 
  include "../../bagan/head.html" ;
  session_start();
	
  $sql = mysql_query("SELECT * FROM user 
                          WHERE id_user = '$_SESSION[id_user]' ");
  $r = mysql_fetch_array($sql);

  $sql2 = mysql_query("SELECT * FROM pengajuan
                          WHERE username = '$_SESSION[username]' ");
  $r2 = mysql_fetch_array($sql2);
?> 
</head>

<body>
  <p align="center">
    <h3 align="center">PEMERINTAH KOTA TANGERANG <br> KECAMATAN KARAWACI <br> <b> KELURAHAN KARAWACI BARU</b></h3>
    <small>Jl. Paus Raya No. 1 Perumnas 1 Kode Pos. 15116 Telp. (021) 55791896</small>
    <br>
    T A N G E R A N G
    <hr><br>
    <b><u>SURAT KETERANGAN USAHA</u></b><br>
    Nomor : 401 / 106 - Ekbang / X / 2019<br><br>
    Yang bertanda tangan dibawah ini, Lurah Karawaci Baru Kecamatan Karawaci Kota Tangerang menerangkan bahwa :<br>
    </p>
    <pre>
            Nama               :  <?php echo $r['nama_lengkap'] ; ?> 
            Jenis Kelamin      :  <?php echo $r['jkel'] ; ?> 
            Tempat Tgl Lahir   :  <?php echo $r['tempat_lahir'] ; ?> , <?php echo date_format(date_create($r['tgl_lahir']), "d-m-Y") ; ?> 
            Bangsa / Agama     :  <?php echo $r['bangsa'] ; ?> / <?php echo $r['agama'] ; ?> 
            Pekerjaan          :  <?php echo $r['pekerjaan'] ; ?> 
            Nomor NIK KTP      :  <?php echo $r['nik_ktp'] ; ?> 
            Alamat             :  <?php echo $r['alamat'] ; ?> 
    </pre>
    <p align="center">
    Menerangkan bahwa warga tersebut memiliki Usaha di lingkungan Kelurahan Karawaci Baru Kecamatan Karawaci Kota Tangerang sebagai berikut : <br>
    </p>
    <pre>
            Nama Usaha         :  <b><?php echo $r2['nama_usaha'] ; ?> </b>
            Alamat Usaha       :  <?php echo $r2['alamat_usaha'] ; ?> 
            Masa Berlaku       :  <?php echo date_format(date_create($r2['tgl_apply']), "d-m-Y") ; ?> s/d <?php echo date_format(date_create($r2['masa_berlaku']), "d-m-Y") ; ?> 
            Catatan            :  1. Surat keterangan ini bukan merupakan Surat Izin Usaha
                                  2. Tempat usaha tidak menggunakan Tanah Fasos
                                     Fasum Kota Tangerang (trotoar, jalan)
                                  3. Tempat usaha tidak berada diatas saluran air
                                  4. Wajib menyediakan tempat sampah dan tanaman
    </pre>
    <p align="center">
    Demikian surat keterangan ini kami buat dan kepada yang berkepentingan mohon bantuannya.
    </p>
    <br><br>
    <p align="right">
    Tangerang, <?php echo date_format(date_create($r2['tgl_apply']), "d-m-Y") ; ?><br>
    LURAH KARAWACI BARU
    </p>
  

  


  
           
</body>
</html>

