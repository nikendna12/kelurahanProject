<?php
	//error_reporting(0);
	session_start();
	include "koneksi.php";
	include "fungsi.php";

	$id_pengajuan = $_GET['id'];
	$masaberlaku = date("Y-m-d", strtotime("+3 months"));
	print_r($id_pengajuan);

	$simpan = mysql_query("UPDATE pengajuan SET masa_berlaku = '$masaberlaku'
						WHERE id_pengajuan = '$id_pengajuan'");
	if($simpan)
	{
		msgbox("Berhasil Perpanjang SKU","../views/pengajuan.php");
	}
	else { ?>
		<script language="javascript">
			alert("Gagal Perpanjang SKU","../views/pengajuan.php");
			history.go(-1);
		</script>
	<?php } 
	
	?>
		

