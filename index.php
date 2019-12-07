<?php include 'header.php'; ?>

			<div id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
				<div class="item">
					<img src="media/main-slider/1.jpg" alt="Img">
					<div class="container-fluid">
						<div class="slider-content col-md-6 col-lg-6">
							<div style="display:table;">
								<div style="display:table-cell; width:100px; vertical-align:top;">
									<a class="prev"><i class="fa fa-angle-left"></i></a>
									<a class="next"><i class="fa fa-angle-right"></i></a>
								</div>
								<div style="display:table-cell;">
									<h1>LARGE NUMBER OF FREIGHT WAYS MAKES US POWERFUL</h1>
								</div>
							</div>
							<p>FedEx-USA has a very large number of freight at it disposal and for this reason alone, we provide the best services. We are fast and reliable, secure and consistent<br><a class="btn btn-success" href="services.php">LEARN MORE</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="media/main-slider/2.jpg" alt="Img">
					<div class="container-fluid">
						<div class="slider-content col-md-6 col-lg-6">
							<div style="display:table;">
								<div style="display:table-cell; width:100px; vertical-align:top;">
									<a class="prev"><i class="fa fa-angle-left"></i></a>
									<a class="next"><i class="fa fa-angle-right"></i></a>
								</div>
								<div style="display:table-cell;">
									<h1>WE GOT THE TEAM TAKING CARE OF YOUR PACKAGE</h1>
								</div>
							</div>
							<p>We have a very large number of man power on our side, the proccessing and delivery of packages and parcels is very easy, fast and discrete<br><a class="btn btn-success" href="services.php">LEARN MORE</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row">
					<div class="col-sm-5 col-md-5 col-lg-5 welcome-text wow fadeInLeft" data-wow-delay="3.3s">
						<h1>welcome to  FedEx-<strong style="color: #a91605">USA</strong></h1>
						<p>We strongly believe that pursuing all of these goals is in our interest and in the interest of all our stakeholders: customers, employees, investors and the planet as a whole. We add value to people’s interaction with us, whether with excellent services or products, by engaging our employees and nurturing their talents. And, we show concern for our world and our communities with our various corporate responsibility programs under the motto of ‘Living responsibility’.</p>
						<p>We are your best friend when it comes to package transportation and delivery, FedEx-USA is the best company you can relly on if you buy online and you need a delivery service or if you are a business man and you need a reliable transport company to bring you goods to you. We also have warehouse services that can hold you goods untill you are ready to take.</p>
						<a href="about.php" class="btn btn-sm btn-success">READ MORE</a>
					</div>
					<div class="col-sm-7 col-md-7 col-lg-7 wow fadeInRight" data-wow-delay="3.3s">
						<div class="quote-form">
							<div class="hgroup">
								<h1 class="color-1">GET A FREE QUOTE</h1>
								<h2>we always use best & fastest fleets</h2>
															<?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
	date_default_timezone_set('Etc/UTC');
	require 'autoload.php';
    //Create a new PHPMailer instance
	$mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
	$mail->isSMTP();
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "cornellekacy4@gmail.com";
//Password to use for SMTP authentication
	$mail->Password = "cornellekacy456";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
	$mail->setFrom('from@example.com', 'Site Contact');
    //Send the message to yourself, or whoever should receive contact for submissions
	$mail->addAddress('cornellekacy4@gmail.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
	if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
		$mail->Subject = 'Fedexs USA Contact';
        //Keep it simple - don't use HTML
		$mail->isHTML(false);
        //Build a simple message body
		$mail->Body = <<<EOT
		Full Name: {$_POST['name']}
		Email: {$_POST['email']}
		Destination From: {$_POST['from']}
		Destination To: {$_POST['to']}
		Phone Number: {$_POST['phone']}
		Subject: {$_POST['subject']}
		Message: {$_POST['message']}
		EOT;
        //Send the message, check for errors
		if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
			$msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
		} else {
			echo "<div class='alert alert-success'>
			<strong>Sent!</strong> Qoute successfully Created, we will get back to you soon.
			</div>";
		}
	} else {
		$msg = 'Invalid email address, message ignored.';
	}
}
?>
							</div>
							<div class="row">
								<div id="success"></div>
								<form novalidate method="post" id="contactForm" class="reply-form">
									<div class="col-xs-6">
										<input type="text" class="form-control" name="user-name" id="name" placeholder="FULL Name">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="user-email" id="email" placeholder="Email Address">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="from" id="user-lastname" placeholder="Destination From">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="to" placeholder="Destination To">
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" name="subject" id="user-subject" placeholder="Subject">
										<input type="text" class="form-control" name="phone" id="user-phone" placeholder="PHONE No.">
									</div>
									<div class="col-xs-6">
										<textarea  id="user-message" name="message" class="form-control" placeholder="COMMENTS"></textarea>
									</div>
									<div class="col-xs-6 col-xs-offset-6">
										<button type="submit" class="btn btn-danger">SEND ME QUOTE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="block-content inner-offset">
				<div class="info-texts wow fadeIn" data-wow-delay="0.3s">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>We have wide network of offices in all major locations to help you with the services we offer</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>With the help of our worldwide partners we are providing specialized services in Logistics solutions to our satisfied customers</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>We provides comprehensive cargo care, cargo movement & project management</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row column-info">
					<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay="0.3s">
						<img src="media/3-column-info/1.jpg" alt="Img">
						<span></span>
						<h3>ROAD FREIGHT<</h3>
						<p>For medium-to-large transportation programs, FedEx-USA Supply Chain Solutions can design a transportation management solution that offers enhanced business performance with competitive freight rates and reduced administrative expenses. We can help you make your transportation program more cost-effective and easier to manage. Benefits include an automated, online rating and routing tool, expert carrier relations and contract management, shipment visibility, and management reporting.</p>
						<a class="btn btn-default btn-sm" href="services.php">READ MORE</a>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
						<img src="media/3-column-info/2.jpg" alt="Img">
						<span></span>
						<h3>AIR FREIGHT</h3>
						<p>Airfreight is fast-moving, challenging and constantly changing – it’s the nature of the business. Around the globe capacity and demand can change in the blink of an eye so it’s essential to have a partner who provides stability and reliability to maintain your supply chain’s total integrity. Whether your shipments fly in the bellies of commercial planes or require specialist freighter aircraft to move them, FedEx-USA can provide tailor-made solutions for your all your airfreight.</p>
						<a class="btn btn-default btn-sm" href="services.php">READ MORE</a>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="0.3s">
						<img src="media/3-column-info/3.jpg" alt="Img">
						<span></span>
						<h3>RAIL FREIGHT</h3>
						<p>Your company has a dilemma. You know that rail can provide a cost-effective way to ship your goods - but is it reliable? In today's business world, where any delay can spell disaster, FedEx-USA Supply Chain Solutions can provide a dependable, cost-effective rail option
Our trailer-on-flat-car service offers climate-controlled trailers for perishable products that need protection from the heat or cold, such as produce, flowers, poultry, beverages, and other non-hazardous materials. Your products will reach their destination on time while you reduce transportation costs.
Non-perishable or general freight can also be handled with seamless efficiency. As one of the largest rail customers, we have the experience necessary to establish the service controls and schedules so vital to your business.</p>
						<a class="btn btn-default btn-sm" href="services.php">READ MORE</a>
					</div>
				</div>
			</div>

			<div class="block-content bg-image parallax" style="background-image:url(media/bg/3.jpg);">
				<div class="container-fluid">
					<h1 class="wow fadeInLeft" data-wow-delay="0.3s">WE ARE DEDICATED TO PROVIDE THE BEST SERVICE <br> AT THE LOWEST POSSIBLE COST</h1>
					<a class="btn btn-success wow fadeInRightBig" data-wow-delay="0.3s" href="">READ MORE</a>
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="hgroup text-center wow zoomInUp" data-wow-delay="0.3s">
					<h1>OUR SERVICES</h1>
					<h2>We have wide network of offices in all major locations to help you with <br> the services we offer</h2>
				</div>
				<div class="row our-services styled">
					<div class="col-sm-6 wow zoomInLeft" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-boats4"></i></span>
							<h4>SEA FREIGHT</h4>
							<P>We have the fastest hipping vessels on the high seas. This assures that goods arrives on time</P>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInRight" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-flying"></i></span>
							<h4>AIR FREIGHT</h4>
							<p>We have the best cargo planes, there are not only fast but new, parcels always arrives on time</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInLeft" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-garage1"></i></span>
							<h4>WARE-HOUSING</h4>
							<p>For large and heavy goods, we have a very large warehouse for safe keeping and it is free for our clinets</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInRight" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-package7"></i></span>
							<h4>HOME DELIVERY</h4>
							<p>Fedexs also do home delivery for parcels and parkages. Make sure you give the right address when sending the parcel</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInLeft" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-railway1"></i></span>
							<h4>RAIL FREIGHT</h4>
							<p>We use the best rail services for inter-urban transportation of large and sensitive goods, just give us the good and relax.</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInRight" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-traffic-signal"></i></span>
							<h4>ROAD FREIGHT</h4>
							<p>Our buses are good and swift, transporting parkages has never been easier with FedEx-USA. We are very reliable</p>
						</a>
					</div>
				</div>
			</div>

			<hr>
			<div class="big-hr color-2 wow zoomInUp" data-wow-delay="0.3s">
				<div class="text-left" style="margin-right:40px;">
					<h2>WE PROVIDE FASTEST & AFFORDABLE CARGO SERVICES</h2>
					<p>FedEx-USA is fast, affordable, reliable and very safe. Trust us with you goods.</p>
				</div>
				<div><a class="btn btn-danger btn-lg" href="qoute.php">REQUEST A FREE QUOTE</a></div>
			</div>

			<div class="block-content blog-section">
				<div class="container-fluid">
					<div class="wow fadeInLeft" data-wow-delay="0.3s">
						<h1>LATEST NEWS</h1>
						<h2>READ our latest blog news</h2>
					</div>
					<a class="btn btn-success btn-sm pull-right read-all-news wow fadeInRight" data-wow-delay="0.3s" href="09_blog.html">READ ALL NEWS</a>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6 one-news wow fadeInLeft" data-wow-delay="0.3s">
							<div style="background-image:url(media/news-images/1.jpg);">
								<div>
									<a href="11_blog-details.html"><h3>Fedexs Usa has launch it new  cargo planes for the best services</h3></a>
									<small class="news-author">BY JOHNSON DEO</small>
									<small>JUN 29, 2015</small>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 two-news wow fadeInRight" data-wow-delay="0.3s">
							<div class="news-item row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div style="background-image:url(media/news-images/2.jpg);"></div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div>
										<a href="11_blog-details.html"><h3>We also have the fastest trucks on the roads, we are ready to serve you</h3></a>
										<small class="news-author">BY JOHNSON DEO</small>
										<small>JUN 29, 2015</small>
									</div>
								</div>
							</div>
							<div class="news-item row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div style="background-image:url(media/news-images/3.jpg);"></div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div>
										<a href="11_blog-details.html"><h3>Our trains are just the best, we are happy to serve you.</h3></a>
										<small class="news-author">BY JOHNSON DEO</small>
										<small>JUN 29, 2015</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid partners block-content">
				<div class="title-space wow fadeInLeft" data-wow-delay="0.3s">
					<div class="hgroup">
						<h1>TRUSTED partners</h1>
						<h2>We have partner with some of the worlds best logistics service providers</h2>
					</div>
				</div>
				<div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="media/partners/1.png" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="media/partners/2.png" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="media/partners/3.png" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="media/partners/4.png" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="media/partners/1.png" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="media/partners/2.png" alt="Img"></a></div>
				</div>
			</div>
			

			<?php include 'footer.php'; ?>