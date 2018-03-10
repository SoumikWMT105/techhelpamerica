<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Contact Us - Tech Help America</title>
    <!--Favicons   -->
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">
        
    <!--CSS Files   -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700| Open+Sans:400,600,700,800| Raleway:400,500,600,700| Roboto:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700" rel="stylesheet">    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
    <!--Javascript Files   -->
    <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    
  <?php
    if(isset($_POST['name']))
    {
        $email = $_REQUEST['email'];
        $header = "From: ". $email;
        $subject = 'Enquiry from ' . $_REQUEST['name']
//                . '| Regarding ' . $_REQUEST['subject']
        ;
        $message = "Name : " . $_REQUEST['name']
            . "\r\nEmail : " . $_REQUEST['email']
            . "\r\nPhone : " . $_REQUEST['phone']
            . "\r\nSubject : " . $_REQUEST['subject']
            . ",\r\n Message...\r\n" . $_REQUEST['message'];
        $message = wordwrap($message, 70, "\r\n");
        mail("info@techhelpamerica.com", $subject, $message , $header);
        //mail("soumiksmarty147@gmail.com", $subject, $message , $header);

        echo "<script>alert('Mail Sent. Thank you for contacting us!'); window.location='index.html '; </script>";
    }
    ?>  
    
    
</head>
<body>

<div class="page_wrap">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="logo">                    
		    <a href="index.html">
			<img src="img/logo.png" class="img-responsive" />
		    </a>                   
                </div>                
                <nav class="navbar navbar-default">                    	
                    <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar">
			<ul id="menu-header-menu" class="nav navbar-nav">
			    <li><a href="index.html">Home</a></li>
			    <li><a href="about.html">About Us </a></li>
			    <li><a href="services.html">Services</a></li>
			    <li><a href="products.html">Products</a></li>
			    <li class="active"><a href="contact.php">Contact Us</a></li>
                        </ul> 
                    </div>
                </nav>
            </div>
        </div>
    </header> <!--Header-->
    
    <!--Page Title-->    
    <section class="page-title" style="background-image:url(img/banner11.jpg);">
    	<div class="container">
          <div class="title-con">
            <h2>Contact Us</h2>
          </div>          
        </div>
    </section><!--Page Title-->
    
    <!--Mid Container-->
    <section class="contact_con">
	<div class="">
	    <div class="row">
		<div class="col-md-8 col-md-offset-2">
		    <div class="contact_inner_box">
			<div class="address_b">
			    <h3>Get In Touch</h3>
			    <div class="ad_s">
				<h4>Address:</h4>
				<p><i class="fa fa-map-marker"></i> #19 RD 12 Cir House JSR India</p>
			    </div>
			    <div class="ad_s">
				<h4>Contact No:</h4>
				<p><i class="fa fa-phone"></i> +1 512 487 7453</p>
				<p><i class="fa fa-envelope"></i> <a href="mailto:info@techhelpamerica.com">info@techhelpamerica.com</a></p>
			    </div>			    
			</div>
			
			<div class="row">
			    <div class="col-sm-12">
				<div class="contact_from">
				    <form action="" method="post" name="contact" id="main_contact_form">
					<!-- Message Input Area Start -->
					<div class="contact_input_area">
					    <div id="success_fail_info"></div>
					    <div class="row">
						<!-- Single Input Area Start -->
						<div class="col-md-6">
						    <div class="form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="">
						    </div>
						</div>
						<!-- Single Input Area Start -->
						<div class="col-md-6">
						    <div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required="">
						    </div>
						</div>
						<!-- Single Input Area Start -->
						<div class="col-md-6">
						    <div class="form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" required="">
						    </div>
						</div>
						<!-- Single Input Area Start -->
						<div class="col-md-6">
						    <div class="form-group">
							<input type="number" class="form-control" name="phone" id="number" placeholder="Your Phone Number *" maxlength="10" required="">
						    </div>
						</div>
						<!-- Single Input Area Start -->
						<div class="col-sm-12">
						    <div class="form-group">
							<textarea class="form-control" name="message" id="message" cols="30" rows="8" placeholder="Your Message *" required=""></textarea>
						    </div>
						</div>
						<!-- Single Input Area Start -->
						<div class="col-sm-12">
						    <button type="submit" class="btn btn-md btn-primary btn-contct pull-right">Send Messege</button>
						</div>
					    </div>
					</div>
					<!-- Message Input Area End -->
				    </form>
				</div>
			    </div>
			</div>
		    
			
		    </div>
		    
		</div>
		<div class="col-sm-6">
		    
		</div>
		
	    </div>	    
	    
	    
	</div>
    </section><!--Mid Container-->

    
    
    
    <!--Footer-->
    <footer class="footer">
	<div class="container">
	    <div class="section_footer"  >
		<img src="img/logo.png" class="img-responsive" />
		<div class="">
		    <ul>
			<li><a href="index.html">Home</a> </li>|
			<li><a href="about.html">About Us</a></li>|
			<li><a href="services.html">Services</a></li>|
			<li><a href="products.html">Products</a></li>|
			<li><a href="contact.php">Contact Us</a></li>
		    </ul>
		    <div class="copyright">
			<p>techHelpAmerica &copy; 2018. All rights reserved.</p>
			<span>Designed & Developed By <a href="https://skyscrapersolutions.com" target="_blank" title="Skyscraper Solutions">Skyscraper Solutions</a></span>
		    </div>
		</div>		
	    </div>	    
	</div>	
    </footer><!--Footer-->
    
    
    
</div>

<script>
    $(document).ready(function() {
 
	
   
  });
</script>

</body>
</html>
