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
              <!-- /.box-header -->
              <!-- form start -->
              <?php
                  $tampil="select * from user where username='".$_GET['username']."'";
                  $query=mysql_query($tampil) or die ("gagal".mysql_error());
                  $row=mysql_fetch_assoc($query);
              ?>
              <form class="form-horizontal" action="../controller/simpandatadiri.php" method="POST">
                <div class="box-body">
                  <div class="form-group" hidden>
                    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Username Akun" name="username" value="<?php echo $row['username'];?>" required>
                    </div>
                  </div>
                  <div class="form-group" hidden>
                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Ubah Password" name="password" value="<?php echo $row['password'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">NIK</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NIK KTP" name="nik" value="<?php echo $row['nik_ktp'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir" name="tgllahir" value="<?php echo $row['tgl_lahir'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Nama Lengkap</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Lengkap" name="nama" value="<?php echo $row['nama_lengkap'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Alamat</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Lengkap" name="alamat" value="<?php echo $row['alamat'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">No. Kartu Keluarga</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nomor Kartu Keluarga" name="nokk" value="<?php echo $row['no_kk'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">No. HP</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nomor HP" name="nohp" value="<?php echo $row['no_hp'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputPassword3" placeholder="Alamat email" name="email" value="<?php echo $row['email'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Bangsa</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Bangsa" name="bangsa" value="<?php echo $row['bangsa'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Agama</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Lengkap" name="agama" value="<?php echo $row['agama'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Tempat Lahir</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Jenis Kelamin</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Jenis Kelamin" name="jkel" value="<?php echo $row['jkel'];?>" required>
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
