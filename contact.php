<!DOCTYPE html>
<html>
<head>

<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="/js/jquery.min.js"></script>
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
 <!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
<!----- webfonts ------>
	<link href='/http://fonts.googleapis.com/css?family=Carrois+Gothic:400,100,600,300,700' rel='stylesheet' type='text/css'>
	<link href='/http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!----- webfonts ------>
<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
	<!----//End-top-nav-script---->
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<!-- logo -->
			<div class="logo">
				<a href="/"><img src="/img/logo1.png" title="carwash" /></a>
			</div>
			<!-- /logo -->
			<!-- top-nav -->
		<div class="top-nav">
			<span class="menu"> </span>
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li class="active"><a href="contact.php">Contact Us</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="signin.php">Sign In</a></li>
						<div class="clearfix"> </div>
				</ul>
		</div>
		<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(1000);
						});
					});
				</script>
		<!-- script-for-nav -->
		<!-- /top-nav -->
			<div class="clearfix"> </div>
		</div>
		<!-- /header -->
	</div>
	<!----- //End-banner---->
		<!----- /start-about---->
			 <div id="contact" class="Contact">
			 	<div class="contact-section">
			 			<div class="contact-head">
			 				<h3>Contact</h3>
			 				
			 			</div>
			 	<div class="contact_top">
			 		<div class="container">
					       <div class="col-md-8 contact_left">
							  <form method="post" action="contact-post.php">
								 <div class="form_details">
					                 <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
									 <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
									 <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
									 <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
									 <input name="submit" type="submit" value="Submit">
						          </div>
						       </form>
					        </div>
					        <div class="col-md-4 company-right">
					        	<div class="company_ad">
							     		<h3>Office Address:</h3>
			      						<address>
											 <p>Cebu City,</p>
											 <p>Philippines</p>
									   		<p>Phone:(00) 222 666 444</p>
									   		<p>Fax: 987-6543-210</p>
									 	 	
							   			</address>
							   		</div>
							   		<div class="contact-icons">
						    			<h3>Follow Us On:</h3>
										<ul>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="fb" href="#"><span> </span></a></li>
											<li><a class="pin" href="#"><span> </span></a></li>
											<li><a class="gg" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
						    </div>	
						    		

			
							</div>	
						</div>
					</div>
				</div>
	<!----- /start-services---->
			 <div id="services" class="services">
	 			<div class="container">
	 					
		 			<div class="service-grids">
			 				<div class="col-md-3 service-grid">
			 					<i class="icon1"> </i>
			 					<h3>Sites the world</h3>
			 				</div>
			 					<div class="col-md-3 service-grid">
			 					<i class="icon2"> </i>
			 					<h3>Shopping</h3>
			 				</div>
			 				<div class="col-md-3 service-grid">
			 					<i class="icon3"> </i>
			 					<h3>Photography</h3>
			 				</div>
			 				<div class="col-md-3 service-grid">
			 					<i class="icon4"> </i>
			 					<h3>Find the best</h3>
			 				</div>
		 				<div class="clearfix"> </div>
		 			</div>
	 			</div>
			 </div>
	<!----- //End-services---->
		<!----- /start-footer---->
				<div class="footer">
					<div class="container">
						<div class="copy-right">
							<p>&copy; 2015 &nbsp;<a href="/">Brainybees</a></p>
						</div>
						</div>								
					</div>
					<!----- //End-footer---->
							<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>