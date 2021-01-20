<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bukti Pendaftaran Siswa Online</title>
<?php
  include "../../controller/koneksi.php"; 
  include "../../bagan/head.html" ;
  session_start();
	$id = $_GET['tid'];
  $sql = mysql_query("SELECT * FROM user 
                          WHERE id_user = '$_SESSION[id_user]' ");
  $r = mysql_fetch_array($sql);

  $sql2 = mysql_query("SELECT * FROM pengajuan
                          WHERE username = '$_SESSION[username]' and id_pengajuan = '$id'");
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
    Nomor : 401 / <?= sprintf('%03d', $r2['id_pengajuan']); ?> - Ekbang / <?= date_format(date_create($r2['tgl_apply']), "m / Y") ?><br><br>
    Yang bertanda tangan dibawah ini, Lurah Karawaci Baru Kecamatan Karawaci Kota Tangerang menerangkan bahwa :<br>
    </p>
    <table>
      <tr>
        <td style="width: 80px;"></td>
        <td style="width: 145px;">Nama</td>
        <td style="width: 15px;">:</td>
        <td style="width: 450px;"><b><?php echo $r['nama_lengkap'] ; ?> </b></td>
      </tr>
      <tr>
        <td></td>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $r['jkel'] ; ?> </td>
      </tr>
      <tr>
        <td></td>
        <td>Tempat Tgl Lahir</td>
        <td>:</td>
        <td><?php echo $r['tempat_lahir'] ; ?> , <?php echo date_format(date_create($r['tgl_lahir']), "d-m-Y") ; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Bangsa / Agama </td>
        <td>:</td>
        <td><?php echo $r['bangsa'] ; ?> / <?php echo $r['agama'] ; ?> </td>
      </tr>
      <tr>
        <td></td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $r['pekerjaan'] ; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Nomor NIK KTP</td>
        <td>:</td>
        <td><?php echo $r['nik_ktp'] ; ?> </td>
      </tr>
      <tr>
        <td></td>
        <td>Alamat</td>
        <td>:</td>
        <td style="width: 450px;"><?php echo $r['alamat'] ; ?></td>
      </tr>
    </table>
    <p align="center">
              Menerangkan bahwa warga tersebut memiliki Usaha di lingkungan Kelurahan Karawaci Baru Kecamatan Karawaci Kota Tangerang sebagai berikut : <br>
    </p>
    <table>
      <tr>
        <td style="width: 80px;"></td>
        <td style="width: 135px;">Nama Usaha</td>
        <td style="width: 15px;">:</td>
        <td style="width: 450px;" ><b><?php echo $r2['nama_usaha'] ; ?> </b></td>
      </tr>
      <tr>
        <td></td>
        <td style="vertical-align: top;">Alamat Usaha</td>
        <td>:</td>
        <td style="width: 450px;" ><?php echo $r2['alamat_usaha'] ; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Masa Berlaku</td>
        <td>:</td>
        <td><?php echo date_format(date_create($r2['tgl_apply']), "d-m-Y") ; ?> s/d <?php echo date_format(date_create($r2['masa_berlaku']), "d-m-Y") ; ?> </td>
      </tr>
      <tr>
        <td></td>
        <td style="vertical-align: top;">Catatan</td>
        <td style="vertical-align: top;">:</td>
        <td>1. Surat keterangan ini bukan merupakan Surat Izin Usaha
            <br>2. Tempat usaha tidak menggunakan Tanah Fasos
            <br> &nbsp; &nbsp; Fasum Kota Tangerang (trotoar, jalan)
            <br>3. Tempat usaha tidak berada diatas saluran air
            <br>4. Wajib menyediakan tempat sampah dan tanaman
        </td>
      </tr>
    </table>
    <p align="center">
    Demikian surat keterangan ini kami buat dan untuk dapat dipergunakan dengan sebagaimana mestinya.
    </p>
    <br><br>
    <p align="right" style="margin-right:25px;">
    Tangerang, <?php echo date_format(date_create($r2['tgl_apply']), "d-m-Y") ; ?><br><br><br><br><br>
    LURAH KARAWACI BARU
    </p>
  

  


  
           
</body>
</html>

