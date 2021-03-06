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
        <section class="col-lg-12 connectedSortable">
        <center>
          <div class="panel panel-navy ">
            <div class="color-palette-set">
              <div class="bg-maroon-active color-palette">
                <div class="panel-heading">
                  <h3 class="panel-title">Data Pengaju</h3>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="box"> 
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Nama Lengkap</th>                      
                      <th>NIK KTP</th>                      
                      <th>Alamat Rumah</th>
                      <th align="center">Aksi</th>
                    </tr>
                    </thead>
                    <?php
                        $sql = mysql_query("SELECT * FROM user WHERE level = 2 AND status_verifikasi != 0 ");
                        $no = 1;
                        while($r = mysql_fetch_array($sql)){
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td style="display:none;"><?php echo $r['id_user']; ?></td>
                      <td><?php echo $r['username']; ?></td>
                      <td><?php echo $r['nama_lengkap']; ?></td>
                      <td><?php echo $r['nik_ktp']; ?></td>
                      <td><?php echo $r['alamat']; ?></td>
                      <td align="center">
                        <div class="btn-group">
                          <input type="button" class="btn btn-success" name="submit" value="Detail" onclick="window.location='datapengaju_detail.php?tid=<?php echo $r['id_user'];?>&uname=<?php echo $r['username'];?>' ">
                          <?php if($r['status_verifikasi'] < 2) { ?>
                            <input type="button" class="btn btn-danger" name="submit" value="Belum Terkonfirmasi" disabled>
                          <?php } else { ?>
                            <input type="button" class="btn btn-success" name="submit" value="Sudah Terkonfirmasi" disabled>
                          <?php } ?>
                        </div>
                      </td>
                    </tr>               
                    <?php $no++; } ?>  
                  </table>
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
