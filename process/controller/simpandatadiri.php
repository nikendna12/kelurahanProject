<?php
//error_reporting(0);
session_start();
include "koneksi.php"; 
include "fungsi.php";

$nik=$_POST['nik'];
$tgllahir=$_POST['tgllahir'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$pekerjaan=$_POST['pekerjaan'];
$nokk=$_POST['nokk'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];
$bangsa=$_POST['bangsa'];
$agama=$_POST['agama'];
$tmptlahir=$_POST['tempat_lahir'];
$jkel=$_POST['jkel'];
$session=$_SESSION['id_user'];
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
									 tgl_lahir = '$tgllahir',
									 pekerjaan = '$pekerjaan',
									 no_kk = '$nokk',
									 no_hp = '$nohp',
									 email = '$email',
									 bangsa = '$bangsa',
									 agama = '$agama',
									 tempat_lahir = '$tmptlahir',
									 jkel = '$jkel',
									 status_verifikasi = '1'
									 WHERE id_user = '$session'");
// print_r($simpan);
// exit();

if($simpan) 
{ 
	msgbox("Berhasil Tersimpan","../views/datadiri.php");
} 
else { ?>
	<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
	<script language="javascript">
		alert("gagal","../views/datadiri.php");
		history.go(-1);
	</script>
<?php } 

?>

		

