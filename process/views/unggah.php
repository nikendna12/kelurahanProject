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
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Unggah KTP Diri</h3>
          </div>
          <div class="panel-body">
              <?php
                    $sql1 = mysql_query("SELECT * FROM dokumen, user
                                        WHERE dokumen.id_user = user.id_user
                                        AND dokumen.id_user = '" . $_SESSION['id_user'] . "'");

                    $r1=mysql_fetch_assoc($sql1);

                  if ($r1['ktp']!=''){   
                    echo "<p align=center><img class='img-responsive' src='../dist/img/abc/$r1[ktp]' oncontextmenu='return false;'></p>";
                  } else {
                    echo "<p align=center><img class='img-responsive' src='../dist/img/image_not_available.jpg' oncontextmenu='return false;'></p>";
                  }

                  if ($r1['ktp'] != ''){
                ?>
                <div class="text-center"><button type="button" class="btn btn-success" name="submit" onclick="window.location='ubah_ktp.php'">Ubah KTP</button></div>
                <?php } else { ?>
                <div class="text-center"><button type="button" class="btn btn-primary" onclick="window.location='ubah_ktp.php'">Unggah KTP</button></div>
                <?php } ?>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Unggah Kartu Keluarga</h3>
          </div>
          <div class="panel-body">
            <?php
                $sql1 = mysql_query("SELECT * FROM dokumen, user
                                    WHERE dokumen.id_user = user.id_user
                                    AND dokumen.id_user = '" . $_SESSION['id_user'] . "'");

                $r1=mysql_fetch_assoc($sql1);

              if ($r1['kk']!=''){   
                echo "<p align=center><img class='img-responsive' src='../dist/img/abc/$r1[kk]' oncontextmenu='return false;'></p>";
              } else {
                echo "<p align=center><img class='img-responsive' src='../dist/img/image_not_available.jpg' oncontextmenu='return false;'></p>";
              }

              if ($r1['kk'] != ''){
            ?>
                <div class="text-center"><button type="button" class="btn btn-success" name="submit" onclick="window.location='ubah_kk.php'">Ubah Kartu Keluarga</button></div>
              <?php } else { ?>
                <div class="text-center"><button type="button" class="btn btn-primary" onclick="window.location='ubah_kk.php'">Unggah Kartu Keluarga</button></div>
              <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Unggah Foto Lokasi Usaha</h3>
          </div>
          <div class="panel-body">
            <?php
                $sql1 = mysql_query("SELECT * FROM dokumen, user
                                    WHERE dokumen.id_user = user.id_user
                                    AND dokumen.id_user = '" . $_SESSION['id_user'] . "'");

                $r1=mysql_fetch_assoc($sql1);

              if ($r1['lokusaha']!=''){   
                echo "<p align=center><img class='img-responsive' src='../dist/img/abc/$r1[lokusaha]' oncontextmenu='return false;'></p>";
              } else {
                echo "<p align=center><img class='img-responsive' src='../dist/img/image_not_available.jpg' oncontextmenu='return false;'></p>";
              }

              if ($r1['lokusaha'] != ''){
            ?>
                <div class="text-center"><button type="button" class="btn btn-success" name="submit" onclick="window.location='ubah_lokusaha.php'">Ubah Foto Lokasi Usaha</button></div>
              <?php } else { ?>
                <div class="text-center"><button type="button" class="btn btn-primary" onclick="window.location='ubah_lokusaha.php'">Unggah Foto Lokasi Usaha</button></div>
              <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Unggah Surat Pernyataan </h3>
          </div>
          <div class="panel-body">
            <?php
                $sql1 = mysql_query("SELECT * FROM dokumen, user
                                    WHERE dokumen.id_user = user.id_user
                                    AND dokumen.id_user = '" . $_SESSION['id_user'] . "'");

                $r1=mysql_fetch_assoc($sql1);

              if ($r1['supernyataan']!=''){   
                echo "<p align=center><img class='img-responsive' src='../dist/img/abc/$r1[supernyataan]' oncontextmenu='return false;'></p>";
              } else {
                echo "<p align=center><img class='img-responsive' src='../dist/img/image_not_available.jpg' oncontextmenu='return false;'></p>";
              }

              if ($r1['supernyataan'] != ''){
            ?>
                <div class="text-center"><button type="button" class="btn btn-success" name="submit" onclick="window.location='ubah_supernyataan.php'">Ubah Surat Pernyataan</button></div>
              <?php } else { ?>
                <div class="text-center"><button type="button" class="btn btn-primary" onclick="window.location='ubah_supernyataan.php'">Unggah Surat Pernyataan</button></div>
              <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Unggah Surat Pengantar</h3>
          </div>
          <div class="panel-body">
            <?php
                $sql1 = mysql_query("SELECT * FROM dokumen, user
                                    WHERE dokumen.id_user = user.id_user
                                    AND dokumen.id_user = '" . $_SESSION['id_user'] . "'");

                $r1=mysql_fetch_assoc($sql1);

                if ($r1['supengantar']!=''){   
                  echo "<p align=center><img class='img-responsive' src='../dist/img/abc/$r1[supengantar]' oncontextmenu='return false;'></p>";
                } else {
                  echo "<p align=center><img class='img-responsive' src='../dist/img/image_not_available.jpg' oncontextmenu='return false;'></p>";
                }

                if ($r1['supengantar'] != ''){
              ?>
                <div class="text-center"><button type="button" class="btn btn-success" name="submit" onclick="window.location='ubah_supengantar.php'">Ubah Surat Pengantar</button></div>
              <?php } else { ?>
                <div class="text-center"><button type="button" class="btn btn-primary" onclick="window.location='ubah_supengantar.php'">Unggah Surat Pengantar</button></div>
              <?php } ?>
          </div>
        </div>
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
