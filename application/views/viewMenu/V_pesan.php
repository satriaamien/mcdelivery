<!DOCTYPE html>
<html>
<head>
	<title>McDelivery</title>
	<meta charset="utf-8" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link href="<?php echo base_url('assets/');?>css/project2.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/menu.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/home.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/form.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



</head>

<style type="text/css">
</style>

<body>
	<form action="<?php echo base_url('Menu/tambahMenuDetail'); ?>" method="post">
		<div id="product-configurator" class="configurator"><div>
			<div class="configurator-header">
				<div class="container">
					<div class="row">
						<img src="<?php echo $dataMenu["gambar"] ?>" class="img-block">
						<div class="description">
							<h1 class="item-name"><?php echo $dataMenu["nama"]; ?></h1>
							<div class="clearfix">
								<div class="product-badge1s show-on-expand">
									<span class="food-icons-sprite ir food-icons-new"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="configurator-body" role="main">
				<div class="configurator-scroller scroller">
					<div class="container">
						<div class="configurator-step step-choose-meals">
							<h3 class="step-title"><b>Langkah 1:</b> Pilih Menu Anda</h3>
							<div class="step-content">
								<div id="available-sets"><div>
									<table id="table-select-meal" class="table table-select-meal">
										<thead>
											<tr>
												<th class="controls-column">Jumlah</th>
												<th class="picture-column">&nbsp;</th>
												<th class="description-column">&nbsp;</th>
												<th class="cost-column">Harga</th>
											</tr>
										</thead>
										<tbody><tr>
											<td class="controls-column">
												<div class="input-group item-quantity item-quantity-picker">
													<input type="number" name="jumlah"  min="0" max="9" class="form-control" maxlength="1">
												</div>
											</td>
											<td class="picture-column">
												<img src="static/1555052540721/assets/62/products/111164.png" alt="" class="img-block">
											</td>
											<td class="description-column">
												<h4 class="item-title"><?php echo $dataMenu["nama"]; ?></h4>
												<p class="item-description"></p>
											</td>
											<td class="cost-column">Rp. <?php echo $dataMenu["harga"]; ?></td>
										</tr>
									</tbody>
								</table>
							</div></div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="configurator-footer">
			<div class="container">
				<div class="media">
					<div class="media-left">
						<a href="" class="h5 text-default text-ucase btn-back action-cancel"><i class="fa fa-caret-left text-primary"></i>  KEMBALI KE MENU</a>
					</div>
					<div class="media-body">
						<div id="cost-section" class="clearfix"><div>


						</div></div>
					</div>
					<div class="media-right text-center">
						<input type="hidden" name="id" value="<?php echo $dataMenu["id"]; ?>" />
						<input type="hidden" name="nama" value="<?php echo $dataMenu["nama"]; ?>" />
						<input type="hidden" name="harga" value="<?php echo $dataMenu["harga"]; ?>" />
						<input type="hidden" name="gambar" value="<?php echo $dataMenu["gambar"]; ?>" />
						<button type="submit" class="btn btn-primary btn-red">
							TAMBAH KE KERANJANG					
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	

</body>
</html>