<?php
//error_reporting(0);
//session_start();
include "koneksi.php"; 
include "fungsi.php";

$user=$_POST['username'];
$nama=$_POST['nama'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

$cek = mysql_query("SELECT * FROM user where username = '$user'");
$usernameresult = mysql_num_rows($cek);
if($usernameresult > 0){ ?>
	<script language="javascript">
		alert("Username sudah ADA, silahkan masukan username yang lain","../../index.php");
		history.go(-1);
	</script>
<?php 
exit(); 
}	

if($password1==$password2){
		$simpan=mysql_query("insert into user
		values('','$user','$password1','$nama','nopict','2','','','','','','','','','','','')");

		if($simpan) 
		{ 
			msgbox("Berhasil Tersimpan","../../index.php");
		} else 
		{ ?>
			<!-- msgbox("gagal","index.php"); //redirect ke index.php?tampilan=daftardg cara naik 1 folder -->
			<script language="javascript">
				alert("gagal","../../index.php");
				history.go(-1);
			</script>
		<?php } 
}
else
{
	msgbox("Password Berbeda","../../index.php");
}
?>

		

