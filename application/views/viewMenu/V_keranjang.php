
<?php if (!empty($this->session->userdata('akunLogin'))){
	$total = 0;
	?>


	<div class="col-xs-4 pull-end" style="margin-left: 14px;">
		<?php 
		$dataAkun = $this->session->userdata('akunLogin');
		if (!empty($this->cart->contents())){
			$cart = $this->cart->contents(); 
			
			$total = 0;
			?>
			<div id="order-widget" class="panel panel-basic panel-narrow order-summary">
				<div class="panel-heading">
					<h3 class="text-center">Pesanan Saya</h3>
				</div>
				<div class="panel-section-group">
					<section class="panel-section section-delivery-address">
						<table class="table-default table-delivery-address">
							<tbody>
								<tr>
									
									<th scope="row">Diantar Ke:
										<div>
											<a href="#" data-target="#alamatModal" data-toggle="modal" class="action-link action-edit action-edit-datetime">Ubah</a>
										</div>
									</th>
									<?php if (!empty($this->session->userdata('_adrs'))) {
												# code...
										$dataPilih = $this->session->userdata('_adrs');
										?>
										<td>
											<div><?php echo $dataPilih->kota." ".$dataPilih->kelurahan." ".$dataPilih->nama_jalan." ".$dataPilih->nama_tempat." ".$dataPilih->rincianAlamat; 

													$alamatKirim = $dataPilih->kota." ".$dataPilih->kelurahan." ".$dataPilih->nama_jalan." ".$dataPilih->nama_tempat." ".$dataPilih->rincianAlamat;
													
													$this->session->set_userdata('alamatKirim',$alamatKirim);
											?></div> 
										</td>
									<?php }else{
										?>

									<?php } ?>
								</tr>
							</tbody>
						</table>
					</section>


					<section class="panel-section section-cost-breakdown">
						<table class="table-default table-cost">
							<?php if (!empty($this->session->userdata('total'))){ ?>
								<h4>Total : <?php echo $this->session->userdata('total'); ?> </h4>
							<?php }else{
								?>	
								<h4>Total : 0 </h4>
							<?php } ?>
						</table>

						<fieldset class="form-actions text-center">
							<div class="form-group">
								<a class="btn btn-red btn-block btn-xl" href="<?php echo base_url('Menu/prosesMenu'); ?>">Selesai</a>
							</div>
						</fieldset>
					</section>

					<section class="panel-section section-order-items">
						<h3>Rincian Pesanan</h3>
						<?php foreach ($cart as $item) {
										// print_r($item);
							$no = $item['id'];
							// var_dump($item['gambar']);
							// exit();	

							?>
							<form action="<?php echo base_url('Menu/editpage/').$no; ?>" method="post">
								<?php echo $item['id']; ?>
								<div class="order-item list-item">
									<div>
										<div>
											<input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
											<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
											<input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
											<input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
											<input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
											<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />

											<div class="item-heading clearfix">
												<div class="quantity">Jumlah : <?php echo $item['qty']; ?></div>
												<div class="details">
													<h5 class="product-name"><?php echo $item['name']; ?></h5>
												</div>
												<div class="picture"><img src="<?php echo $item['gambar'] ?>"></div>
												<h6>Harga : <?php echo $item['price']; ?></h6>
											</div>
											<div class="item-body clearfix">
												<div class="controls">
													<button type="submit">Edit</button>
													<a href=" <?php echo base_url('Menu/hapusMenu/').$item['rowid']; ?>" class="action-delete action-delete-order" data-orderid="88">Hapus</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						<?php }
														// exit(); ?>

													</section>
												</div>
											</div>
										<?php }else{
											?>
											<!-- <h1>Kosongan</h1> -->
											<div id="order-widget" class="panel panel-basic panel-narrow order-summary">
												<div class="panel-heading">
													<h3 class="text-center">Pesanan Saya</h3>
												</div>
												<div class="panel-section-group">
													<section class="panel-section section-delivery-address">
														<table class="table-default table-delivery-address">
															<tbody>
																<tr>

																	<th scope="row">Diantar Ke:
																		<div>
																			<a href="#" data-target="#alamatModal" data-toggle="modal" class="action-link action-edit action-edit-datetime">Ubah</a>
																		</div>
																	</th>
																	<?php if (!empty($this->session->userdata('_adrs'))) {
												# code...
																		$dataPilih = $this->session->userdata('_adrs');
																		?>
																		<td>
																			<div><?php echo $dataPilih->kota." ".$dataPilih->kelurahan." ".$dataPilih->nama_jalan." ".$dataPilih->nama_tempat." ".$dataPilih->rincianAlamat; ?></div> 
																		</td>
																	<?php }else{
																		?>

																	<?php } ?>
																</tr>
															</tbody>
														</table>
													</section>


													<section class="panel-section section-cost-breakdown">
														<table class="table-default table-cost">
															<?php if (!empty($this->session->userdata('total'))){ ?>
																<h4>Total : <?php echo $this->session->userdata('total'); ?> </h4>
															<?php }else{
																?>	
																<h4>Total : 0 </h4>
															<?php } ?>
														</table>

														<fieldset class="form-actions text-center">
															<div class="form-group">
																<!-- <a  class="btn btn-red btn-block btn-xl" href="">Selesai</a> -->
																<button class="btn btn-red btn-block btn-xl" disabled="disable"> Selesai</button>
															</div>
														</fieldset>
													</section>
												<?php } ?>
											</div>
										</div>
									<?php } ?>


									<div class="modal fade" id="alamatModal" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" style="text-align: left">Pilih alamat pengantaran.</h4>
												</div>
												<div class="modal-body">
													<form action="<?php echo base_url('Menu/editPengiriman'); ?>" method="post">
														<select class="hide-default-error" name="address" >
															<option selected="selected" value="0">--Pilih</option>
															<?php foreach ($dataAlamat as $x) {

																?>
																<option value="<?php echo $x->id_detail ?>"><?php echo $x->kota." ".$x->kelurahan." ".$x->nama_jalan." ".$x->nama_tempat." ".$x->rincianAlamat; ?></option>
															<?php } ?>
														</select>
														<button type="submit" class="btn btn-red">Pilih</button>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>

										</div>
									</div>
</div>
</div>
</div>
</div>
