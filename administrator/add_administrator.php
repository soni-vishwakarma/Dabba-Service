<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Dabba Service </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'cssfile.php';?>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="admin_dashboard.html"><img class="main-logo" src="img/logo/logo.png" width="90" alt="" /></a>
                <strong><a href="admin_dashboard.php"><img src="img/logo/logosn1.png" width="100" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
				<?php include 'leftmenu.php';?>                
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                         <a href="admin_dashboard.php"><img class="main-logo" src="" width="90"   alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <?php include 'headermenu.php';?>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">                                            
											<?php include 'header_right_menu.php';?>											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <?php include 'mobile_menu.php';?>								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
			
			<!-- Search Menu Start -->
			<br><br><br>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                            <?php include 'search_admin_menu.php';?>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Search Menu end -->
		
		<!---------------------- Content Start -------------------->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Administrator</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-administrator" action=".php" method="post" class="add-administrator">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<!-- Left Section -->
															<div class="form-group">
                                                                <input id="adm_id" name="adm_id" type="text" class="form-control" placeholder="ID">
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="adm_name" name="adm_name" type="text" class="form-control" placeholder="Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="adm_mob" name="adm_mob" type="text" class="form-control" placeholder="Contact Number">
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="adm_mail_id" name="adm_mail_id" type="email" class="form-control" placeholder="Email">
                                                            </div>
															<div class="form-group">
                                                                <input type="password" id="adm_pass" name="adm_pass" class="form-control" placeholder="Password">
                                                            </div>
															<!-- Left Section Ends-->
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <!-- Right Section
															<div class="form-group">
                                                                <input name="phone" type="number" class="form-control" placeholder="Phone">
                                                            </div>
                                                            -->
															<div class="form-group">
                                                                    <center><img src="img/logo/add_admin.png" width="350px" height="100px" alt=""></center>
                                                            </div>	
															 <!--<div class="row">
																 <!--<div class="col-lg-6">
																	< <!--div class="position-relative">
																		
																		 <!--<div class="d-flex align-items-center justify-content-center bg-white  " style="width: 140px; height: 140px; top: 0; left: 0;">
																		   <h1 style="font-size: 100px;">1</h1>
																			<div class="d-flex flex-column">
																			   <!-- <span class="h2 mb-0">50$</span>
																				<span class="h4 text-muted mb-0">kg</span>-->
																		</div>
																	</div>
																</div>
															</div>
														</div>
                                            </div>
                                        </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------- Content End -------------------->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<?php include 'footer.php';?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php include 'js_file.php';?>
</body>
</html>
<?php
if (isset($_GET['status'])) {
        $sta = $_GET['status'];
        echo "<script type='text/javascript'>alert('$sta');</script>";
	}
?>