<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/templatemo_main.css');?>">
  <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('../assets/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('../assets/js/bootstrap.js');?>"></script>
  <script src="<?php echo base_url('../assets/js/templatemo_script.js');?>"></script>
  <script src="<?php echo base_url('../assets/js/tinymce/tinymce.min.js');?>"></script>
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
<?php echo $title; ?><br>
<div style="text-align: right;">
  Welcome : <b><?php echo $this->session->userdata('username');?></b> 
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



