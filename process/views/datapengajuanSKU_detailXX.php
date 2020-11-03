<!DOCTYPE html>
<html>
<head>
  <?php 
    include "../controller/koneksi.php"; 
    include "../bagan/head.html" ;
    session_start(); 

    $username = $_GET['uname'];
    $idpengaju = $_GET['tid'];
    //print_r($username);

    $sql = mysql_query("SELECT * FROM pengajuan INNER JOIN user ON pengajuan.username=user.username
                        WHERE id_pengajuan = '$idpengaju' ")or die(mysql_error());
    $data = mysql_fetch_array($sql);
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
        <section class="col-lg-12 connectedSortable">
        <center>
          <div class="panel panel-navy ">
            <div class="color-palette-set">
              <div class="bg-maroon-active color-palette">
                <div class="panel-heading">
                  <h3 class="panel-title">Data Detail Pengajuan</h3>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="box"> 
                <div class="box-body">
                <form class="form-horizontal" method="POST"><br>
                    <div class="form-group">
                      <label class="col-md-4">Username</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="noregis" value="<?php echo $data['username']; ?>" required="required" readonly />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Nama Lengkap</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nisn" value="<?php echo $data['nama_lengkap']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">NIK KTP</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nisn" value="<?php echo $data['nik_ktp']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">No. Kartu Keluarga</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nisn" value="<?php echo $data['no_kk']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">No. Handphone</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nisn" value="<?php echo $data['no_hp']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Alamat Rumah</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['alamat']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Masa Berlaku</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['masa_berlaku']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Alasan Mengajukan</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['alasan']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Nama Siswa</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nik_ktp']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-actions">
                      <div class="col-lg-9">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>&nbsp;
                        <button type="submit" name="ubah" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                 </form>
                </div>
                  <!-- /.box-body -->
              </div>
           </div>
          </div>
        </center>
        </section>
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
