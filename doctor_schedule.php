<!doctype html>
<html lang="en">
	
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Appointment</title>

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

	     <!-- Custom styles for this page -->
    	<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    	    	<link href="    	https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">



	  

	     <!-- Custom styles for this page -->
    	<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    	    	<link href="    	https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

	
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
		
	    <div class="container-fluid" style="font-size: 16px; padding-top: 16%;">
	    	<br />
	    
	    	<br />		      	<div class="card">
		      		<form method="post" action="result.php">
			      		<div class="card-header text-center"><h3><b>Doctor Schedule List</b></h3></div>
			      		<div class="card-body">
		      				<div class="table-responsive">
		      					<table class="table table-striped table-bordered">
		      						<tr>
		      							<th>Doctor Name</th>
		      							<th>Education</th>
		      							<th>Speciality</th>
		      							<th>Appointment Date</th>
		      							<th>Appointment Day</th>
		      							<th>Available Time</th>
		      							<th>Action</th>
		      						</tr>
		      						
		      							<tr>
		      								<td>Dr Aimen Zia</td>
		      								<td>MBBS</td>
		      								<td>Sergen</td>
		      								<td>2022-01-28</td>
		      								<td>Friday</td>
		      								<td>15:02 - 16:01</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-lg get_appointment" data-id="529">Get Appointment</button></td>
		      							</tr>
		      							
		      							<tr>
		      								<td>Dr. Zainullah Khan</td>
		      								<td>MBBS MS</td>
		      								<td>Sergen</td>
		      								<td>2022-01-29</td>
		      								<td>Saturday</td>
		      								<td>09:01 - 12:51</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-lg get_appointment" data-id="516">Get Appointment</button></td>
		      							</tr>
		      							
		      							<tr>
		      								<td>Dr. Umer Arshed</td>
		      								<td>MBBS MS</td>
		      								<td>Sergen</td>
		      								<td>2022-01-31</td>
		      								<td>Monday</td>
		      								<td>11:35 - 11:35</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-lg get_appointment" data-id="526">Get Appointment</button></td>
		      							</tr>
		      							
		      							<tr>
		      								<td>Dr. Iqra Anwar</td>
		      								<td>MBBS MS</td>
		      								<td>Sergen</td>
		      								<td>2022-02-01</td>
		      								<td>Tuesday</td>
		      								<td>08:00 - 17:00</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-lg get_appointment" data-id="519">Get Appointment</button></td>
		      							</tr>
		      							
		      							<tr>
		      								<td>Dr. Adnan Tariq</td>
		      								<td>MBBS MS</td>
		      								<td>Sergen</td>
		      								<td>2022-02-24</td>
		      								<td>Thursday</td>
		      								<td>19:15 - 19:40</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-lg get_appointment" data-id="514">Get Appointment</button></td>
		      							</tr>
		      							
		      							<tr>
		      								<td>Dr, M Ibrahim</td>
		      								<td>online </td>
		      								<td>Open Books when in Operation</td>
		      								<td>2022-04-30</td>
		      								<td>Saturday</td>
		      								<td>15:30 - 20:30</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-lg get_appointment" data-id="376">Get Appointment</button></td>
		      							</tr>
		      							
		      							<tr>
		      								<td>Dr. faisal</td>
		      								<td>MBBS MS</td>
		      								<td>Sergen</td>
		      								<td>2022-06-09</td>
		      								<td>Thursday</td>
		      								<td>09:00 - 12:52</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-lg get_appointment" data-id="513">Get Appointment</button></td>
		      							</tr>
		      									      					</table>
		      				</div>
		      			</div>
		      		</form>
		      	</div>
		    

			
	    </div>
		

<footer>
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
</footer>
	</body>
</html>
<script>

$(document).ready(function(){
	$(document).on('click', '.get_appointment', function(){
		var action = 'check_login';
		var doctor_schedule_id = $(this).data('id');
		$.ajax({
			url:"../action.php",
			method:"POST",
			data:{action:action, doctor_schedule_id:doctor_schedule_id},
			success:function(data)
			{
				window.location.href=data;
			}
		})
	});
});

</script>
