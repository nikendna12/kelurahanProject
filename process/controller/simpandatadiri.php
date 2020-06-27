<?php
//error_reporting(0);
//session_start();
include "koneksi.php"; 
include "fungsi.php";

$nik=$_POST['nik'];
$tgllahir=$_POST['tgllahir'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$cek = mysql_query("SELECT * FROM user where nik_ktp = '$nik'");
$usernameresult = mysql_num_rows($cek);
if($usernameresult > 0){ ?>
 	<script language="javascript"> -->
 		alert("NIK sudah ADA, silahkan masukan NIK yang lain","../../index.php");
		history.go(-1);
	</script>
 <?php 
exit(); 
}	

$simpan=mysql_query("update user set nama = '$nama',
									 nik_ktp = '$nik',
									 alamat = '$alamat',
									 tgl_lahir = '$tgllahir' WHERE username ='" . $_SESSION['username'] . "'");

if($simpan) 
{ 
	msgbox("Berhasil Tersimpan","../../index.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("gagal","../../index.php");
		history.go(-1);
	</script>
<?php } 

?>

		

