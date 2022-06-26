<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Contact Us - Komad Technologies | IT Company</title>

	<meta name="description" content="Komad Technologies is a fast growing IT service and consulting company that invites you into an era of software solutions, mobile app development, digital marketing, web development, designing, training&consulting.">

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="images/favicon.png" rel="icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/plugin.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

</head>
<body>

<?php
    require('php/db.php');  
    
    if (isset($_REQUEST['name'])) {
    
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $mobile = stripslashes($_REQUEST['mobile']);
        $mobile = mysqli_real_escape_string($con, $mobile);
        $req = stripslashes($_REQUEST['forquery']);
        $req = mysqli_real_escape_string($con, $req);
        $msg = stripslashes($_REQUEST['message']);
        $msg = mysqli_real_escape_string($con, $msg);
        $query    = "INSERT into `contact` (name, email, mobile, req, msg)
                     VALUES ('$name', '$email', '$mobile', '$req', '$msg' )";
        $result   = mysqli_query($con, $query);
        header("Location: index.html");
    } else {
?>


	 <header class="header-pr nav-bg-b main-header navfix fixed-top menu-white">
         <div class="container-fluid m-pad">
            <div class="menu-header">
               <div class="dsk-logo"><a class="nav-brand" href="index">
                  <img src="http://www.komadtechnologies.com/images/white-logo.svg" alt="Logo" class="mega-white-logo"/>
                  <img src="http://www.komadtechnologies.com/images/logo.svg" alt="Logo" class="mega-darks-logo"/>
                  </a>
               </div>
               <div class="custom-nav" role="navigation">
                  <ul class="nav-list">
                     <li class="">
                        <a href="index" class="menu-links">Home</a>
                     </li>

                     <li class="sbmenu rpdropdown">
                        <a href="#" class="menu-links">Our Story</a>
                        <div class="nx-dropdown menu-dorpdown">
                           <div class="sub-menu-section">
                              <div class="sub-menu-center-block">
                                 <div class="sub-menu-column smfull">
                                    <ul>
                                       <li><a href="about">About Us</a></li>
                                       <li><a href="from-the-ceo">From The CEO</a></li>
                                       <li><a href="team">Our Team</a></li>
                                       <li><a href="mission-vision">Vision</a></li>
                                       <li><a href="career">Career</a></li>
                                       <li><a href="why-us">Why Choose KOMAD</a></li>
                                       
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>

                     <li class="sbmenu">
                        <a href="#" class="menu-links">Services</a>
                        <div class="nx-dropdown">
                           <div class="sub-menu-section">
                              <div class="container-fluid">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="sub-menu-center-block">
                                          <div class="sub-menu-column">
                                             <div class="menuheading"><a class="smoth-animation" href="mobile-app-development" style="color:#050748;">Mobile App Development</a></div>
                                             <ul class="pb20">
                                                <li><a class="smoth-animation" href="mobile-app-development#android-app-development">Android App Development</a></li>
                                                <li><a class="smoth-animation-app-development" href="mobile-app-development#ios-app-development">iOS App Development</a></li>
                                                <li><a class="smoth-animation" href="mobile-app-development#hybrid-app-development">Hybrid App Development</a></li>
                                             </ul>

                                             <div class="menuheading"><a href="#" style="color:#050748;">Sales</a></div>
                                             <ul>
                                                <li><a href="#">Sales Funnels</a></li>
                                                <li><a href="#">Multiple Sales Channelisation</a></li>
                                                <li><a href="#">Customer Acquisition</a></li>
                                                <li><a href="#">Revenue Generation</a></li>
                                                <li><a href="#">Influencer Marketing</a></li>
                                                <li><a href="sales-training">Sales Training</a></li>
                                             </ul>
                                             
                                          </div>

                                          <div class="sub-menu-column">
                                             <div class="menuheading"><a class="smoth-animation" href="web-development" style="color:#050748;">Web Development</div>
                                             <ul class="pb20">
                                                <li><a class="smoth-animation" href="web-development#crm">CRM Development</a></li>
                                                <li><a class="smoth-animation" href="web-development#cms-development">CMS Development</a></li>
                                                <li><a class="smoth-animation" href="web-development#ecommerce-development">E-Commerce Development</a></li>
                                                <li><a class="smoth-animation" href="web-development#custom-plugins">Custom Plugins</a></li>
                                                <li><a class="smoth-animation" href="web-development#api-development">API Development & Integration</a></li>
                                             </ul>

                                             <div class="menuheading"><a class="smoth-animation" href="ui-ux-design" style="color:#050748;">UI/UX</a></div>
                                             <ul>
                                                <li><a class="smoth-animation" href="ui-ux-design#webdesign">Web Designing</a></li>
                                                <li><a class="smoth-animation" href="ui-ux-design#graphic">Graphic Designing</a></li>
                                                <li><a class="smoth-animation" href="ui-ux-design#video">Video Editing</a></li>
                                             </ul>
                                             

                                          </div>

                                          <div class="sub-menu-column">
                                             <div class="menuheading"><a class="smoth-animation" href="digital-marketing" style="color:#050748;"> Digital Marketing</div>
                                             <ul>
                                                <li><a class="smoth-animation" href="digital-marketing#sem">Search Engine Marketing</a></li>
                                                <li><a class="smoth-animation" href="digital-marketing#smo">Social Media Optimization</a></li>
                                                <li><a class="smoth-animation" href="digital-marketing#smm">Social Media Marketing</a></li>
                                                <li><a class="smoth-animation" href="digital-marketing#ppc">Pay Per Click</a></li>
                                                <li><a class="smoth-animation" href="digital-marketing#seo"> Search Engine Optimization</a></li>
                                             </ul>
                                          </div>

                                          <div class="sub-menu-column">
                                             <div class="menuheading"><a href="networking-and-server-management" style="color:#050748;">Networking & Server Management</a></div>
                                             <ul>
                                                <li><a href="devops">Devops</a></li>
                                                <li><a href="mvp-development">MVP Development</a></li>
                                                <li><a href="software-product-development">Software Product Development</a></li>
                                                <li><a href="cyber-security">Cyber Security</a></li>
                                                <li><a href="white-label-solutions">White Label Solutions</a></li>
                                                <li><a href="data-management">Data management</a></li>
                                             </ul>
                                          </div>

                                          <div class="sub-menu-column">
                                             <div class="menuheading">Other Services</div>
                                             <ul>
                                                <li><a href="amazon-setup">Amazon Setup</a></li>
                                                <li><a href="online-education">Online Education</a></li>
                                                <li><a href="media-and-pr">Media & PR</a></li>
                                                <li><a href="research-and-development">Research & Development</a></li>
                                                <li><a href="artificial-intelligence">Artificial Intelligence</a></li>
                                                <li><a href="machine-learning">Machine Learning</a></li>
                                             </ul>
                                          </div>
                                       </div>

                                       
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>

                     <li class="">
                        <a class="menu-links" href="our-portfolio">Portfolio</a>
                     </li>

                     <li class="">
                        <a href="contact-us" class="menu-links">Contact US</a>
                     </li>
                     
                     <li>
                        <a href="#" class="menu-links right-bddr">&nbsp;</a>
                        
                     <li class="contact-show">
                        <a href="tel:+919910997039" class="btn-round- btn-br bg-btn"><i class="fas fa-phone-alt"></i></a>
                     </li>

                     <li><a href="contact-us" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a> </li>
                  </ul>
               </div>
               <div class="mobile-menu2">
                  <ul class="mob-nav2">
                     <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1"  data-toggle="modal" data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
                     <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                  </ul>
               </div>
            </div>
            <nav id="main-nav">
               <ul class="first-nav">

                  <li><a href="index">Home</a></li>

                  <li>
                     <a>Our Story</a>
                     <ul>
                        <li><a href="about">About Us</a></li>
                        <li><a href="from-the-ceo">From The CEO</a></li>
                        <li><a href="team">Our Team</a></li>
                        <li><a href="mission-vision">Vision</a></li>
                         <li><a href="career">Career</a></li>
                        <li><a href="why-us">Why Choose KOMAD</a></li>
                       
                     </ul>
                  </li>   

                  <li>
                     <a>Services</a>
                     <ul>
                        <li>
                           <a>Mobile App Development</a>
                           <ul>
                              <li><a href="mobile-app-development#android-app-development">Android</a></li>
                              <li><a href="mobile-app-development#ios-app-development">ios</a></li>
                              <li><a href="mobile-app-development#hybrid-app-development">Hybrid</a></li>
                           </ul>
                        </li>

                        <li>
                           <a>Web Development</a>
                           <ul>
                              <li><a class="smoth-animation" href="web-development#crm">CRM Development</a></li>
                              <li><a class="smoth-animation" href="web-development#cms-development">CMS Development</a></li>
                              <li><a class="smoth-animation" href="web-development#ecommerce-development">Ecommerce Development</a></li>
                              <li><a class="smoth-animation" href="web-development#custom-plugins">Custom Plugins</a></li>
                              <li><a class="smoth-animation" href="web-development#api-development">API Development & Integration</a></li>
                           </ul>
                        </li>

                        <li>
                           <a>UI/UX</a>
                           <ul>
                              <li><a href="ui-ux-design#webdesign">Web Designing</a></li>
                              <li><a href="ui-ux-design#graphic">Graphic Designing</a></li>
                              <li><a href="ui-ux-design#video">Video Editing</a></li>
                           </ul>
                        </li>

                        <li>
                           <a>Digital Marketing</a>
                           <ul>
                              <li><a href="digital-marketing#sem">Search Engine Marketing</a></li>
                              <li><a href="digital-marketing#smo">Social Media Optimization</a></li>
                              <li><a href="digital-marketing#smm">Social Media Marketing</a></li>
                              <li><a href="digital-marketing#ppc">Pay Per Click</a></li>
                              <li><a href="digital-marketing#seo"> Search Engine Optimization</a></li>
                           </ul>
                        </li>

                        <li>
                           <a>Networking & Server</a>
                           <ul>
                              <li><a href="networking-and-server-management">Networking & Server Management</a></li>
                              <li><a href="devops">Devops</a></li>
                              <li><a href="mvp-development">MVP Development</a></li>
                              <li><a href="software-product-development">Software Product Development</a></li>
                              <li><a href="cyber-security">Cyber Security</a></li>
                              <li><a href="white-label-solutions">White Label Solutions</a></li>
                              <li><a href="data-management">Data management</a></li>
                           </ul>
                        </li>

                        <li>
                           <a>Sales</a>
                           <ul>
                              <li><a href="#">Sales Funnels</a></li>
                              <li><a href="#">Multiple Sales Channelisation</a></li>
                              <li><a href="#">Customer Acquisition</a></li>
                              <li><a href="#">Revenue Generation</a></li>
                              <li><a href="#">Influencer Marketing</a></li>
                              <li><a href="sales-training">Sales Training</a></li>
                           </ul>                           
                        </li>


                        <li>
                           <a>Other Services</a>
                           <ul>
                              
                              <li><a href="amazon-setup">Amazon Setup</a></li>
                              <li><a href="online-education">Online Education</a></li>
                              <li><a href="media-and-pr">Media & PR</a></li>
                              <li><a href="research-and-development">Research and Development</a></li>
                              <li><a href="artificial-intelligence">Artificial Intelligence</a></li>
                              <li><a href="machine-learning">Machine Learning</a></li>
                           </ul>
                        </li>


                     </ul>
                  </li>

                  <li><a href="our-portfolio">Portfolio</a></li>

                  <li><a href="contact-us">Contact Us</a></li>
               </ul>

               <ul class="bottom-nav">
                  <li class="prb">
                     <a href="tel:+919910997039">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                           <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                              c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                              c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                              C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                              />
                        </svg>
                     </a>
                  </li>
                  <li class="prb">
                     <a href="mailto:info@komadtechnologies.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                           <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                           <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                     </a>
                  </li>
                  <li class="prb">
                     <a href="">
                        <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                           <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"/>
                        </svg>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>

      
      <div class="popup-modal1">
         <div class="modal wow fadeIn" id="menu-popup" >
            <div class="modal-dialog">
               <div class="modal-content wow zoomIn" data-wow-delay=".5s">
                  <div class="modal-header">
                     <div class="common-heading">
                        <h4 class="mt0 mb0">Write a Message</h4>
                     </div>
                     <button type="button" class="closes" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                     <div class="form-block fdgn2 mt10 mb10">
                        <form action="#" method="post" name="feedback-form">
                           <div class="fieldsets row">
                              <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                              <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                              <div class="col-md-12"><input type="number" placeholder="Contact Number" name="mobile"></div>
                              <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                              <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                           </div>
                           <div class="fieldsets mt20 pb20">
                              <button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>



	<section class="breadcrumb-area banner-6" data-background="http://www.komadtechnologies.com/images/inner_banner/contact_us_1.jpg">
		<div class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 v-center">
						<div class="bread-inner">
							<div class="bread-menu wow fadeInUp" data-wow-delay=".2s" >
								<ul>
									<li><a href="https://komadtechnologies.com/">Home</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
							<div class="bread-title wow fadeInUp" data-wow-delay=".5s" >
								<h1>Contact</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contact-page pad-tb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 v-center">
					<div class="common-heading text-l wow fadeIn" data-wow-delay=".3s" >
						<span>Contact Now</span>
						<h2 class="mt0 mb0">Have Question? Write a Message</h2>
						<p class="mb60 mt20">We will catch you as early as we receive the message</p>
					</div>

					<div class="form-block wow fadeInUp" data-wow-delay=".5s" >
						<form id="contact_form" method="POST" data-toggle="validator" class="shake">
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="name" id="name" placeholder="Enter Name" required data-error="Please fill out">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<input type="email" name="email"  id="email" placeholder="Enter Email" required>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="mobile" id="mobile" placeholder="Enter Mobile" required data-error="Please fill out">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<select name="forquery" id="for" required>
										<option value="">Select Requirement</option>
										<option value="sales">Sales</option>
										<option value="support">Support</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="form-group">
								<textarea id="message" name="message" rows="5" placeholder="Enter Your Message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>

							<button type="submit" id="form-submit" name="SubmitForm" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
				<div class="col-lg-5 v-center">
					<div class="contact-details">
						<div class="contact-card wow fadeIn" data-wow-delay=".3s" >
							<div class="info-card v-center">
								<span><i class="fas fa-phone-alt"></i> Phone</span>
								<div class="info-body">
									<p>Assistance hours: Monday – Saturday, 9:30 am to 6:30 pm</p>
									<a href="tel:+919910997039">+91 991 099 7039</a>
								</div>
							</div>
						</div>
						<div class="email-card mt30 wow fadeIn" data-wow-delay=".6s" >
							<div class="info-card v-center">
								<span><i class="fas fa-envelope"></i> Email</span>
								<div class="info-body">
									<p>Our support team will get back to you in 24hrs during standard business hours.</p>
									<a href="mailto:info@komadtechnologies.com">info@komadtechnologies.com</a>
								</div>
							</div>
						</div>
						<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s" >
							<div class="info-card v-center">
								<span><i class="fab fa-skype"></i> Skype</span>
								<div class="info-body">
									<p>We Are Online: Monday – Saturday, 9:30 am to 6:30 pm</p>
									<a href="">komadtechnologies</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-location fadeIn" data-wow-delay=".5s" >
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="map-div">
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
    <div class="footer-row2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-sm-6  ftr-brand-pp wow fadeInUp" data-wow-delay=".2s" >
                    <a class="navbar-brand mt30 mb25" href="#"> <img src="http://www.komadtechnologies.com/images/logo.svg" alt="Logo" width="100" /></a>
                    <p>Komad is the digital whirlwind that your company is going to be engulfed in, only to come out better and granter than before; and it all starts with a click, right here! </p>
                    <a href="contact-us" class="btn-main-small bg-btn3 lnk mt20">Join Us <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>

                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s" >
                    <h5>Contact Us</h5>
                    <ul class="footer-address-list ftr-details">
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <p>Email <span> <a href="mailto:info@komadtechnologies.com">info@komadtechnologies.com</a></span></p>
                        </li>

                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <p>Phone <span> <a href="tel:+919910997039">+91 991 099 7039</a></span></p>
                        </li>

                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Address <span> B-276, 2nd Floor, CR Park, Delhi, 110019</span></p>
                            
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".2s" >
                    <h5>Company</h5>
                    <ul class="footer-address-list link-hover">
                        <li><a href="career">Career</a></li>
                        <li><a href="privacy-policy">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions">Terms and Conditions</a></li>
                        <li><a href="refund-policy">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-row3 wow fadeInUp" data-wow-delay=".2s" >
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-social-media-icons">
                            <a href="https://www.facebook.com/Komadtech" target="blank" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/Komadtech" target="blank" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/komadtech/" target="blank" class="insta"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/komad-technologies-pvt-ltd" target="blank" class="inkedin"><i class="fab fa-linkedin"></i></a>
                            <a href="https://in.pinterest.com/komadtech/_created/" target="blank" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        </div>

                        <div class="footer-">
                            <p>Copyright &copy; 2021-2022 Komad Technologies. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/validator.min.js"></script>
	<script src="js/form.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script> 
	<script src="js/plugin.min.js"></script>
	<script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="function.js"></script>

   <?php
    }
?>
</body>
</html>

