<!DOCTYPE html>
<html>
<head>
	<title>Form Pemasok </title>
</head>
<body>
<div class="row">

             <div class="col-lg-12"> 
             <h3><b><?php echo $judulapp;?></h3></b>
             <br>
               <?php echo form_open('pemasok/tambahdata')?>
               		<div class="col-lg-4">
               			<div class="form-group">
					    <label for="inputlg">ID Pemasok</label>
					    <input class="form-control input-sm" name="id_pemasok" id="inputlg" type="text" placeholder="Masukan ID Pemasok">
					  </div>
               		<br>   								
					  	<div class="form-group">
					    <label for="inputlg">Pemasok</label>
					    <input class="form-control input-sm" name="pemasok" id="inputlg" type="text" placeholder="Masukan Pemasok">
					  </div>
					  <?php echo form_submit('submit','Tambah');?>
					  <?php echo form_reset('reset','Hapus');?>
					  <?php echo form_close();?>
					  </div>
					  </div>			
                </div>
    
	
</table>
</body>
</html>

