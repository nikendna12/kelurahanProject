<?php
    session_start(); //memulai membaca sesi
    unset($_SESSION['username']); //menghapus nilai sesi yang diregistrasi
    unset($_SESSION['nama_lengkap']); //menghapus nilai sesi yang diregistrasi
    unset($_SESSION['password']); //menghapus nilai sesi yang diregistrasi
    unset($_SESSION['level']); //menghapus nilai sesi yang diregistrasi
    unset($_SESSION['login']); //menghapus nilai sesi yang diregistrasi
    session_destroy(); //menghancurkan sesi
    //header('location:../../index.html'); //mendirect ke index.php
    
?>
<script language="javascript">
    alert("Anda telah logout !");
    document.location="../../index.php";
</script>
