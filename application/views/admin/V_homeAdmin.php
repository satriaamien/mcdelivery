	<!DOCTYPE html>
	<html>
	<head>
		<title>Admin</title>
		<title>Menu Admin</title>
		<title>McDelivery</title>
		<meta charset="utf-8" />
		<!-- batas dataTables -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
		<!-- batas -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

		<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

	</head>
	<body>
		<div class="container">
			<!-- 	bts -->
			<!-- bts -->
			<table id="table"  class="table table-striped table-bordered" >
				<thead>
					<tr>
						<th scope="col">Nama</th>
						<th scope="col">Kategori</th>
						<th scope="col">Harga</th>
						<th scope="col">Gambar</th>
						<th scope="col">Edit</th>
						<th scope="col">Hapu</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($menu as $x) {
					# code...
						?>
						<tr>
							<td><?php echo $x->nama; ?></td>
							<td><?php echo $x->kategori; ?></td>
							<td><?php echo $x->harga; ?></td>
							<td><img src="<?php echo base_url('assets/foto/').$x->gambar ?>" class="img-block" height=	 "110px"></td>
							<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $x->idMenu ?>"><i class="fas fa-user-edit"></i></button></td>
							<td><a type="button" class="btn btn-danger"  href="<?php echo base_url('Admin/deleteMenu/').$x->idMenu; ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
			<a href="<?php echo base_url('Admin/tambahPage'); ?>" type="button" class="btn btn-primary">Tambah</a>
			<a type="button" class="btn btn-success" href=" <?php echo base_url('Login/signout'); ?>">Selesai</a>  
		</div>

		<?php $no=1; foreach ($menu as $d ) {?>
			<div class="modal fade" id="edit<?php echo $d->idMenu ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<center><h2>EDIT MENU </h2></center>
						</div>
						<div class="modal-body">
							<!-- isi form ini -->
							<form method="post" action="<?php echo base_url('Admin/update'); ?>" enctype="multipart/form-data">
								<input type="hidden" class="form-control" id="formGroupExampleInput" name="idMenu" value="<?php echo $d->idMenu ?>"  required>
								<div class="form-group">
									<label for="formGroupExampleInput">Nama</label>
									<input type="text" class="form-control" id="formGroupExampleInput" name="nama"  value="<?php echo $d->nama ?>" required>
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Kategori</label>
									<input type="text" class="form-control" id="formGroupExampleInput2" name="kategori" value="<?php echo $d->kategori ?>" required>
								</div>
								<div>
									<label for="formGroupExampleInput2">Harga</label>
									<input type="text" class="form-control" id="formGroupExampleInput2" name="harga" value="<?php echo $d->harga ?>" required>
								</div>
								<div>
									<label for="formGroupExampleInput2">Foto</label>
									<input type="file" class="form-control" id="formGroupExampleInput2" name="foto" required>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
								<input  type="submit" class="btn btn-primary" id="hapus" value="Simpan" placeholder="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
		<?php } ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#table').DataTable();
			} );
		</script>
	</body>
	</html>