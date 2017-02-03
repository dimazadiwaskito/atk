    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <div class="logo">
           <h4>My Library</h4>        
         </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <!--strart Navbar-->
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li></li>
            <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-table"></i> Master Data<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
          <li class=""><a href="<?php echo site_url('anggota/index') ;?>"><i class="fa fa-users"></i> Data Anggota</a></li>
          <li><a href="<?php echo site_url('web/buku') ;?>"><i class="fa fa-book"></i> Data Buku</a></li>
          <li><a href=""><i class="fa fa-user"></i> Data Petugas</a></li>

             </ul>
          </li>
 
                     <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-random"></i> Master Transaksi<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
          <li><a href=""><i class="fa fa-upload"></i> Data Peminjaman</a></li>
          <li><a href=""><i class="fa fa-download"></i> Data Pengembalian</a></li>
             </ul>
          </li>

                    <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-folder"></i> Master Laporan<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
         <li><a href=""><i class="fa fa-file-o"></i> Laporan Buku</a></li>
          <li><a href=""><i class="fa fa-file-o"></i> Laporan Petugas</a></li>
          <li><a href=""><i class="fa fa-file-o"></i> Laporan Peminjaman</a></li>
          <li><a href=""><i class="fa fa-file-o"></i> Laporan Pengembalian</a></li>
             </ul>
          </li>
         
          <li><a href=""><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->
    </div>