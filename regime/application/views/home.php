<!DOCTYPE html>
<html lang="en">
<head>
<title>Acceuil</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/styles/bootstrap4/bootstrap.min.css') ?>">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/OwlCarousel2-2.2.1/animate.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/styles/main_styles.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/styles/responsive.css') ?>">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Conseil</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">


								
								
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">Reg<span>ime</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.html">home</a></li>
								<!-- <li><a href="#new_arrivals">shop</a></li>
							
								<li><a href="contact.html">contact</a></li> -->
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li style="margin:0 0 0 5px;" class="checkout">
									<a href="<?php echo site_url("ProfilR"); ?>" style="background-color: green;">
										<i class="fa fa-user-cart" aria-hidden="false"></i>
										<span id="checkout_items" class="checkout_items">1</span>
									</a>
								</li>
								<p style="margin:0 0 0 5%; font-weight: bolder;color:chocolate"> PROFIL </p> 
							</ul>
							
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">Marathi</a></li>
						
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">offers</a></li>
				
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style=" background-image: url(<?php echo site_url('assets/images/veg.jpg'); ?>">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						
						<h1>Regime et Sport </h1>
						<div class="red_button shop_now_button"><a href="#index">Commencer</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="augmenter" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div id="index" class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Pour augmenter votre poids</h4>
						
					</div>
				</div>
				<div class="col-lg-6">
					<form action="<?php echo site_url("AugmenterPoids") ?>"> 
                        <table class="table" style="margin-top: 30px;">
                            <tbody>
                              <tr >
								<input type="hidden" name="objectif" value="1">
                                <td><input type="text" class="form-control" name="kilos" placeholder="Kilos a prendre" aria-label="Username" aria-describedby="basic-addon1"></td>
                                <td><button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit" style="background-color: rgb(118, 191, 9);  margin-top: -4px;">Augmenter</button> </td>
                              </tr>
                              
                          </table>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div> 



    <div class="diminuer" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4> Pour diminuer  votre poids </h4>
						
					</div>
				</div>
				<div class="col-lg-6">
					<form action="<?php echo site_url("AugmenterPoids") ?>"> 
                        <table class="table" style="margin-top: 30px;">
                            <tbody>
                              <tr >
								<input type="hidden" name="objectif" value="2">
                                <td><input type="text" class="form-control" name="kilos" placeholder="Kilos a perdre " aria-label="Username" aria-describedby="basic-addon1"></td>
                                <td> <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit" style="margin-top: -4px;">Diminuer</button></td>
                              </tr>
                              
                          </table>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div> 

	<div class="IMC"  >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4> Pour tenir votre IMC </h4>
						
					</div>
				</div>
				<div class="col-lg-6">
					<form action="<?php echo site_url("AugmenterPoids"); ?>"> 
                        <table class="table" style="margin-top: 30px;">
                            <tbody>
                              <tr >
								<input type="hidden" name="objectif" value="3">
                                <td><input type="text" class="form-control" name="kilos" placeholder="Votre indice de masse corporelle" aria-label="Username" aria-describedby="basic-addon1"></td>
                                <td> <button style="background-color: purple;" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit" style="margin-top: -4px;">IMC</button></td>
                              </tr>
                              
                          </table>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div> 



    <div class="proposition" style="margin-top: 60px;"  > 
		<div class="proposition" style="margin-left: 725px;"  > 
			<p style="color: navy; font-size: 18px;">Proposition </p>
		</div>
		<table class="table" style="text-align: center; margin: auto; font-size:17px; margin-top: 35px;">
			<thead>
				<tr>
					<th >Jour</th>
                <th >Regime</th>
                <th>Sport</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sum = 0;
			if (isset($proposition)) { 
				$index = 0;
				?>
				<?php for ($i=1; $i <= $proposition[0]->duree; $i++) { ?> 
					<tr>
						<td style="color: cadetblue;"><?php echo "J".$i; ?></td>
						<td><?php echo $proposition[$index]->regime->menu; ?></td>
						<td><?php echo $proposition[$index]->sport->nom; ?></td>
					</tr>
					<?php
					$sum+=(float)$proposition[$index]->regime->prix;
					if ($index==count($proposition)-1) $index=0; 
					else $index++;
				} ?>
					<tr>
			<?php } else { ?>
				Aucun proposition pour l' instant.
			<?php } ?>
            </tbody>
          </table>
	</div>
	    
	    
	    
                     
    <div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>TOTAL</h4>
						<p>Voici votre cout</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"  disabled><?php echo $sum; ?> AR</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>                       
                            
		

	

	
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>PDF</h4>
						<p>Cliquer ici pour exporter cette proposition en PDF</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Export PDF</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
								<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">2023 All Rights Reserved. etu2006 - etu2017 - etu2056</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="<?php echo site_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo site_url('styles/bootstrap4/popper.js'); ?>"></script>
<script src="<?php echo site_url('styles/bootstrap4/bootstrap.min.js'); ?>"></script>
<script src="<?php echo site_url('plugins/Isotope/isotope.pkgd.min.js'); ?>"></script>
<script src="<?php echo site_url('plugins/OwlCarousel2-2.2.1/owl.carousel.js'); ?>"></script>
<script src="<?php echo site_url('plugins/easing/easing.js'); ?>"></script>
<script src="<?php echo site_url('js/custom.js'); ?>"></script>
</body>

</html>
