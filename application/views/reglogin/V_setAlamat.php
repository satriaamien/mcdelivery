      <div class="page-content set">
        <form action="" method="post">      
                    <div class="fieldset-heading">
                        <h2 class="fieldset-title">Alamat Pengantaran</h2>
                        <p class="instructions">* Harus diisi</p>
                    </div>              
                    <div class="row">
        				<div class="col-lg-6">
        						<?php foreach ($dataAlamat as $x){
        							# code...var_d
        						 ?>
        						<label for="kota" >Kota :</label><br>
    					      	<input type="text" class="form-control" placeholder=" <?php echo $x->kota ?>" value=" <?php echo $x->kota ?>" name="kota2" readonly>			
        				</div>
        				<div class="col-lg-6">
        						<label for="kecamata" >Kecamatan :</label><br>
						      	<input type="text" name="kelurahan2" class="form-control" placeholder=" <?php echo $x->kelurahan ?>" value=" <?php echo $x->kelurahan  ?>" readonly>
        				</div>
		            </div>
            
	                <div class="row">   
      						<div class="col-lg-6">
      							<label for="jalan" >Nama Jalan :</label><br>
						      	<input type="text" class="form-control" placeholder=" <?php echo $x->nama_jalan  ?>" value=" <?php echo $x->nama_jalan ?>"readonly>
      						</div>
      						<div class="col-lg-6">
  								<label for="tempat" >Nama Tempat :</label><br>
						      	<input type="text" class="form-control" placeholder=" <?php echo $x->nama_tempat  ?>" value=" <?php echo $x->nama_tempat ?>"readonly>
      						</div>
        						<?php } ?>                   
	                </div>

	                <div class="row">
	                		<div class="col-lg-12 rincian">
	                			<label for="rincian" >Rincian Alamat :</label><br>
	                			<textarea name="rincian" class="form-control"></textarea>
	                		</div>
	                </div>
	                <div class="row">
	                		<div class="col-lg-12 petunjuk">
	                			<label for="rincian" >Petunjuk Alamat :</label><br>
	                			<textarea name="petunjuk" class="form-control"></textarea>
	                		</div>
	                </div>

                    <button type="submit" class="btn btn-red btn-lg btn-submit" data-target="#tab">Konfirmasi Alamat</button>
         </form>

	</div>
</div>