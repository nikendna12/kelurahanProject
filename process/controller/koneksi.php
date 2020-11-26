<?php
$username="iaihj08v0xo3puw5";
$password="ifr2x52nfmoof5fb"; //kosongkan jika tidak ada
$host="aqx5w9yc5brambgl.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$database="qy8m3hqb9a21fcph";
$conn= mysql_connect($host,$username,$password) or die ("koneksi server gagal");
mysql_select_db($database) or die ("koneksi database gagal");
?>