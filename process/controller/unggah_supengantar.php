<?php
session_start();
include "koneksi.php"; 

// Lokasi folder foto yang diupload
$destination_file = '../dist/img/abc/';

	/*--------------- script cegah upload file shell.php via *.jpg -------------*/
	if(isset($_FILES['fupload_supengantar'])){
	

		// Ambil beberapa informasi tentang si foto
		$lokasi_file = $_FILES['fupload_supengantar']['tmp_name'];
		$tipe_file = $_FILES['fupload_supengantar']['type'];
		$nama_file = $_FILES['fupload_supengantar']['name'];
		$file_size = $_FILES['fupload_supengantar']['size'];

		// cek ukuran file gambar, tidak boleh lebbih dari 2mb
		if ($file_size > 2048000) {
			echo "
			<script>
				alert('File harus dibawah 2MB.');
				history.go(-1);
			</script>";
			die();
		}

		/*--------------------------------------------------------------------------*/
		
		// Mencegah nama file agar tidak sama
		$acak           = rand(1,999999); // fungsi angka acak
		$nama_file_unik = $acak.$nama_file;
		
		/*--------------- script cegah upload file shell.php via *.jpg --------------
		explode tipe file dari sebuah file name utuh.
		biasanya file shell.php direname menjadi shell.php.jpg.
		file shell.php.jpg tsb akan di bypass dgn berbagai macam cara untuk
		dapat masuk sebagai file shell.php.
		ekstensi *.php ini akan di filter dgn perintah dibawah ini sehingga
		tidak dapat masuk.
		----------------------------------------------------------------------------*/
		$arr = explode('.',$nama_file);
		$file_ext = strtolower(end($arr));
		/*--------------------------------------------------------------------------*/
		
		//apabila ada gambar yang di upload
		if (!empty($lokasi_file)){
		
			/*------------------ script cegah upload file shell.php via *.jpg ------------------
			mendefinisikan tipe file kedalam array dr gambar atau foto yg akan di upload.
			-----------------------------------------------------------------------------------*/
			$expensions = array("jpeg","jpg","pjpeg","png","gif");

			if(in_array($file_ext,$expensions)== false){
				echo "<script>window.alert('Upload dokumen surat pengantar gagal, pastikan file yang di upload bertipe *.JPG, *.PNG, *.GIF');
					history.go(-1);
					</script>
					";

				exit;
			}
			/*----------------------------------------------------------------------------------*/
			
			else {				

				/* versi PDO */
				$data_gbr = mysql_query("SELECT supengantar FROM dokumen 
											WHERE id_user = '" . $_SESSION['id_user'] . "'");
				$countData = mysql_num_rows($data_gbr);
				$r = mysql_fetch_assoc($data_gbr);
					
				// Upload file terlebih dahulu
  				move_uploaded_file($_FILES["fupload_supengantar"]["tmp_name"], $destination_file . $nama_file_unik);

  				// cek if row kk by no regis sekarang sdah ada, jika iya update data dan delete photo sebelumnya
				if ($countData > 0) {

					// hapus file sebelumnya
					@unlink('../dist/img/abc/'.$r['supengantar']); // delete file
				
					$sql = mysql_query("UPDATE dokumen SET supengantar = '$nama_file_unik' WHERE id_user = '" . $_SESSION['id_user'] . "'");

					echo 
					"
					<pre>";
					print_r($sql);
					echo "
					</pre>

					<script>
						alert('Data dokumen Surat Pengantar telah diupdate.');
						history.go(-2);
					</script>";

				}
				else {
					$sql = mysql_query("INSERT INTO dokumen(id_user,supengantar,tgl_upload) VALUES ('" . $_SESSION['id_user'] . "','$nama_file_unik','".date("Y-m-d")."')");

					echo 
					"
					<pre>";
					print_r($sql);
					echo "
					</pre>

					<script>
						alert('Data dokumen Surat Pengantar telah ditambahkan.');
						history.go(-2);
					</script>";
				}

			}
		}
	}
?>