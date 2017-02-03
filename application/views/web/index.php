<!DOCTYPE html>
<html>
<head>
  <title>SIATK</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/templatemo_main.css');?>">
  <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
  <script src="<?php echo base_url('assets/js/templatemo_script.js');?>"></script>
  <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>

  <script>
    tinymce.init({selector:'textarea'});
  </script>
</head>
<body>
<div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <div class="logo">
           <h4></h4>        
         </div>
     </div>   
    </div>
<br>
<div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-lock"></span> LOGIN SIATK
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="<?php echo site_url('web/proses');?>" method="post">
                                    <?php echo $this->session->flashdata('message');?>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">
                                            Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">
                                            Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"/>
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Sign in</button>
                                                 <button type="reset" class="btn btn-default btn-sm">
                                                Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

            <!--<footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2016 CUB DIGITAL</p>
        </div>
      </footer>-->


</body>
</html>


