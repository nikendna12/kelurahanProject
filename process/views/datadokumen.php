<!DOCTYPE html>
<html>
<head>
  <?php 
    include "../controller/koneksi.php"; 
    include "../bagan/head.html" ;
    session_start(); 
  ?>
  <!-- <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style> -->
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
                  <h3 class="panel-title">Data Dokumen Pengaju</h3>
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
                      <!-- <th>Tanggal Upload</th>                       -->
                      <th>KTP</th>
                      <th>Kartu Keluarga</th>
                      <th>Lokasi Usaha</th>
                      <th>Surat Pengantar</th>
                      <th>Surat Pernyataan</th>
                      <th>Aksi</th>
                      <th>Catatan</th>
                    </tr>
                    </thead>
                    <?php
                        $sql = mysql_query("SELECT * FROM user LEFT JOIN dokumen 
                        ON user.id_user=dokumen.id_user WHERE user.status_verifikasi != 0 ");
                        $no = 1;
                        while($r = mysql_fetch_array($sql)){
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td style="display:none;"><?php echo $r['id_user']; ?></td>
                      <td><?php echo $r['username']; ?></td>
                      <td><?php echo $r['nama_lengkap']; ?></td>
                      <!-- <td><?php echo $r['tgl_upload']; ?></td> -->
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-check"></i></button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-close"></i></button>
                      <td><input type="text"/></td>
                    </tr>               
                    <?php $no++; } ?>  
                  </table>
                </div>
                <div class="modal fade" id="modal-default">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Default Modal</h4>
                      </div>
                      <div class="modal-body">
                        <p>One fine body&hellip;</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
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
