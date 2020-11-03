<?php
//error_reporting(0);
session_start();
include "koneksi.php"; 
include "fungsi.php";

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nokk=$_POST['nokk'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];
$bangsa=$_POST['bangsa'];
$agama=$_POST['agama'];
$jkel=$_POST['jkel'];
$id_user=$_POST['id_user'];
$cek = mysql_query("SELECT * FROM user where nik_ktp = '$nik'");
$usernameresult = mysql_num_rows($cek);
// if($usernameresult > 0){ ?>
//  	<script language="javascript"> -->
//  		alert("NIK sudah ADA, silahkan masukan NIK yang lain","../../index.php");
// 		history.go(-1);
// 	</script>
//  <?php 
// exit(); 
// }	

$simpan=mysql_query("UPDATE user SET nama_lengkap = '$nama',
									 nik_ktp = '$nik',
									 alamat = '$alamat',
									 no_kk = '$nokk',
									 no_hp = '$nohp',
									 email = '$email',
									 bangsa = '$bangsa',
									 agama = '$agama',
									 jkel = '$jkel',
									 status_verifikasi = '2'
									 WHERE id_user = '$id_user'");
// print_r($simpan);
// exit();

if($simpan) 
{ 
	msgbox("Berhasil Tersimpan","../views/datapengaju.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("gagal","../views/datapengaju.php");
		history.go(-1);
	</script>
<?php } 

?>

		

