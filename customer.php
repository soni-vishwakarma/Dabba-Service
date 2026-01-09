<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
		
		<!-- metisMenu CSS
		============================================ -->
		<link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
		<link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
		
		<!-- responsive CSS
		============================================ -->
		<link rel="stylesheet" href="css/responsive.css">

    </head>

    <body>
	<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="admin_dashboard.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="admin_dashboard.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
				<?php include 'leftmenu.php';?>                
            </div>
        </nav>
    </div>
        <!-- Hero Start -->
		
		<!-- Login upper band -->
		<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
             <div class="header-top-menu tabl-d-n">
	<ul class="nav navbar-nav mai-top-nav">
		<li class="nav-item"><a href="index.php" class="nav-link">Home</a>
		</li>
		<!--<li class="nav-item"><a href="#" class="nav-link">About</a>
		</li>
		<li class="nav-item"><a href="#" class="nav-link">Services</a>
		</li>
		<li class="nav-item dropdown res-dis-nn">
			<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
			<div role="menu" class="dropdown-menu animated zoomIn">
				<a href="#" class="dropdown-item">Documentation</a>
				<a href="#" class="dropdown-item">Expert Backend</a>
				<a href="#" class="dropdown-item">Expert FrontEnd</a>
				<a href="#" class="dropdown-item">Contact Support</a>
			</div>
		</li>
		<li class="nav-item"><a href="#" class="nav-link">Support</a>
		</li>-->
		</ul>
	</div>                                    
</div>
			<!-- Login upper band -->
		
		 <!--upper search bar -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="admin_dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Administrator</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
		
		 <!--upper search bar -->
		 <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4">Sign Up</h1>
                <form action="index.php">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">First Name<sup>*</sup></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">Last Name<sup>*</sup></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
						<div class="row">
								<div class="col-md-12 col-lg-6">
									<label class="form-label my-3">Email Address<sup>*</sup></label>
									<input type="email" class="form-control">
								</div>
								<div class="col-md-12 col-lg-6">
									<label class="form-label my-3">Mobile<sup>*</sup></label>
									<input type="tel" class="form-control">
								</div>
						</div>
						<div>
						<nav class="navbar navbar-light bg-white navbar-expand-xl">
							<div class="col-md-12 col-lg-6">
								<div class="navbar-nav mx-auto nav-item dropdown">
                                <a href="#" class="modal-content form-label my-3 nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" style="width:356px;color: #747d88">Select Location*<sup></sup></a>
									<!--<label class="form-label my-3">Select Location<sup>*</sup></label>-->
									<div class="col-md-12 col-lg-6 dropdown-menu m-0 bg-secondary rounded-0" style="width:356px">
										<a href="Mahim.html" class="dropdown-item">Mahim</a>
										<a href="Mahim.html" class="dropdown-item">Kurla</a>
										<a href="Sion.html" class="dropdown-item">Sion</a>
										<a href="GTB.html" class="dropdown-item">GTB</a>
										<a href="Chunabhati.html" class="dropdown-item">Chunabhati</a>
										<a href="Bandra.html" class="dropdown-item">Bandra</a>
									</div>
								</div>
							</div>
						</nav>
						<p class="text-start text-dark">By creating an account, I accept to <b>Dabba Service's Terms of Use</b> and <b>Privacy Policy</b><p>
						</div>
						<div class="d-flex m-3 me-0">
							<div class="position-relative mx-auto">
                           <!--  <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">-->
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-105 w-260" onClick="index.php" style="top: 0; right: 25%;">Submit</button>
                        </div>
                        </div>
					</div>
				
						<div class="col-md-12 col-lg-6 col-xl-5">
							<div class="row">
								<div class="col-lg-6">
									<div class="position-relative">
										<img src="img/signup.png" alt="">
										<div class="d-flex align-items-center justify-content-center bg-white  " style="width: 140px; height: 140px; top: 0; left: 0;">
										   <!-- <h1 style="font-size: 100px;">1</h1>
											<div class="d-flex flex-column">
											   <!-- <span class="h2 mb-0">50$</span>
												<span class="h4 text-muted mb-0">kg</span>-->
										</div>
									</div>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
        <!-- S Page End -->
		
		
		
		
		
		
		
		
		

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Fruitables</h1>
                                <p class="text-secondary mb-0">Fresh products</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">typesetting, remaining essentially unchanged. It was 
                                popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                            <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            <a class="btn-link" href="">Terms & Condition</a>
                            <a class="btn-link" href="">Return Policy</a>
                            <a class="btn-link" href="">FAQs & Help</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">My Account</a>
                            <a class="btn-link" href="">Shop details</a>
                            <a class="btn-link" href="">Shopping Cart</a>
                            <a class="btn-link" href="">Wishlist</a>
                            <a class="btn-link" href="">Order History</a>
                            <a class="btn-link" href="">International Orders</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: Example@gmail.com</p>
                            <p>Phone: +0123 4567 8910</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>