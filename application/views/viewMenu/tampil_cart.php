<h2>Daftar Belanja</h2>
<form action="<?php echo base_url()?>Menu/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
	<?php
	if ($cart = $this->cart->contents())
	{
		?>


		<table class="table">
			<tr id= "main_heading">
				<td width="2%">No</td>
				<td width="10%">Gambar</td>
				<td width="33%">Item</td>
				<td width="17%">Harga</td>
				<td width="8%">Qty</td>
				<td width="20%">Jumlah</td>
				<td width="10%">Hapus</td>
			</tr>
			<?php
// Create form and send all values in "shopping/update_cart" function.
			$grand_total = 0;
			$i = 1;

			foreach ($cart as $item):
				$grand_total = $grand_total + $item['subtotal'];
				?>
				<input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
				<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
				<input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
				<input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
				<input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
				<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
				<tr>
					<td><?php echo $i++; ?></td>
					<td><img class="img-responsive" src="<?php echo base_url() . 'assets/foto/'.$item['gambar']; ?>"/></td>
					<td><?php echo $item['name']; ?></td>
					<td><?php echo number_format($item['price'], 0,",","."); ?></td>
					<td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
					a></td>
				<?php endforeach; ?>
			</tr>
			<tr>
				<td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
				<td colspan="4" align="right">
					<a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger' rel="noopener noreferrer">Kosongkan Cart</a>
					<button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
				</tr>

			</table>
			<?php
		}
		else
		{
			echo "<h3>Keranjang Belanja masih kosong</h3>";
		}
		?>
	</form>