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
          <li class=""><a href="<?php echo site_url('pemasok') ;?>"><i class="fa fa-users"></i> Data Pemasok</a></li>
          <li><a href="<?php echo site_url('barang') ;?>"><i class="fa fa-book"></i> Data ATK</a></li>
          <li><a href=""><i class="fa fa-user"></i> Data Karyawan</a></li>

             </ul>
          </li>
 
                     <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-random"></i> Master Transaksi<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
          <li><a href=""><i class="fa fa-upload"></i> Data ATK Masuk</a></li>
          <li><a href=""><i class="fa fa-download"></i> Data ATK Keluar</a></li>
             </ul>
          </li>

                    <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-folder"></i> Master Laporan<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
         
          <li><a href=""><i class="fa fa-file-o"></i> Laporan ATK Masuk</a></li>
          <li><a href=""><i class="fa fa-file-o"></i> Laporan ATK Keluar</a></li>
             </ul>
          </li>
         
          <li><a href="<?php echo site_url('dashboard/logout');?>"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->
    </div>