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
			<h1>Pesanan Lalu</h1>
		</div>
		<div class="row row-narrow"> 
			<div class="col-xs">
				<div class="page-content">
					<table id="table"  class="table table-striped table-bordered" >
						<thead>
							<tr>
								<th scope="col">No Transaksi</th>
								<th scope="col">Alamat</th>
								<th scope="col">Total Bayar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dataT as $x) {
						# code...
								?>
								<tr>
									<td><?php echo $x->idTransaksi; ?></td>
									<td><?php echo $x->alamatKirim; ?></td>
									<td><?php echo $x->total; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>