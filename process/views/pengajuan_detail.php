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
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
              </div>
              <form class="form-horizontal" action="../controller/simpanpengajuan.php" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Nama Usaha</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Usaha" name="namausaha" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Alamat Usaha</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Lengkap" name="alamat" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Masa Berlaku</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Masa Berlaku" name="masaberlaku" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Alasan Mengajukan</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Alasan Mengajukan" name="alasan" required>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="button" class="btn btn-default" onclick="self.history.back()">Cancel</button>
                  <button type="submit" class="btn btn-info pull-right">Simpan</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            
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
