<div class="global-footer">
	<div class="footer-nav">
		<div class="container">
			<div class="row">
				<div class="column">
					<h3 class="list-group-title">Menu</h3>
					<ul class="list-unstyled">
						<li class="menu-item">

							<a class="menu-item-target" href="#">Istimewa</a>
							
						</li>
						<li class="menu-item">
							
							<a class="menu-item-target" href="#">A La Carte &amp; Paket</a>
							
						</li>
						<li class="menu-item">
							
							<a class="menu-item-target" href="#">Tambahan</a>
							
						</li>
						<li class="menu-item">
							
							<a class="menu-item-target" href="#">Happy Meal</a>
							
						</li>
						<li class="menu-item">
							
							<a class="menu-item-target" href="#">Pencuci Mulut</a>
							
						</li>
						<li class="menu-item">
							
							<a class="menu-item-target" href="#">Minuman</a>
							
						</li>							
										
					</ul>
				</div>

				<div class="column">
					<h3 class="list-group-title">Bantuan</h3>
					<ul class="list-unstyled">
						 <li class="menu-item"> 
	 
								<a class="menu-item-target" href="#" target="_self">Syarat dan Ketentuan</a>

						</li>
						 <li class="menu-item"> 

								<a class="menu-item-target" href="#" target="_self">Kebijakan Privasi</a>
		
						</li>
						 <li class="menu-item"> 
	 
								<a class="menu-item-target" href="#" target="_blank">Unduh Menu Kami</a>
		
						</li>
						 <li class="menu-item"> 
	
								<a class="menu-item-target" href="#" target="_self">Tanya Jawab</a>
			
						</li>
						 <li class="menu-item"> 
						
							<a class="menu-item-target" href="#" target="_self">Mobile Web</a>
				
						</li>
					</ul>
				</div>
				 
					<div class="column">
						<h3 class="list-group-title">Ikuti kami</h3>
						<ul class="list-unstyled">
						
							<li class="menu-item ">
								<a class="menu-item-target fa fa-facebook-official" href="https://www.facebook.com/McDonalds.ID" target="_blank">Facebook</a>
							
							</li>
						
							<li class="menu-item">
								
								<a class="menu-item-target footer-icon tw" href="https://twitter.com/McDonalds_ID" target="_blank">Twitter</a>
								
							</li>
						
							<li class="menu-item">
								
								
								<a class="menu-item-target footer-icon yt" href="https://www.youtube.com/user/McDonaldsID" target="_blank">YouTube</a>
							</li>
						
							<li class="menu-item">
								<a class="menu-item-target footer-icon in" href="https://www.instagram.com/mcdonaldsid/" target="_blank">Instagram</a>
							</li>

						</ul>
					</div>
			</div>
		</div>
	</div>
	<div class="footer-disclaimer">
		<div class="container">
			<div class="text-center"></div>
			<div class="text-center text-ucase">SELURUH HAK CIPTA DILINDUNGI OLEH MCDONALD'S 2016</div>
			<div class="text-center text-ucase">Logo M dan slogan "i'm lovin' it" adalah milik McDonald's Corporation secara keseluruhan.</div>
		</div>
	</div>


</div>>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
		      <div class="modal-body" style="text-align: center;">
				<img class="logo" src="<?php echo base_url('assets/logo/mcd.png') ?>">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="fa mcd mcd-close"></i>
				</button>
		        <h2 id="modal-title">Selamat datang. Log Masuk untuk Mulai Pesan.</h2>
		          <ul class="nav nav-tabs">
				    <li class="nav-item akun">
				      <a class="nav-link active" data-toggle="tab" href="#login">Login</a>
				    </li>
				    <li class="nav-item akun">
				      <a class="nav-link" data-toggle="tab" href="#register">Register</a>
				    </li>
				  </ul>
				  
		       	  <div class="tab-content">
				    <div id="login" class="tab-pane active"><br>
				    	<form action=" <?php echo base_url('Login/index'); ?>" method="POST">	
					      <div class="list-group textfield-list-group">
								<div class="list-group-item textfield-list-group-item">
									<input type="text" name="username" id="form_login_modal_username" class="required email list-group-form-control" placeholder="Email" value="" aria-required="true">
								</div>
								<div class="list-group-item textfield-list-group-item">
									<input type="password" name="password" id="form_login_modal_password" class="required list-group-form-control" placeholder="Password" autocomplete="off" maxlength="20" value="" aria-required="true">
								</div>
							  </div>
								
							<fieldset class="form-actions">
								 <button type="submit" class="loginSucces btn btn-default btn-red btn-block btn-xl btn-submit">Log Masuk</button>				
							</fieldset>
				    	</form>
			    
				    </div>
				    
				    <div id="register" class="tab-pane"><br>
						<a class="btn btn-block btn-red btn-xl" href="<?php echo base_url('Registrasi/getAlamat'); ?>">Daftar Sekarang</a>

				    </div>
				  </div>

				</div>			

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		  </div>
	    </div>
	  </div>

	</div>
	<script>
	$(document).ready(function(){
		$(function(){
			$(".akun1 a").css("border-bottom", "solid #d2d2d2");
			$("#login1 a").css("border-bottom", "solid red");
		});
		$("#login1").click(function(){
			$("#login1 a").css("border-bottom", "solid red");
			$("#imnew1 a").css("border-bottom", "solid #d2d2d2");
		});
		$("#imnew1").click(function(){
			$("#imnew1 a").css("border-bottom", "solid red");
			$("#login1 a").css("border-bottom", "solid #d2d2d2");
		});
	});

</script>	
	<script>
	$(document).ready(function(){
	  $(".nav-tabs a").click(function(){
	    $(this).tab('show');
	  });
	});
	</script>		        
</body>
</html>