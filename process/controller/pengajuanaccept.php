<?php
//error_reporting(0);
session_start();
include "koneksi.php"; 
include "fungsi.php";

$id=$_GET['tid'];
	

$simpan=mysql_query("UPDATE pengajuan SET status_konfirmasi = 1 WHERE id_pengajuan = '$id'");
// print_r($simpan);
// exit();

if($simpan) 
{ 
	msgbox("Berhasil Tersimpan","../views/datapengajuanSKU.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("gagal","../views/datapengajuanSKU.php");
		history.go(-1);
	</script>
<?php } 

?>

		

