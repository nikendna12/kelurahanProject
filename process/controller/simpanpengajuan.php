<?php
//error_reporting(0);
session_start();
include "koneksi.php";
include "fungsi.php";

$namausaha=$_POST['namausaha'];
$alamat=$_POST['alamat'];
$masaberlaku=$_POST['masaberlaku'];
$alasan=$_POST['alasan'];
$username=$_SESSION['username'];
$cek = mysql_query("SELECT * FROM pengajuan where nama_usaha = '$namausaha'");
$usernameresult = mysql_num_rows($cek);
if($usernameresult > 0){ ?>
 	<script language="javascript"> -->
 		alert("Nama Usaha sudah ADA, silahkan masukan Nama Usaha yang lain","../views/pengajuan.php");
		history.go(-1);
	</script>
 <?php 
exit(); 
}	

$simpan=mysql_query("insert into pengajuan values('','$username','$namausaha','$alamat','$masaberlaku','$alasan')");
// print_r($simpan);
// exit();

if($simpan) 
{ 
	msgbox("Berhasil Tersimpan","../views/pengajuan.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("gagal","../views/pengajuan.php");
		history.go(-1);
	</script>
<?php } 

?>

		

