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
	<div class="col-xs konten-buku">
			<div class="page-title">
				<h1>Buku Alamat</h1>
			</div>
			<div class="page-content konten" style="margin-left: 0; ">
				<table class="table-default table-panel table-addressbook">
					<thead>
						<tr class="bts">
							<th scope="colgroup" colspan="2"><h3>Alamat</h3></th>
							<th scope="col"><h3>Permintaan Khusus</h3></th>
						</tr>
					</thead>
					<?php foreach ($dataAlamat as $x) {
						# code...
					?>
					<tbody>
						<tr class="bts">
							<td class="address-number">1</td>
							<td class="address-details">
								<div><?php echo $x->kota." ".$x->kelurahan." ".$x->nama_jalan." ".$x->nama_tempat." ".$x->rincianAlamat; ?></div>
							</td>	
							<td class="special-instructions">
								<div><?php echo $x->petunjukAlamat; ?></div>
							</td>
							<td class="controls">
								<a class="text-gray-light" href="<?php echo base_url('Alamat/editpage/').$x->id_detail; ?>" title="Ganti Alamat"><i class="fa mcd mcd-edit icon"></i>Edit</a>
								<a class="text-gray-light" href="<?php echo base_url('Alamat/hapus/').$x->id_detail; ?>" title="Ganti Alamat"><i class="fa mcd mcd-edit icon"></i>Hapus</a>
							</td>
						</tr>
					</tbody>
					<?php } ?>
					<tfoot>
						<tr class="bts"><td colspan="4" class="actions accept">
							<a class="btn btn-red btn-lg" href=" <?php echo base_url('Alamat'); ?>">Tambah Alamat Baru</a>						<a class="btn btn-red btn-lg" href="<?php echo base_url('Menu/menu/istimewa'); ?>">Buat Pesanan</a>
						</td>
					</tr></tfoot>
				</table>
			</div>
		</div>
	</div>
</div>