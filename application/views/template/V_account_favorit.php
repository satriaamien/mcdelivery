<div class="row">
	<div class="pages-sidebar">
		<div class="sidebar-menu">
			<h2 class="menu-category">Akun Saya</h2>
			<ul class="menu">
				<li class="menu-item"><a class="menu-item-target" href="#">Lacak Pesanan</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/pesananLalu') ?>">Pesanan Lalu</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiFavorit')?>">Favorit Saya</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiAlamat')?>">Buku Alamat</a></li>
				<li class="menu-item selected"><a class="menu-item-target" href="<?php echo base_url('Account/index') ?>">Pengaturan Akun</a></li>
				<li class="menu-item"><a class="menu-item-target" href="<?php echo base_url('Account/gantiPass') ?>">Ganti Password</a></li>
			</ul>
		</div>	
	</div>
	<div class="col-xs" style="width: 85%;">
		<div class="page-title">
			<h1>Favorit Saya</h1>
		</div>
		<div class="row row-narrow"> 
			<div class="col-xs">
				<div class="page-content">
					<div class="panel-lg panel panel-default panel" style="margin: 0;margin-left: -45px;width: 145%;">
						<div class="panel-body">
							<h3>Saat ini tidak ada Pesanan Favorit yang tersimpan.</h3>
							<div class="empty-template">Untuk itu, buat pesanan dengan menu di atas.</div>
						</div>
					</div>
					<div class="panel-group type-flama order-history accordion" id="my-favourite">
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
</div>