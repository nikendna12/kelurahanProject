<!DOCTYPE html>
<html>
<head>
  <?php 
    include "../controller/koneksi.php"; 
    include "../bagan/head.html" ;
    session_start(); 
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include "../bagan/header.html" ; ?>
  <?php include "../bagan/menukiri.php" ; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome <?php echo $_SESSION['nama_lengkap'];?> 
        <small> <?php echo $_SESSION['username'];?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Data Diri</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <!-- <h4 align="center">Status</h4> -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Verifikasi Data Diri</th>
                  <th>Verifikasi Dokumen</th>
                  <th>Diverifikasi oleh Admin</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
              </thead>
              <?php //'
                  $str="select * from user where username ='" . $_SESSION['username'] . "'";
                  $q=mysql_query($str,$conn);
                  $dt=mysql_fetch_array($q);
              ?>
              <tbody>
                <tr>
                  <td><?php echo $dt['nama_lengkap']; ?></td>
                  <td><i class="fa fa-fw fa-check-square-o"></i><?php if($dt['status_verifikasi']== 0) { echo "BELUM"; } else { echo "SUDAH"; } ?></td>
                  <td><i class="fa fa-fw fa-check-square-o"></i><?php if($dt['status_verifikasi']== 0) { echo "BELUM"; } else { echo "SUDAH"; } ?></td>
                  <td><i class="fa fa-hourglass-start"></i>&nbsp;&nbsp;<?php if($dt['status_verifikasi']== 1) { echo "BELUM"; } else { echo "SUDAH"; } ?></td>
                  <td>
                      <?php
                        if($dt['status_verifikasi']== 1){
                      ?>
                          <div class="btn-group">
                            <input type="button" class="btn btn-success" name="submit" value="Lengkapi Data Diri" onclick="window.location='datadiri_detail.php?username=<?=$dt['username'];?>' ">
                          </div>
                      <?php } else { ?>
                          <div class="btn-group">
                            <input type="button" class="btn btn-block btn-primary" name="tambah" value="Cetak" onclick="window.location='cetak/f_surat.php'">
                            <!-- <a class="btn btn-default" name="btnCetak" href="cetak/f_biodata.php" target="_blank" hidden="hidden">Cetak</a> -->
                          </div>
                      <?php } ?>

                  </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <!-- /.box -->

      </div>
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
