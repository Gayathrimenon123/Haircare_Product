





<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Beaut a Fashion Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Beaut Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="../web/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="../web/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <link href="../web/css/owl.carousel.css" rel="stylesheet">
      <!-- Owl-carousel-CSS -->
      <link href="../web/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
      <div class="header-outs" id="home">
         <div class="header-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="hedder-up">
                  <h1><a class="navbar-brand" href="index.html">Beaut</a></h1>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item">
                        <a class="nav-link" href="adminhome.php">Home <span class="sr-only">(current)</span></a>
                     </li>
<!-- 
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Customer&Staff 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a href="approvecust.php" class="nav-link">Approve Customer</a
                        <a href="AddStaff.php" class="nav-link">Add Staff</a>

                        </div>
                     </li> -->
                     <li class="nav-item ">
                  
                     <a href="adminviewcustomer.php" class="nav-link">Customer</a>

                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Staff
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="AddStaff.php" class="nav-link">Add Staff</a>
                        <a href="adminviewstaff.php" class="nav-link">View Staff</a>
                      
                        </div>
                     </li>
                
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="addbrand.php" class="nav-link"> Brand</a>
                        <a href="cat.php" class="nav-link">Category</a>
                        <a href="AddSubCat.php" class="nav-link">Subcategory</a>
                        <a href="addproduct.php" class="nav-link">Products</a>
                        </div>
                     </li>
                


                     <li class="nav-item ">
                        <a href="staffviewproduct.php" class="nav-link">Products</a>
                     </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Purchase
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="addsupplier.php" class="nav-link">Supplier</a>
                        <!-- <a href="staffpurchase.php" class="nav-link">Purchase</a> -->
                        <a href="purchaseitems.php" class="nav-link">Purchase</a>
                        <a href="viewpurchase.php" class="nav-link">View Purchase</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="vieworders.php" class="nav-link">Order</a>
                     </li>
                   
<!-- 
                     <li class="nav-item ">
                        <a href="viewPaymentStatus.php" class="nav-link">Payment</a>
                     </li> -->
                     <li class="nav-item ">
                        <a href="viewreport.php" class="nav-link">Report</a>
                     </li>
                     <li class="nav-item">
                        <a href="../index.php" class="nav-link">Logout</a>
                     </li>
                     
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- //Navigation-->
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!-- short -->
           <!--js working-->
           <script src='../web/js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--responsiveslides banner-->
      <script src="../web/js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:true,
         		nav: false,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	  
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="../web/js/jquery.waypoints.min.js"></script>
      <script src="../web/js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <script src="../web/js/owl.carousel.js"></script>
      <script>
         $(document).ready(function () {
         	$("#owl-demo2").owlCarousel({
         		items: 1,
         		lazyLoad: false,
         		autoPlay: true,
         		navigation: false,
         		navigationText: false,
         		pagination: true,
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <script src="../web/js/move-top.js"></script>
      <script src="../web/js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="../web/js/bootstrap.min.js"></script>