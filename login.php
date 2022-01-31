<!doctype html>
<html lang="en">
	<head>
		<script data-ad-client="ca-pub-4529508631166774" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Login</title>

	    <!-- Custom styles for this page -->
	    <link rel="stylesheet" type="text/css" href="../css/loginp.css">

	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script>

	   
	

	    
	    <style>
	    	.border-top { border-top: 1px solid #e5e5e5; }
			.border-bottom { border-bottom: 1px solid #e5e5e5; }

			.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
	    </style>
	</head>
	<body>
		<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Civil Hospital. </a>

    <nav class="navbar">
        <a href="index.html">home</a>
        <a href="services.html">services</a>
         <a href="treatment.html">treatment</a>
        <a href="about us.html">about</a>
      
        <a href="contact us.html">Contact Us</a>
          <label class="searchbox .w-25 pl-5" >
            <input type="text" class="searchtext" placeholder="Type to Search...">
            <button type="button"  class="searchbtn" style=" background-color: white;">
                <i class="fas fa-search fa-1x"></i>
            </button>

        </label>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
	    <div class="container-fluid">
	    	
	    	<br />
<div class="container">
	<div class="row justify-content-md-center" style="padding-top: 20%; padding-bottom: 120px; font-size: 16px;">
		<div class="col col-md-4">
						<span id="message"></span>
			<div class="card" style="height: 100%; ">
				<div class="card-header text-center" style="background-color: #f5f5f5;">Login</div>
				<div class="card-body">
					<form method="post" id="patient_login_form">
						<div class="form-group" style="padding-top: 12px;">
							<label>Patient Email Address</label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" style="height:40px" />
						</div>
						<div class="form-group" style="padding-top: 12px;">
							<label>Patient Password</label>
							<input type="password" name="patient_password" id="patient_password" class="form-control" required  data-parsley-trigger="keyup" style="height:40px" />
						</div>
						<div class="form-group text-center" style="padding-top: 22px;">
							<input type="hidden" name="action" value="patient_login" />
							<input type="submit" name="patient_login_button" id="patient_login_button" class="btn btn-lg btn-block " value="Login" style="font-size: 18px;" />
						</div>

						<div class="form-group text-center">
							<p><a href="register.php" style="color: black;">Register</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

			
	    </div>
		
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
                <h3>Quick links</h3>     
            <a href="index.html"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="services.html"> <i class="fas fa-chevron-right"></i> services </a>
                 <a href="treatment.html"> <i class="fas fa-chevron-right"></i> treatment </a>
            <a href="about us.html"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="contact us.html"> <i class="fas fa-chevron-right"></i> Contact Us </a>
        </div>

        <div class="box">
            <h3>our Treatments</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Pulmonology</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Orthopedic </a>
            
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> (048)9230764 </a>
            <a href="#"> <i class="fas fa-envelope"></i> dhq_teaching@yahoo.com </a>
           
            <a href="#"> <i class="fas fa-map-marker-alt"></i> khushab road ,sargodha Pakistan - 40100 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit">  | all rights reserved </div>

</section>

<!-- footer section ends -->

	</body>
</html>

<script>

$(document).ready(function(){

	$('#patient_login_form').parsley();

	$('#patient_login_form').on('submit', function(event){

		event.preventDefault();

		if($('#patient_login_form').parsley().isValid())
		{
			$.ajax({

				url:"action.php",
				method:"POST",
				data:$(this).serialize(),
				dataType:"json",
				beforeSend:function()
				{
					$('#patient_login_button').attr('disabled', 'disabled');
				},
				success:function(data)
				{
					$('#patient_login_button').attr('disabled', false);

					if(data.error != '')
					{
						$('#message').html(data.error);
					}
					else
					{
						window.location.href="dashboard.php";
					}
				}
			});
		}

	});

});



</script>