
<?php
//error_reporting(0);
//session_start();
include "/koneksi.php"; //memanggil koneksi dg cara, naik 1 folder, lalu masuk folder pengaturan
include "fungsi.php";
$noregis = noregis();
$noujian = noujian();

$user=$_POST['username'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$password1=md5($_POST['password1']);
$password2=md5($_POST['password2']);
$email=$_POST['email'];
$asal=$_POST['asal'];
$jamdaftar = date('h:i:s');
$tgldaftar = date('Y-m-d'); 
$tglujian = date('Y-m-d', strtotime($tgldaftar. ' + 4 days'));
$cek = mysql_query("SELECT * FROM casis where username = '$user'");
$usernameresult = mysql_num_rows($cek);
if($usernameresult > 0){ ?>
	<script language="javascript">
		alert("Username sudah ADA, silahkan masukan username yang lain","index.php");
		history.go(-1);
	</script>
<?php 
exit(); 
}	

if($password1==$password2){
		$simpan=mysql_query("insert into 
		casis(noregis,tgl_daftar,jam_daftar,username,password,nisn,nama_casis,email,asal_sekolah) 
		values('$noregis','$tgldaftar','$jamdaftar','$user','$password1','$nisn','$nama','$email','$asal')");

		$simpanujian=mysql_query("insert into 
		ujian_beasiswa(no_ujian,noregis,tgl_ujian) 
		values('$noujian','$noregis','$tglujian')");


		if($simpan && $simpanujian) { 
			msgbox("Berhasil Tersimpan","index.php");
			} else { ?>
			<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
			<script language="javascript">
			alert("gagal","index.php");
			history.go(-1);
			</script>
		<?php } 
}
else
{
	msgbox("Password Berbeda","index.php");

}
?>

		

