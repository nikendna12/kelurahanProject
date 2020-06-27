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
          <?php 
            $sql1 = mysql_query("SELECT * FROM dokumen, user
                                WHERE dokumen.id_user = user.id_user
                                AND dokumen.jenis_dok = 'supengantar'
                                AND dokumen.id_user = '" . $_SESSION['id_user'] . "'");

            $r=mysql_fetch_assoc($sql1);
          ?>

          <form role="form" name="form1" action="../controller/unggah_dok.php?jenis=<?php echo "supengantar"; ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Ubah Dokumen Surat Pengantar</div>
                  <div class="panel-body">
                    <?php
                      if ($r['pic_dok']!=''){   
                        echo "<p align = center><img class='img-responsive' id='target' src='../dist/img/abc/$r[pic_dok]' oncontextmenu='return false;'></p>";
                      } else {
                        echo "<p align = center><img class='img-responsive' id='target' src='../dist/img/image_not_available.jpg' oncontextmenu='return false;'></p>";
                      }
                    ?>

                    <div><br></div>
                    <div class="form-group">
                      <label>Pilih dokumen</label>
                      <input type="file" id="src" name="fupload_ktp" />
                      <p class="help-block">File dokumen harus bertipe *.jpeg, *.jpg, atau *.png</p>
                    </div>
                    <div class="box-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
                      <button type="submit" class="btn btn-primary pull-right" name="submit">Save changes</button>
                    </div>

                  </div>
              </div>
            </div>
          </form>
          

          
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
