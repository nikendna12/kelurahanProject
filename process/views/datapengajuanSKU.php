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
                  <h3 class="panel-title">Data Pengajuan</h3>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="box"> 
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" style="background-color:#F6F6F6;">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Lengkap</th>
                      <th>Nama Usaha</th>                      
                      <th>Alamat Usaha</th>                      
                      <th>Tanggal Mengajukan</th>                      
                      <th>Tanggal Berlaku</th>
                      <th>Alasan Mengajukan SKU</th>
                      <th width="100">Aksi</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <?php
                        $sql = mysql_query("SELECT
                        A.id_pengajuan, A.username, B.nama_lengkap, A.nama_usaha, A.alamat_usaha, A.tgl_apply, A.masa_berlaku, A.alasan,
                        A.status_konfirmasi, B.status_verifikasi, C.verifikasi
                        FROM pengajuan A
                        JOIN user B
                        ON A.username = B.username
                        JOIN dokumen C
                        ON B.id_user =  C.id_user 
                        WHERE B.status_verifikasi = 2 and C.verifikasi = 1
                        ORDER BY B.status_verifikasi ");
                        $no = 1;
                        while($r = mysql_fetch_array($sql)){
                    ?>
                    <tr>
                      <td><?php echo $no; echo $r['id_pengajuan'];?></td>
                      <td style="display:none;"><?php echo $r['id_pengajuan']; ?></td>
                      <td><?php echo $r['nama_lengkap']; ?></td>
                      <td><?php echo $r['nama_usaha']; ?></td>
                      <td><?php echo $r['alamat_usaha']; ?></td>
                      <td><?php echo $r['tgl_apply']; ?></td>
                      <td><?php echo $r['masa_berlaku']; ?></td>
                      <td><?php echo $r['alasan']; ?></td>
                      <td >
                          <div class="modal fade" id="modal-yes-<?php echo $r['id_pengajuan'] ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <b>Yakin ingin konfirmasi pengajuan SKU ? <?php echo $r['id_pengajuan']; ?></b>
                                </div>
                                <div class="modal-footer">
                                  <input type="submit" class="btn btn-primary" name="submit" value="Ya, Konfirmasi" onclick="window.location='../controller/pengajuanaccept.php?tid=<?php echo $r['id_pengajuan'];?>' ">
                                  <input type="submit" class="btn btn-default pull-left" value="Close" data-dismiss="modal">
                                  
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>                                                            
                          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-yes-<?php echo $r['id_pengajuan']; ?>">Konfirmasi</button>
                          
                          
                     
                      </td>
                      <td><?php echo $r['status_konfirmasi'] == 0 ? 'Belum Dikonfirmasi' : 'Sudah Dikonfirmasi' ?></td>
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
