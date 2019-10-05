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
	<div class="col-xs">
		<div class="page-title">
			<h1>Ganti Password</h1>
			<p>Untuk mengganti password, masukkan password lama dan baru Anda di bawah ini:</p>
		</div>
		<div class="page-content">
			<div class="panel-lg panel panel-default" style=" margin-top: -10px;width: 229%;margin-left: -48px;">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12">
							<form action="<?php echo base_url('Account/gantiPassword'); ?>" method="post">
								<fieldset class="fieldset">									
									<div class="form-group">

										<label class="field-label" for="form_accountsetting_oldpassword"><span class="required-symbol">*</span>Password Lama:</label>
										<input type="password" class="form-control input-lg" name="oldPassword" autocomplete="off" data-rule-required="true" maxlength="20">
									</div>
									<div class="form-group">

										<label class="field-label" for="form_accountsetting_newpassword"><span class="required-symbol">*</span>Password Baru:</label>
										<input type="password" class="form-control input-lg" name="newPassword" maxlength="20" >
										<label for="form_accountsetting_newpassword" class="control-hint" style="color: #999;">Password harus terdiri dari 8 karakter dengan 1 digit angka.</label>

									</div>
									<div class="form-group">

										<label class="field-label" for="form_accountsetting_reenterpassword"><span class="required-symbol">*</span>Masukkan Ulang Password Baru:</label>
										<input type="password" class="form-control input-lg" name="confPassword">
									</div>			
								</fieldset>
								<fieldset class="fieldset form-actions">
									<div class="form-group">
										<button type="submit" class="btn btn-red btn-xl btn-submit" id="btn-submit">Simpan Password</button>
									</div>
								</fieldset>	
							</form>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>
</div>