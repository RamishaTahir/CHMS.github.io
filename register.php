<!doctype html>
<html lang="en">
		<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Register</title>

	    <!-- Custom styles for this page -->
	    <link rel="stylesheet" type="text/css" href="../css/loginp.css">

	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        >
        <link rel="stylesheet" type="text/css" href="assets/parsley/parsley.css"/>

	    <link rel="stylesheet" type="text/css" href="assets/datepicker/bootstrap-datepicker.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script>
  <script type="text/javascript" src="assets/parsley/dist/parsley.min.js"></script>

	    <script type="text/javascript" src="assets/datepicker/bootstrap-datepicker.js"></script>

	   
	

	    
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
<div style="background-color: #f5f5f5;">
	    <div class="container-fluid" style="width:90%; ">
	    	
	    	
<div class="container">
	<div class="row justify-content-md-center" style="padding-top: 20%;">
		<div class="col col-md-6">
			<span id="message"></span>
			<div class="card"  >
				<div class="card-header text-center " style="font-size: large;" ><h2>Register</h2></div>
				<div class="card-body">
					<form method="post" id="patient_register_form">
						<div class="form-group ">
							<label>Patient Email Address<span class="text-danger">*</span></label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control input-lg" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" style="height:40px;font-size: 16px;" />
						</div>
						<div class="form-group">
							<label>Patient Password<span class="text-danger">*</span></label>
							<input type="password" name="patient_password" id="patient_password" class="form-control input-lg" required  data-parsley-trigger="keyup"  style="height:40px;font-size: 16px;"/>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient First Name<span class="text-danger">*</span></label>
									<input type="text" name="patient_first_name" id="patient_first_name" class="form-control" required  data-parsley-trigger="keyup" style="height:40px;font-size: 16px;" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Last Name<span class="text-danger">*</span></label>
									<input type="text" name="patient_last_name" id="patient_last_name" class="form-control" required  data-parsley-trigger="keyup"  style="height:40px;font-size: 16px;" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Date of Birth<span class="text-danger">*</span></label>
									<input type="text" name="patient_date_of_birth" id="patient_date_of_birth" class="form-control" required  data-parsley-trigger="keyup" readonly  style="height:40px;font-size: 16px;"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Gender<span class="text-danger">*</span></label>
									<select name="patient_gender" id="patient_gender" class="form-control"  style="height:40px;font-size: 16px;">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Contact No.<span class="text-danger">*</span></label>
									<input type="text" name="patient_phone_no" id="patient_phone_no" class="form-control" required  data-parsley-trigger="keyup"  style="height:40px;font-size: 16px;" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Maritial Status<span class="text-danger">*</span></label>
									<select name="patient_maritial_status" id="patient_maritial_status" class="form-control"  style="height:40px;font-size: 16px;">
										<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Seperated">Seperated</option>
										<option value="Divorced">Divorced</option>
										<option value="Widowed">Widowed</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Patient Complete Address<span class="text-danger">*</span></label>
							<textarea name="patient_address" id="patient_address" class="form-control" required data-parsley-trigger="keyup"  style="height:80px;font-size: 16px;"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="hidden" name="action" value="patient_register" />
							<input type="submit" name="patient_register_button" id="patient_register_button" class="btn  btn-block btn-lg" value="Register" />
						</div>

						<div class="form-group text-center">
							<p><a href="login.php" style="color: black;">Login</a></p>
						</div>
					</form>
				</div>
			</div>
			<br />
			<br />
		</div>
	</div>
</div>

			
	    </div>
		
</div>
	    <!-- footer section starts  -->

<section class="footer" style="padding-top: 15rem;" >

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

	$('#patient_date_of_birth').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });

	$('#patient_register_form').parsley();

	$('#patient_register_form').on('submit', function(event){

		event.preventDefault();

		if($('#patient_register_form').parsley().isValid())
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:$(this).serialize(),
				dataType:'json',
				beforeSend:function(){
					$('#patient_register_button').attr('disabled', 'disabled');
				},
				success:function(data)
				{
					$('#patient_register_button').attr('disabled', false);
					$('#patient_register_form')[0].reset();
					if(data.error !== '')
					{
						$('#message').html(data.error);
					}
					if(data.success != '')
					{
						$('#message').html(data.success);
					}
				}
			});
		}

	});

});

</script>