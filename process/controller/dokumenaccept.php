<?php
//error_reporting(0);
session_start();
include "koneksi.php"; 
include "fungsi.php";

$id=$_GET['tid'];
	
$simpan=mysql_query("UPDATE dokumen SET verifikasi = 1, status_not = '' WHERE id_dokumen = '$id'");
// print_r($simpan);
// exit();

if($simpan) 
{ 
	msgbox("Berhasil Tersimpan","../views/datadokumen.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("Maaf Gagal Tersimpan","../views/datadokumen.php");
		history.go(-1);
	</script>
<?php } 

?>

		

