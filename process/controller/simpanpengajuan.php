<?php
//error_reporting(0);
session_start();
include "koneksi.php";
include "fungsi.php";

$namausaha=$_POST['namausaha'];
$namausaha_ = mysql_real_escape_string($namausaha);
$alamat=$_POST['alamat'];
$tglapply=date("Y-m-d");
$masaberlaku=date("Y-m-d", strtotime("+3 months"));
$alasan=$_POST['alasan'];
$username=$_SESSION['username'];
$cek = mysql_query("SELECT * FROM pengajuan where nama_usaha = '$namausaha' AND username ='" . $_SESSION['username'] . "'");
$usernameresult = mysql_num_rows($cek);
if($usernameresult > 0){ ?>
 	<script language="javascript"> -->
 		alert("Nama Usaha sudah ADA, silahkan masukan Nama Usaha yang lain","../views/pengajuan.php");
		history.go(-1);
	</script>
 <?php 
exit(); 
}	

$simpan=mysql_query("insert into pengajuan values('','$username','$namausaha_','$alamat','$tglapply','$masaberlaku','$alasan',0)");
// print_r($simpan);
// exit();

if($simpan) 
{ 
	msgbox("Pengajuan Anda Tersimpan, silahkan tunggu Admin mengkonfirmasi pengajuan Anda.","../views/pengajuan.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("Maaf, mohon periksa kembali form pengajuan Anda","../views/pengajuan.php");
		history.go(-1);
	</script>
<?php } 

?>

		

