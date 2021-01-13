<!DOCTYPE html>
<html>
<head>
  <?php 
    include "../controller/koneksi.php"; 
    include "../bagan/head.html" ;
    session_start(); 
  ?>
</head>
<style>
  td {
  white-space: normal !important; 
  word-wrap: break-word;  
  }
  table {
    table-layout: fixed;
  }
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include "../bagan/header.html" ; ?>
  <?php include "../bagan/menukiri.php" ; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-aqua">
              <h3>
                Welcome <?php echo $_SESSION['nama_lengkap'];?> 
                <small> <?php echo $_SESSION['username'];?></small>
              </h3>
            </div>
            <div class="box-footer no-padding">
              <div class="container">
                <div class="col-md-11">
                  <ul class="list-unstyled">
                      <br>
                      <li><b>PERHATIAN!</b>
                        <ul>
                            <li>Segera lengkapi data Anda dan kelengkapan dokumen yang dibutuhkan.</li>
                            <li>Klik menu Profil Diri untuk melengkapi data Anda.</li>
                            <li>Klik menu Unggah Dokumen untuk menggunggah dokumen yang diperlukan untuk verifikasi data. Mohon di scan dengan gambar jelas. </li>
                            <li>Klik menu Mengajukan dan pilih Ajukan Usaha Baru untuk mengajukan pembuatan Surat Keterangan Usaha baru.</li>
                            <li>Klik menu Cetak SKU untuk mencetak SKU Anda bila telah selesai diverifikasi oleh admin.</li>

                        </ul>
                      </li>
                  </ul>
                  <hr>
                  <ul class="list-unstyled">
                      <li><b>Upload kelengkapan dokumen dibawah ini untuk keperluan verifikasi:</b>
                      <ul>
                          <li>Scan Kartu Tanda Pengenal.</li>
                          <li>Scan Kartu Keluarga.</li>
                          <li>Foto Lokasi Usaha Anda.</li>
                          <li>Scan Surat Pengantar RT/RW.</li>
                          <li>Scan Surat Pernyataan Usaha.</li>
                      </ul>
                      </li><br>
                      <li><b>Dengan ketentuan sebagai berikut:</b>
                      <ul>
                          <li>File dokumen yang diunggah harus merupakan hasil scan, boleh foto asalkan data terbaca dengan jelas.</li>
                          <li>Ukuran file yang diunggah tidak melebihi 2MB</li>
                      </ul>
                      </li>   <hr>
                      <li><b>Keterangan : </b><br>
                      *) Untuk Surat Pengantar RT/RW dibuat berdasarkan wilayah domisili tempat usaha dan wajib berada di wilayah Kelurahan Karawaci Baru. <br>
                      *) Untuk Surat Pernyataan Usaha, boleh ditulis tangan ataupun diketik dengan komputer serta wajib berisi data diri dan alamat usaha yang bertanda tangan di atas materai</li>
                      </li><br>
                  </ul>
                </div>
                <!-- <div class="col-md-6">
                  <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 130px">Tahapan</th>
                      <th>Status </th>
                    </tr>
                    <?php
                        // $sql1 = mysql_query("select * from user where username ='" . $_SESSION['username'] . "'");
                        // $sql2 = mysql_query("select * from dokumen where id_user ='" . $_SESSION['username'] . "'");
                        // $sql3 = mysql_query("select * from pengajuan where id_user ")
                    ?>
                    <tr>
                      <td>1</td>
                      <td>Lengkapi Data Diri</td>
                      <td><span class="badge bg-red">55%</span></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Upload Dokumen</td>
                      <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Ajukan SKU</td>
                      <td><span class="badge bg-light-blue">30%</span></td>
                    </tr>
                    
                  </table>
                </div> -->
                </div>
              </div>
            </div>
          </div> 
          
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<?php include "../bagan/js.html" ; ?>
</body>
</html>
