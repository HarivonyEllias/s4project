<?php session_start(); 
$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profil</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/styles/bootstrap4/bootstrap.min.css'); ?>">
<link href="<?php echo site_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/styles/main_styles.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/styles/responsive.css'); ?>">
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
						<div class="top_nav_left">Profil</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">


								
								
								<li class="account">
									<!-- <a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										
									</ul> -->
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
							<a href="#">Profil<span>  Utilisateur</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="<?php echo site_url("HomeR"); ?>">home</a></li>
												
								<!-- <li><a href="contact.html">contact</a></li> -->
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">1</span>
									</a>
								</li>
							</ul>
							
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>


	<!-- Slider -->

	


	
	
    <div class="profil" style="margin-top: 170px;" >
		
			<table class="table" style="text-align: center; font-size:15px; ">
				
				<tbody>
				  <tr>
					<td style="font-size: 20px;"></td>
					<td style="color: cadetblue; ">NOM</td>
					
				
					<td style="font-size: 30px;"><b><?php echo $user->nom; ?></b></td>
				
				  </tr>
				  <tr>
					<td style="font-size: 30px;"></td>
					<td  style="color: cadetblue;">EMAIL</td>
					
					<td><?php echo $user->email; ?></td>
					
				  </tr>
				  <tr>
					<td style="font-size: 30px;"></td>
					<td  style="color: cadetblue;">GENRE</td>
					
					<td><?php echo ($user->genre=="F")?"Feminin":"Masculin"; ?></td> 
					
				  </tr>
	
				  <tr>
					<td style="font-size: 30px;"></td>
					<td  style="color: cadetblue;">TAILLE</td>
					
					<td><?php echo $user->taille; ?> cm</td> 
					
				  </tr>
				  <tr>
					<td style="font-size: 30px;"></td>
					<td  style="color: cadetblue;">POIDS</td>
					
					<td><?php echo $user->poids; ?> kg</td> 
					
				  </tr>
				  <tr>
					<td style="font-size: 30px;"></td>
					<td  style="color: cadetblue;">ARGENT</td>
					
					<td style="color: coral;font-size: 27px;"><?php echo $user->argent; ?> Ar</td> 
					
				  </tr>
				
				</tbody>
			  </table>
		
	</div> 

    <div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="table-responsive">
					<form action="<?php echo site_url("DemandeCode")?>" method="post">
                    <table class="table" style="text-align: center; margin-top: 16px;">
                      <tbody>
                        <tr>
                          <td>
                            <p style="font-size: 20px;">Insertion de code </p>
                          </td>
                          <td> <input style="background-color:#e8edf3;border-radius: 10px;color: lightgray;" name="code" type="text" class="form-control" placeholder="Inserer votre code " aria-label="Username" aria-describedby="basic-addon1"></td>                
                          <td>
                              <button type="submit" class="btn btn-success">Inserer</button>
                          </td>
                      </tr>                  
                    </tbody>
                </table>
				</form>
              </div>
            </div>
        </div>
    </div>  
	<p style="font-size: 16pt;"><?php if(isset($msg)) echo $msg; ?></p>
    <div class="newsletter" style="height: 80%;background-color: white;">
        <div class="container" >
          
                
                    <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center"  style="text-align: center;">
                        
                        <p style="font-size: 20px; text-align: center; margin-left: 0px; margin-top:15%">Codes: </p> 
                        <?php 
                            if(isset($codes)) {
                            for ($i=0; $i < count($codes); $i++) { ?> 
                                <p><b style="color:lightgray"> <?php echo $codes[$i]->valeursequence; ?> </b></p>
                            <?php }
                        }?>
                    </div>
              
            
        </div>
    </div>
                         
                           
                           
                       
                      
         
	    
	

	<footer class="footer" style="margin-top: 13%;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
								<!-- <li><a href="contact.html">Contact us</a></li> -->
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
						<div class="cr">©2023 All Rights Reserverd. etu2006 - etu2017 - etu2056 </div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="<?php echo site_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/styles/bootstrap4/popper.js'); ?>"></script>
<script src="<?php echo site_url('assets/styles/bootstrap4/bootstrap.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/plugins/Isotope/isotope.pkgd.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js'); ?>"></script>
<script src="<?php echo site_url('assets/plugins/easing/easing.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/custom.js'); ?>"></script>
</body>

</html>