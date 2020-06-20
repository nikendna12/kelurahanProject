<?php
//error_reporting(0);
include "koneksi.php"; //memanggil koneksi dg cara, naik 1 folder

$username=$_POST['username'];
$password=$_POST['password']; //engencrypssi password
$sql=mysql_query("select*from user where username='$username' and password='$password'");
//menocokan data yang diinput dengan data yang ada di tabel
$jumlahdata=mysql_num_rows($sql);
$user=mysql_fetch_array($sql);
if ($jumlahdata > 0) //apabila datanya diketemukan
{
	session_start(); //skrip memulai sesi
	 //memasukan nilai sesi dari nilai di tabelmember
	$_SESSION['username']=$user['username'];
	$_SESSION['nama_lengkap']=$user['nama_lengkap'];
	$_SESSION['password']=$user['password'];
	$_SESSION['level']=$user['level'];
	$_SESSION['login']=1;
	//header('location:../');
	?>

	<script language="javascript">
		alert("Selamat datang, Saudara/i <?php echo $user['nama_lengkap'];?> silahkan lengkapi data siswa dan nilai");
		document.location="../views/halamandepan.html";
	</script>
	<?php 
}
else
{
	//msgbox("gagal login","../");
?>
<script language="javascript">
	alert("Maaf, Anda Gagal Login");
	history.go(-1);
</script>

<?php } ?>