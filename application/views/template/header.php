<!DOCTYPE html>
<html>

<head>
	<title>McDelivery</title>
	<meta charset="utf-8" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<!-- link datatTables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	<!-- link datatTables -->
	<link href="<?php echo base_url('assets/');?>css/project2.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/menu.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/home.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/footer.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/registration.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/form.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/support1.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/');?>css/akun.css" rel="stylesheet">


	<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<body>
	<div class="wrap container">
		<!-- navbar -->
		<div class="global-head">
			<div class="subheader">
				<div class="subheaderleft">
					<ul class="leftheader">
						<li class="leftheader1"><a href="#"> Bahasa Indonesia </a></li>
						<li class="leftheader2"><a href="#"> English </a></li>
					</ul>
				</div>
				<div class="subheaderright">
					<?php 
					if (!empty($this->session->userdata('akunLogin'))) {
						$data = $this->session->userdata('akunLogin') 
						?>
						<ul class="rightheader">
							<li class="rightheader1"> <a href="#" title="">Selamat datang kembali <?php echo $data['nama']; ?> </a> </li>
							<li class="rightheader2"> <a href=" <?php echo base_url('Login/signout'); ?> " title="">Log Keluar</a> </li>
							<li class="rightheader2"> <a href="#" title="">Lacak Pesanan Saya</a> </li>
						</ul>
					<?php }else{

						?>	 
						<ul class="rightheader">
							<li class="rightheader2"> <a href="#exampleModal" data-target="#exampleModal" data-toggle="modal">Sign in</a> </li>
							<li class="rightheader2"> <a href="#" title="">Lacak Pesanan Saya</a> </li>
							<li class="rightheader2"> <a href="<?php echo base_url('Admin/loginPage'); ?>" title="">Admin</a> </li>
						</ul>

					<?php }?>
				</div>
			</div>
			<nav class="global-navbar navbar navbar-expand-sm">
				<div class="navbar-header">
					<div class="logo-mcd">
						<a class=" navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/'); ?>logo/mcd.png" alt="mcdelivery"></a>
					</div>
				</div>
				<ul class="nav navbar-nav">
					<li class="nav-item garis">
						<a class="nav-link menu" href="<?php echo base_url('Menu/menu/istimewa') ?>">
							<i class='fas fa-hamburger icon'></i></i>Menu</a>
						</li>
						<li class="nav-item garis">
							<a class="nav-link offers" href="<?php echo site_url('Offer/getOffer');?>"><i class='fas fa-tags icon'></i>Offers</a>
						</li>
						<?php if (empty($this->session->userdata('akunLogin'))) {
							$data = $this->session->userdata('akunLogin') 
							?>

							<li class="nav-item garis">
								<a class="nav-link akun" href="#exampleModal" data-target="#exampleModal" data-toggle="modal"><i class="fa fa-user icon"></i>
								My Account</a>
							</li>

						<?php }else{
							?>

							<li class="nav-item dropdown links">
								<a class="nav-link dropdown-toggle account" href="#" data-toggle="dropdown"><i class="fa fa-user icon"></i>
									My Account
								</a>
								<div class="dropdown-menu links">
									<a class="dropdown-item" href="">Lacak Pesanan</a>
									<a class="dropdown-item" href="<?php echo base_url('Account/pesananLalu'); ?>">Pesanan Lalu</a>
									<a class="dropdown-item" href="<?php echo base_url('Account/gantiFavorit'); ?>">Favorit Saya</a>
									<a class="dropdown-item" href="<?php echo base_url('Account/gantiAlamat'); ?>">Buku Alamat</a>
									<a class="dropdown-item" href="<?php echo base_url('Account'); ?>">Pengaturan Akun</a>
									<a class="dropdown-item" href="<?php echo base_url('Account/gantiPass'); ?>">Ganti Password</a>
								</div>
							</li>		
						<?php } ?>
						<li class="nav-item dropdown links">
							<a class="nav-link dropdown-toggle support" href="#" data-toggle="dropdown"><i class="fa fa-phone icon"></i>
								Support
							</a>
							<div class="dropdown-menu links">
								<a class="dropdown-item" href="<?php echo base_url('Support'); ?>">Terms & Conditions</a>
								<a class="dropdown-item" href="<?php echo site_url('Support/getPrivacy')?>">Privacy Policy</a>
								<a class="dropdown-item" href="https://www.mcdelivery.co.id/id/assets/62/mcdelivery_menu_62_in.pdf?staticLinkId=10&locale=in">Dowbload our menu</a>
								<a class="dropdown-item" href="<?php echo site_url('Support/getFAQ')?>">FAQ</a>
								<a class="dropdown-item" href="#">Mobile Web</a>
							</div>
						</li>
					</ul>
				</nav>
			
			<!-- batas navbar -->
