<?php
//error_reporting(0);
session_start();
include "koneksi.php"; 
include "fungsi.php";

    $id = $_GET['tid'];
    $sql = mysql_query("DELETE FROM pengajuan 
                WHERE id_pengajuan = '$id' ");
  
    echo "<script>alert('Data SKU telah terhapus.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=../views/pengajuan.php'>";

?>

		

