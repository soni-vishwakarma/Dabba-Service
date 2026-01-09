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
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <?php include 'header_menu1.php' ?>
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <!--<div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Checkout</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Checkout</li>
            </ol>
        </div>-->
        <!-- Single Page Header End -->
<br><br><br><br><br><br>

        <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4">Login</h1>
                <form action="index.php">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
						 <div class="form-item">
                                <label class="form-label my-3">Mobile<sup>*</sup></label>
                                <input type="text" class="form-control"placeholder="Enter your mobile no">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Password <sup>*</sup></label>
                                <input type="password" class="form-control" placeholder="Enter yor password">
                            </div>
                            <!--<div class="row">
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
						</div>-->
					<div>
					<div class="form-item form-label my-3">
						<p class="text-start text-dark">Don’t have an account?<a href="signup.php" class="border-secondary rounded-pill px-3 text-primary"><b>Sign Up</b></a><p>
					</div>
					<div class="d-flex m-3 me-0">
							<div class="position-relative mx-auto">
                           <!--  <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">-->
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-105 w-260" onClick="index.php" style="top: 0; right: 25%;">Submit</button>
                        </div>
                        </div><br><br>
						<nav class="navbar navbar-light bg-white navbar-expand-xl">
							<!--<div class="col-md-12 col-lg-6">
								<div class="navbar-nav mx-auto nav-item dropdown">
                                <a href="#" class="modal-content form-label my-3 nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" style="width:356px;color: #747d88">Select Location*<sup></sup></a>
									<label class="form-label my-3">Select Location<sup>*</sup></label>
									<div class="col-md-12 col-lg-6 dropdown-menu m-0 bg-secondary rounded-0" style="width:356px">
										<a href="Mahim.html" class="dropdown-item">Mahim</a>
										<a href="Mahim.html" class="dropdown-item">Kurla</a>
										<a href="Sion.html" class="dropdown-item">Sion</a>
										<a href="GTB.html" class="dropdown-item">GTB</a>
										<a href="Chunabhati.html" class="dropdown-item">Chunabhati</a>
										<a href="Bandra.html" class="dropdown-item">Bandra</a>
									</div>
								</div>
							</div>-->
						</nav>
						
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