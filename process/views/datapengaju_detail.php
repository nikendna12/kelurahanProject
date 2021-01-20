<!DOCTYPE html>
<html>
<head>
  <?php 
    include "../controller/koneksi.php"; 
    include "../bagan/head.html" ;
    session_start(); 

    $username = $_GET['uname'];
    $iduser = $_GET['tid'];
    //print_r($username);

    $sql = mysql_query("SELECT * FROM user WHERE id_user = '$iduser' ")or die(mysql_error());
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
                  <h3 class="panel-title">Data Detail Pengaju</h3>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="box"> 
                <div class="box-body">
                <form class="form-horizontal" action="../controller/simpandatapengaju.php" method="POST"><br>
                    <div class="form-group">
                      <label class="col-md-4">Username</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required="required" readonly />
                        <input type="text" class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>" required="required" style="display:none;" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Nama Lengkap</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_lengkap']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">NIK KTP</label>
                      <div class="col-md-5">
                        <input type="number" class="form-control" name="nik" value="<?php echo $data['nik_ktp']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">No. Kartu Keluarga</label>
                      <div class="col-md-5">
                        <input type="number" class="form-control" name="nokk" value="<?php echo $data['no_kk']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">No. Handphone</label>
                      <div class="col-md-5">
                        <input type="number" class="form-control" name="nohp" value="<?php echo $data['no_hp']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Jenis Kelamin</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="jkel" value="<?php echo $data['jkel']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Alamat Rumah</label>
                      <div class="col-md-5">
                        <input type="textarea" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">E-mail</label>
                      <div class="col-md-5">
                        <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Bangsa</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="bangsa" value="<?php echo $data['bangsa']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4">Agama</label>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="agama" value="<?php echo $data['agama']; ?>" required="required"  />
                      </div>
                    </div>
                    <div class="form-actions">
                      <div class="col-lg-9">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Batal</button>&nbsp;
                        <button type="submit" name="ubah" class="btn btn-primary">Konfirmasi</button>
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
