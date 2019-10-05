		<div class="tbody">
			<div id="demo" class="carousel slide" data-ride="carousel" height="500px" data-interval="5000">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
					<li data-target="#demo" data-slide-to="3"></li>
					<li data-target="#demo" data-slide-to="4"></li>
					<li data-target="#demo" data-slide-to="5"></li>
					<li data-target="#demo" data-slide-to="6"></li>
					<li data-target="#demo" data-slide-to="7"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="#" title="">
							<img src="<?php echo base_url('assets/logo/promo11.jpg'); ?>" alt="Los Angeles" width="100%" height="475">
						</a>
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('assets/logo/promo9.jpg') ?>" alt="Chicago" width="100%" height="475">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('assets/logo/promo7.jpg') ?>" alt="New York" width="100%" height="475">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('assets/logo/promo10.jpg') ?>" alt="New York" width="100%" height="475">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('assets/logo/promo12.jpg') ?>" alt="New York" width="100%" height="475">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('assets/logo/promo8.jpg') ?>" alt="New York" width="100%" height="475">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('assets/logo/promo6.jpg') ?>" alt="New York" width="100%" height="475">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url('assets/logo/promo5.jpg') ?>" alt="New York" width="100%" height="475">
					</div>

				</div>
				<div class="panels panel-home panel-home-login">

					<?php if(empty($this->session->userdata('akunLogin'))){
						?>

						<div class="panel-heading">
							<h2>Start Ordering</h2>
						</div>
						<div class="panel-body">
							<ul class="nav nav-tabs nav-tabs-login-fragment">
								<li class="active">
									<div>	
										<a id="change1" href="#home-tab-login" data-toggle="tab" aria-expanded="true">Sign In</a>
									</div>
								</li>
								<li class="active" >
									<div>
										<a id="change2" href="#home-tab-new" data-toggle="tab" aria-expanded="false">I’m New</a>
									</div>
								</li>
							</ul>
							<div class="tab-panel hilang" id="signin">
								<form action="<?php echo base_url('Login/index'); ?>" method="post" accept-charset="utf-8">
									<fieldset class="form-credentials">
										<div class="list-group textfield-list-group">
											<div class="list-group-item textfield-list-group-item">
												<label class="sr-only" for="">Email</label>
												<input type="text" name="username" id="form_login_masthead_username" class="required email list-group-form-control" placeholder="Email" aria-required="true">
											</div>
										</div>
										<div class="list-group-item textfield-list-group-item">
											<label class="sr-only" for="form_login_masthead_password">Password</label>
											<input type="password" name="password" id="form_login_masthead_password" class="required list-group-form-control" placeholder="Password" autocomplete="off" maxlength="20" value="" aria-required="true">
										</div>
									</fieldset>
									<fieldset class="form-actions submitnya">
										<button type="submit" class="btn btn-red btn-block " onclick="">Sign In</button>
										
										<p class="action-forgot-password "><a class="action-link" href="">Forgot Password?</a></p>
									</fieldset>
								</form>
							</div>
							<div class="hilang" id="imnew">
								<span nclick="document.getElementById('imnew').style.display='none'"></span>
								<div class="tab-pane active" id="home-tab-new">
									<div class="frament-new-user">
										<div class="guest-order-note">Creating an account will allow you to enjoy exclusive offers and promotions, retrieve saved orders and favorites, and faster checkout.</div>			
										<a class="btn btn-red btn-block" onclick="" href="<?php echo base_url('Registrasi/getAlamat'); ?>">
											<span>Register Now</span>
										</a>
									</div>
									<div class="frament-guest-order">
										<div class="guest-order-header">Continue without an account</div>
										<div class="guest-order-note">Express checkout with online payment as guest</div>
										<a class="btn btn-danger btn-block " onclick="" href="#">Guest Order</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }else{
					$data = $this->session->userdata('akunLogin');
					?>

					<div class="panel-heading">
						<h2 style="font-family: 'Oswald', sans-serif !important;">Halo <?php echo $data['nama']; ?></h2>
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url('Home/setAlamat'); ?>" method="post">

							<h3>Akan diantar ke </h3><br>
							<select name="alamat" class="form-control">
								<option selected>--Pilih Alamat--</option>
								<?php foreach ($dataAlamat as $x) {
								# code...
									?>
									<option value="<?php echo $x->id_detail ?>"><?php echo $x->kota." ".$x->kelurahan." ".$x->nama_jalan." ".$x->nama_tempat." ".$x->rincianAlamat; ?></option>
									<?php 
								}
								?>
							</select>

							<br><h6 style="color : grey;font-size: 15px; text-align: center">Pesanan Anda akan tiba kurang dari 20 menit</h6>
							<button type="submit"class="btn btn-red btn-lg btn-submit">Buat Pesanan Baru</button>
							<!-- <a type="submit" class="btn btn-red btn-lg btn-submit">Buat Pesanan Baru</a> -->
						</form>	
					</div>
				</div>
				
			<?php } ?>
		</div>
	</div>	</div>
	<!-- endbody -->

	<section class="promotions home-section">
		<div class="row">
			<div class="col-sm-4 text-center promotion">
				<p><a data-toggle="modal" style="cursor:pointer;" onclick="" target="_top"><img class="img-block promotion-thumbnail" src="<?php echo base_url('assets/logo/promo3.jpg') ?>"></a></p>
			</div>
			<div class="col-sm-4 text-center promotion">
				<p><a data-toggle="modal" style="cursor:pointer;" onclick="" target="_top"><img class="img-block promotion-thumbnail" src="<?php echo base_url('assets/logo/promo1.jpg') ?>"></a></p>
			</div>
			<div class="col-sm-4 text-center promotion">
				<p><a data-toggle="modal" style="cursor:pointer;" onclick="" target="_top"><img class="img-block promotion-thumbnail" src="<?php echo base_url('assets/logo/promo2.jpg') ?>"></a></p>
			</div>
		</div>
	</section>
	<section class="how-it-works home-section">
		<h1 class="section-title">How does McDelivery® Work?</h1>
		<p>
			<a href="#" data-target="#" data-toggle="modal">
				<img class="img-block" alt="mcd" src="<?php echo base_url('assets/logo/promo4.png') ?>">
			</a>
		</p>
	</section>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(function(){
			$("#signin").show();
			$(".active #change1").css("border-bottom", "solid red");
		});
		$("#change1").click(function(){
			$("#signin").show();
			$(".active #change1").css("border-bottom", "solid red");
			$(".active #change2").css("border-bottom", "solid #d2d2d2");
			$("#imnew").hide();
		});
		$("#change2").click(function(){
			$("#signin").hide();
			$("#imnew").show();
			$(".active #change2").css("border-bottom", "solid red");
			$(".active #change1").css("border-bottom", "solid #d2d2d2");
		});
	});
</script>
