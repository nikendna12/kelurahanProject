<?php
function msgbox($msg,$url){
echo "<script>window.alert('$msg');window.location=('$url');</script>";
}


function noregis(){
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(noregis) as maxKode FROM casis";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$koderegis = $data['maxKode'];
 
// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($koderegis, 7, 4);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
 
// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "PSB". date('y'). date('m');
$koderegis = $char . sprintf("%04s", $noUrut);
return $koderegis;
}

function antiinjection($data){
  		$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  		return $filter_sql;
}


function noujian(){
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(no_ujian) as maxKode FROM ujian_beasiswa";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$kodeujian = $data['maxKode'];
 
// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodeujian, 7, 4);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
 
// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "USM". date('y'). date('m');
$kodeujian = $char . sprintf("%04s", $noUrut);
return $kodeujian;
}


function tgl_indo($tgl){
$tanggal = substr($tgl,8,2);
$bulan = getBulan(substr($tgl,5,2));
$tahun = substr($tgl,0,4);
return $tanggal.' '.$bulan.' '.$tahun;		 
}	

function getBulan($bln){
	switch ($bln){
		case 1: 
			return "Januari";
			break;
		case 2:
			return "Februari";
			break;
		case 3:
			return "Maret";
			break;
		case 4:
			return "April";
			break;
		case 5:
			return "Mei";
			break;
		case 6:
			return "Juni";
			break;
		case 7:
			return "Juli";
			break;
		case 8:
			return "Agustus";
			break;
		case 9:
			return "September";
			break;
		case 10:
			return "Oktober";
			break;
		case 11:
			return "November";
			break;
		case 12:
			return "Desember";
			break;
	}
} 

function UploadCaraDaftar($fupload_name){
  //direktori gambar
  $vdir_upload = "admin/dist/img/";
  $vfile_upload = $vdir_upload . $fupload_name;
  $imageType = $_FILES["fupload"]["type"];

  //Simpan gambar dalam ukuran sebenarnya
  // move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  echo "<pre>";
  print_r($_FILES["fupload"]);
  echo "</pre>";

  // //identitas file asli
  // switch($imageType) {
  //   case "image/gif":
  //     $im_src=imagecreatefromgif($vfile_upload);
  //     break;
  //     case "image/pjpeg":
  //   case "image/jpeg":
  //   case "image/jpg":
  //     $im_src=imagecreatefromjpeg($vfile_upload);
  //     break;
  //     case "image/png":
  //   case "image/x-png":
  //     $im_src=imagecreatefrompng($vfile_upload);
  //     break;
  // }

  // $src_width = imageSX($im_src);
  // $src_height = imageSY($im_src);

  // //Simpan dalam versi small 300 pixel
  // //Set ukuran gambar hasil perubahan
  // if($src_width>=600){
  // $dst_width = 600;
  // } else {
  // $dst_width = $src_width;
  // }
  // $dst_height = ($dst_width/$src_width)*$src_height;

  // //proses perubahan ukuran
  // $im = imagecreatetruecolor($dst_width,$dst_height);
  // imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  // //Simpan gambar
  // switch($imageType) {
  //   case "image/gif":
  //       imagegif($im,$vdir_upload.$fupload_name);
  //     break;
  //     case "image/pjpeg":
  //   case "image/jpeg":
  //   case "image/jpg":
  //       imagejpeg($im,$vdir_upload.$fupload_name);
  //     break;
  //     case "image/png":
  //   case "image/x-png":
  //       imagepng($im,$vdir_upload.$fupload_name);
  //     break;
  // }

  // //Simpan dalam versi small 250 pixel
  // //Set ukuran gambar hasil perubahan
  // $dst_width2 = 500;
  // $dst_height2 = ($dst_width2/$src_width)*$src_height;

  // //proses perubahan ukuran
  // $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  // imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  // //Simpan gambar
  // switch($imageType) {
  //   case "image/gif":
  //       imagegif($im2,$vdir_upload . "small_" . $fupload_name);
  //     break;
  //     case "image/pjpeg":
  //   case "image/jpeg":
  //   case "image/jpg":
  //       imagejpeg($im2,$vdir_upload . "small_" . $fupload_name);
  //     break;
  //     case "image/png":
  //   case "image/x-png":
  //       imagepng($im2,$vdir_upload . "small_" . $fupload_name);
  //     break;
  // }

  // //Hapus gambar di memori komputer
  // imagedestroy($im_src);
  // imagedestroy($im);
  // imagedestroy($im2);
}



?>