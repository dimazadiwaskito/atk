<!DOCTYPE html>
<html>
<head>
  <title>Sistem Input Alat Tulis Kantor (SIATK)</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/templatemo_main.css');?>">
  <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
  <script src="<?php echo base_url('assets/js/templatemo_script.js');?>"></script>
  <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
                    
                    $(function(){
                        $("#tanggal1").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal2").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>
</head>
<body>
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <div class="logo">
           <h4>Sistem Input Alat Tulis Kantor (SIATK)</h4>         
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
        <?php echo $_sidebar;?>
         
      </div><!--/.navbar-collapse -->
     <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <div class="row">
            <div class="col-lg-12">
            <?php echo $_content;?>
            </div>
      </div>

        </div>
          </div>

                  <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Konfirmasi</h4>
                  </div>
                  <div class="modal-body">
                        <input type="hidden" name="idhapus" id="idhapus">
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
                       
                    
    </div>


            <!--<footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2016 CUB DIGITAL</p>
        </div>
      </footer>-->

      <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
        <script src="<?php echo base_url('assets/js/application.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.js');?>"></script>
        <script src="<?php echo base_url('assets/js/sb-admin.js');?>"></script>
        <script src="<?php echo base_url('assets/js/demo/dashboard-demo.js');?>"></script>    


</body>
</html>



