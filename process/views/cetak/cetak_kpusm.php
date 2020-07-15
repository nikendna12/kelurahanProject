<?php
	session_start();
	include "../../koneksi.php";
  include "../../fungsi.php";
	
  $sql = mysql_query("SELECT * FROM casis, ujian_beasiswa
            WHERE casis.noregis = ujian_beasiswa.noregis
            AND ujian_beasiswa.noregis = '$_SESSION[noregis]' ");

  $r = mysql_fetch_array($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.judul {
	background-color: #06C;
	color: #FFF;
}
#data {
	font-size: 16px;
}
#tabel {
	border: thin solid #999;
	background-color: #CCC;
}
</style>
</head>

<body>
<table width="400" border="0" align="center" id="tabel">
  <tr>
    <td><div align="center" class="judul">
      <h2>KARTU PESERTA<BR />
      UJIAN PROGRAM BEASISWA</h2>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <h3>Sekolah Menengah Atas</h3>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <h2><?php echo $r['no_ujian']; ?></h2>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center" id="data"><?php echo $r['noregis']; ?></div></td>
  </tr>
  <tr>
    <td><div align="center" id="data"><?php echo $r['nama_casis']; ?></div></td>
  </tr>
  <tr>
    <td><div align="center" id="data"><?php echo tgl_indo($r['tgl_ujian']); ?> - <?php echo $r['jam_ujian']; ?> | <?php echo $r['ruang_ujian']; ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>