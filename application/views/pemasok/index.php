<!DOCTYPE html>
<html>
<head>
	<title>Data Pemasok</title>
</head>
<body>
<div class="row">

                <div class="col-lg-12">  
					    <h3><b><?php echo $judulapp;?></b></h3>
					<br>
					<a href="<?php echo site_url('pemasok/tambahdata');?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"><b>Tambah</i></a></b>
					<br><br>	
					<table  class="table table-striped">
						<tr>
							<th>No</th>
							<th>Kode Pemasok</th>
							<th>Nama Pemasok</th>
							<th colspan="2">Aksi</th>
						</tr>
						<?php $no=1;foreach ($list as $k ){?>
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo $k->id_pemasok;?></td>
								<td><?php echo $k->pemasok;?></td>
								<td><a href="pemasok/editdata/<?php echo $k->id_pemasok;?>"><button class="btn btn-info btn-sm">Edit</button></a>
								<a href="pemasok/hapusdata/<?php ;echo $k->id_pemasok;?>"><button class="btn btn-danger btn-sm">Hapus</button></td>
								</tr>
							<?php $no++;}?>                
                </div>
            </div>
	
</table>
</body>
</html>

