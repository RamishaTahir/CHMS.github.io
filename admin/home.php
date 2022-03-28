<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Hospital Managemnet </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/home.css">
    


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script>
    <script src="../jquery.counterup.min.js"></script>
  
  <script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 100,
            time: 1000
        });
    });
  </script>


</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Civil Hospital. </a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="services.php">services</a>
         <a href="treatment.php">treatment</a>
        <a href="about us.html">about</a>
      
        <a href="contact us.php">Contact Us</a>
         
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="../img/home-img.svg" alt="">
    </div>
       

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>Your Health is Our First Priority</p>
        <a href="contact us.php" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->
<?php 
$conn = mysqli_connect("localhost","root","","doctor_appointment") or die("connection failed");
?>

<section class="icons-container">

    <div class="icons">
         <?php 

 $result = mysqli_query($conn,"SELECT COUNT(*) FROM doctor_table");
$row = mysqli_fetch_assoc($result);
$size = $row['COUNT(*)'];
     




   
{



?>
        <i class="fas fa-user-md"></i>
      
         <h3> <span class="counter" ><?php echo $size ?></span></h3>

        
       
        <p>Total doctors</p>
   
    
    </div>
    <?php } ?>
    

    <div class="icons">
        <i class="fas fa-users"></i>
          <?php 

 $result = mysqli_query($conn,"SELECT COUNT(*) FROM patient_table");
$row = mysqli_fetch_assoc($result);
$siz = $row['COUNT(*)'];
     




   
{



?>
         <h3> <span class="counter" ><?php echo $siz ?></span></h3>
        <p>Registered patients</p>
    </div>
     <?php } ?>




    <div class="icons">
        <i class="fas fa-procedures"></i>
         <?php 

 $result = mysqli_query($conn,"SELECT COUNT(*) FROM appointment_table where status LIKE 'Completed' ");
$row = mysqli_fetch_assoc($result);
$s = $row['COUNT(*)'];
     




   
{



?>
       <h3> <span class="counter" ><?php echo $s ?></span></h3>
        <p>Completed Appointment</p>
    </div>
         <?php } ?>
   

    <div class="icons">
        <i class="fas fa-hospital"></i>
          <?php 

 $result = mysqli_query($conn,"SELECT COUNT(*) FROM doctor_table where doctor_status LIKE 'Active'");
$row = mysqli_fetch_assoc($result);
$si = $row['COUNT(*)'];
     




   
{



?>
        <h3> <span class="counter" ><?php echo $si ?></span></h3>
        <p>Active Doctor</p>
    </div>
<?php } ?>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Appointment</h3>
            <p>We offer  patients the ability to book online Appointment Which reduce time from the staff</p>
            <a href="../index.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert doctors</h3>
            <p>Doctors examine the patients so that they can diagnose and treat the patients</p>
            <a href="#doctors" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicines</h3>
            <p>We aim of providing the quality pharmaceutical & health care products</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Treatments</h3>
            <p>We offer a range of treatment services to peoples</p>
            <a href="treatment.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Laboratory</h3>
            <p>We offer a range of Laboratory services to peoples</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="../img/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Civil Hospitalmanagement houses a unique portfolio of services that keep healthcare professionals abreast of the latest and most significant developments within their clinical, surgical or management area. Covering all aspects of the hospital environment.</p>
            <p>Civil hospitalmanagement provides both clinical and senior administrative staff with instant access to a comprehensive reference source introducing technologies, services and procedures our audience can employ to improve the management of their facilities.</p>
            <a href="about us.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- doctors section starts  -->



<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>
    <?php 

$conn = mysqli_connect("localhost","root","","doctor_appointment") or die("connection failed");
 $query = "SELECT * FROM doctor_table Limit 6" ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{


?>

    <div class="box-container">
 <?php 
while($row = mysqli_fetch_assoc($result))
{
?>
        <div class="box">
            
    
            <img src="<?php echo $row['doctor_profile_image'] ?>" alt="">
         <a href="Cardiologydoctor1.php?id=<?php echo $row['doctor_id']?>"> <h3><?php echo $row['doctor_name'] ?>"</h3> <a/>
            <span><?php echo $row['doctor_expert_in'] ?>"</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <?php  }?>

        <!-- <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>M Sharjeel</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>M Sharjeel</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>M Sharjeel</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>M Sharjeel</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>M Sharjeel</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div> -->

    </div>
<?php  }?>
</section>

<!-- doctors section ends -->





<!-- footer section starts  -->

<?php
include('footer1.php'); 
?>

<!-- footer section ends -->












<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>