<?php
//error_reporting(0);
session_start();
include "koneksi.php"; 
include "fungsi.php";

$id = $_GET['tid'];
$statusnot = $_POST['status_not'];
$simpan=mysql_query("UPDATE dokumen SET status_not = '$statusnot' WHERE id_dokumen = '$id'");
// print_r($simpan);
// exit();

if($simpan) 
{ 
	msgbox("Berhasil Tersimpan","../views/datadokumen.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("gagal","../views/datadokumen.php");
		history.go(-1);
	</script>
<?php } 

?>

		

