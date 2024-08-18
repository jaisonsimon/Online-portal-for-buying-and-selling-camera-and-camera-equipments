<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>LENSMAN</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!--top header section start -->
	<div class="top_header_section">
		<div class="container">
			<div class="top_section">
				<div class="row">
					<div class="col-sm-6">
						<div class="call_taital">
							<ul>
								<li><a href="#"><img src="images/call-icon.png"></a></li>
								<li class="mail"><a href="#"><img src="images/mail-icon.png"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- top header section start -->
		<!-- header section start -->
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="index.html"></a></div>
				</div>
				<div class="col-sm-5">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <ul>
                                <li><a class="nav-item nav-link" href="index.php">Home</a></li>
                                <li>|</li>
                                <li><a class="nav-item nav-link" href="buyer_reg.php">Buyer Signup</a></li>
                                <li>|</li>
                                <li><a class="nav-item nav-link" href="seller_reg.php">Seller Signup</a></li>
                                <li>|</li>
                           </ul>
                        </div>
                    </div>
                    </nav>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="search_main">
						<div class="left_main">
							
						</div>
						<div class="right_main">
							<div class="login_text"><a href="login.php">Signin<span class="user_icon"><img src="images/user-icon.png"></span></a></div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
  <section class="h-100 h-custom" style="background-image: url('images/bg.jpg'); background-position: center; /* Center the image */ background-repeat: no-repeat; /* Do not repeat the image */  background-size: cover;">
  <div class="container py-5 h-100">
    <div class="row d-flex  h-100">
      <div class="col-lg-8 col-xl-6"><br><br>
        <div class="card rounded-3">
          <img src=""
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="">
          <div class="card-body p-4 p-md-5">
          <h1 class="get_text">BuyerRegistration</h1>
          <center><h3 ><span style="background-color:yellow;border-radius:13px"></h3></center>

            <form class="px-md-2" action="buyerregaction.php" method="post">

              <div class="form-outline mb-4">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
              </div>
            
              <div class="form-outline mb-4">
            <textarea name="address" placeholder="You Address..."class="form-control" style="width:100%" required></textarea>
          </div>
              <div class="form-outline mb-4">
            <input type="text" class="form-control" name="phonenumber" pattern="[0-9]{10}" placeholder="Phone Number" required>
            </div>

            <div class="form-outline mb-4">
            <input type="email" class="form-control" name="email"placeholder="Email" required>
           </div>

              <div class="form-outline mb-4">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>


              <div class="form-outline mb-4">
            <input type="password" class="form-control" placeholder="Password" name="password"required>
          </div>
             
             <center> <button type="submit" class="btn btn-success btn-lg mb-1">Register</button>
          </center>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <div class="footer_section">
        <div class="container">
            <!-- <div class="footer_logo"></div> -->
            <p class="long_text">It is a long established fact that a reader will be It is a long established fact that a reader will be </p>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="icon_main">
                            <ul>
                                <li><a href="#"><img src="images/map-icon.png"></a></li>
                                <li><a href="#"><img src="images/email-icon.png"></a></li>
                                <li><a href="#"><img src="images/contact-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <h1 class="news_text">Newsletter</h1>
                            <input type="" class="email_bt" placeholder="Enter your email" name="">
                            <button class="subscribe_bt"><a href="#">Subscribe</a></button>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });

      $('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
         </script>


     
</body>
</html>