<!DOCTYPE html>
<html>
<head>
	<title>Form Edit </title>
</head>
<body>
<div class="row">

             <div class="col-lg-12"> 
             <h3><b><?php echo $judulapp;?></h3></b>
             <br>
               <?php echo form_open('pemasok/editdata');?>
               		<div class="col-lg-4">
               			<div class="form-group">
					    <label for="inputlg">ID Pemasok</label>
					    <input class="form-control input-sm" name="id_pemasok" id="inputlg" type="text" value="<?php echo $list['id_pemasok'];?>">
					  </div>
               		<br>   								
					  	<div class="form-group">
					    <label for="inputlg">Pemasok</label>
					    <input class="form-control input-sm" name="pemasok" id="inputlg" type="text" value="<?php echo $list['pemasok']?>">
					  </div>
					  <button type="submit" name="submit">Edit Data</button>
					  <?php echo anchor ('pemasok','kembali');?>
					  <?php echo form_close();?>
					  </div>
					  </div>			
                </div>
    
	
</table>
</body>
</html>

