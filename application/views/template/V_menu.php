	<div class="row row-narrow" style="margin-left: 10px;">		
			<div class="sidebar">
				<div class="sidebar-menu" data-sticky="true">
					<div class="food-menu">
						<ul class="primary-menu">
							<li class="p
							rimary-menu-item selected"><a class="primary-menu-item-target" href=""><span>Regular</span><i class="fa fa-angle-right"></i></a>
							<ul class="secondary-menu">
								<li class="secondary-menu-item"><a class="secondary-menu-item-target" href="<?php echo base_url('Menu/menu/istimewa') ?>"><i class="fa fa-circle"></i> <span>Istimewa</span></a></li>
								<li class="secondary-menu-item "><a class="secondary-menu-item-target" href="<?php echo base_url('Menu/menu/sarapan') ?>"><i class="fa fa-circle"></i> <span>Menu dan Paket Sarapan</span></a></li>
								<li class="secondary-menu-item "><a class="secondary-menu-item-target" href="<?php echo base_url('Menu/menu/tambahan') ?>"><i class="fa fa-circle"></i> <span>Tambahan</span></a></li>
								<li class="secondary-menu-item "><a class="secondary-menu-item-target" href="<?php echo base_url('Menu/menu/happymeal') ?>"><i class="fa fa-circle"></i> <span>Happy Meal</span></a></li>
								<li class="secondary-menu-item "><a class="secondary-menu-item-target" href="<?php echo base_url('Menu/menu/pencucimulut') ?>"><i class="fa fa-circle"></i> <span>Pencuci Mulut</span></a></li>
								<li class="secondary-menu-item "><a class="secondary-menu-item-target" href="<?php echo base_url('Menu/menu/minuman') ?>"><i class="fa fa-circle"></i> <span>Minuman</span></a></li>	
							</ul>
						</li>		
						<li class="primary-menu-item"><a class="primary-menu-item-target" href=""><span>Breakfast</span><i class="fa fa-angle-right"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-8 pull-right">
			<?php foreach ($dataMenu as $x){	
					// var_dump($x->gambar);
				?>
				<div class="product-card product-card--standard">
					<div class="panel panel-default panel-product" style="width: 38%; border-radius: 15px;">
						<form action="<?php echo base_url('Menu/tambahMenu'); ?>" method="post">
							<div class="panel-body" >		
								<div class="gambars" style="margin-left: -22px;">
								<img src="<?php echo base_url('assets/foto/').$x->gambar ?>" class="img-block">
								</div>
								<h5 class="product-title" style="height: auto;"><?php echo $x->nama ?></h5>
								<div class="product-badges">
									<span class="food-icons-sprite food-icons-new ir"></span>
								</div>
							</div>

							<div class="panel-footer">
								<div class="row row-narrow price-narrow">

									<div class="product-cost">
										<span class="starting-price">Dari Rp. <?php echo $x->harga; ?></span>
									</div>

									<div class="product-controls">							
										<input type="hidden" name="id" value="<?php echo $x->idMenu; ?>" />
										<input type="hidden" name="nama" value="<?php echo $x->nama; ?>" />
										<input type="hidden" name="harga" value="<?php echo $x->harga; ?>" />
										<input type="hidden" name="gambar" value="<?php echo base_url('assets/foto/').$x->gambar ?>" />
									<?php if(!empty($this->session->userdata('akunLogin'))){

									 ?>
										<button class="btn btn-warning" type="Submit">Tambah</button>
									<?php }else{
									 ?>
										<a href="#exampleModal" data-target="#exampleModal" data-toggle="modal" class="btn btn-warning">Tambah</a>

									<?php } ?>
									</div>

								</div>
							</div>
						</form>
					</div>
				</div>
			<?php } ?>
		</div>
	

<script type="text/javascript">
	$(".menu").css("color", "#ffc423");
	$(".fa-hamburger").css("color", "#ffc423");
</script>
</body>
</html>
