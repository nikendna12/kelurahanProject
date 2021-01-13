<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <?php include "../controller/koneksi.php";

          if(($_SESSION['level']) == 2){
      ?>
      
      <li><a href="datadiri.php"><i class="fa fa-files-o"></i> <span> Profil Diri</span></a></li>
      <li><a href="unggah.php"><i class="fa fa-files-o"></i> <span> Unggah Dokumen</span></a></li>
      <li><a href="pengajuan.php"><i class="fa fa-files-o"></i> <span> Mengajukan</span></a></li>
      <!-- <li><a href="cetakSKU.php"><i class="fa fa-files-o"></i> <span> Cetak SKU</span></a></li> -->
      <?php 
          } 
          else if(($_SESSION['level']) == 1) {
      ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Kelola Website</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="kelola_surat.php"><i class="fa fa-circle-o"></i> Kelola Isi Surat</a></li>
        </ul>
        <li><a href="datapengaju.php"><i class="fa fa-files-o"></i> <span> Data Pengaju</span></a></li>
        <li><a href="datadokumen.php"><i class="fa fa-files-o"></i> <span> Data Dokumen</span></a></li>
        <li><a href="datapengaju.php"><i class="fa fa-files-o"></i> <span> Data Pengajuan SKU</span></a></li>
      </li>
      <?php } ?>
      <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      
      

      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>