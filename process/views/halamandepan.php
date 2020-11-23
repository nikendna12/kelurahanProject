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
                            <li>Klik menu Unggah Dokumen untuk ............. Mohon di scan dengan gambar jelas </li>
                            <li>Klik menu Mengajukan untuk ............. </li>
                            <li>Klik menu Lihat Status untuk ............. </li>

                        </ul>
                      </li>
                  </ul>
                  <hr>
                  <ul class="list-unstyled">
                      <li><b>Upload kelengkapan dokumen dibawah ini untuk keperluan verifikasi.</b>
                      <ul>
                          <li>Scan Kartu Tanda Pengenal.</li>
                          <li>Scan Kartu Keluarga.</li>
                          <li>Foto Lokasi Usaha Anda.</li>
                          <li>scan Surat Pengantar.</li>
                          <li>scan Surat Pernyataan.</li>
                      </ul>
                      </li><br>
                      <li><b>Dengan ketentuan sebagai berikut:</b>
                      <ul>
                          <li>File dokumen yang diunggah harus merupakan hasil scan, boleh foto asal jelas.</li>
                          <li>Ukuran file yang diunggah tidak melebihi 2MB</li>
                      </ul>
                      </li>   <hr>
                      <li><b>Keterangan : </b><br>
                      *) Pilih salah satu, mana yang dikeluarkan lebih dulu oleh pihak sekolah. Jika ijazah sudah diterbitkan oleh sekolah, sebaiknya gunakan ijazah untuk memenuhi kelengkapan dokumen. </li>
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
