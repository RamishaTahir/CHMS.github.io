<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Civil Hospital</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script>

</head>

<body>
    <!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Civil Hospital. </a>

    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="services.html">Services</a>
         <a href="treatment.html">Treatment</a>
        <a href="about us.html">About</a>
      
        <a href="contact us.html">Contact Us</a>
          <label class="searchbox .w-25" >
            <input type="text" class="searchtext" placeholder="Type to Search...">
            <button type="button"  class="searchbtn" style=" background-color: white;">
                <i class="fas fa-search fa-1x"></i>
            </button>

        </label>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<?php 
$data = $_GET['id'];

$conn = mysqli_connect("localhost","root","","doctor_appointment") or die("connection failed");
 $query = "SELECT * FROM doctor_table where doctor_id = {$data}" ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{





while($row = mysqli_fetch_assoc($result))
{
   
?>

<!-- header section ends -->
    <div class="container-fluid overcover">
        <div class="container profile-box ">
            <div class="row">

                <div class="col-lg-12 col-md-12 leftgh">

                       <div class="col-lg-2 col-md-2 mx-auto d-block">
                    <div class="image-box">

                        <img src="<?php echo $row['doctor_profile_image']?>"  alt="">
                    </div>
                </div>
                 

                    <div class="name-info">
                        <h1>
<?php echo $row['doctor_name']?></h1>
                        
                        <div class="row no-margin">
                            <div class="col-12 no-padding">
                                <?php  echo $row['doctor_expert_in']?> 
                            </div>
                           
                           
                            
                        </div>
                        
                    </div>

                    <div class="profile">
                        <h2>About </h2>
                         <ul style="line-height: 42px;">
                            <?php $str =  $row['doc_about']?>
                            <li><?php  echo wordwrap($str,190,"<br>\n");  ?>

                            </li>
                            <!-- <li><b>*</b>MBBS, FCPS, Fellow Ship in interventional Cardiology

Satellite Town, Sargodha  PMC Verified

                            </li>
                            <li><b>*</b>Worked with DHQ Hospital Sargodha
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 no-padding">
                    <div class="rit-data">
                        <h2>Education & Appointment</h2>
                        <ul>
                            <?php $edu =  $row['doc_edu']?> 
                            <li>

   <?php  echo wordwrap($edu,190,"<br>\n");  ?>

                            </li>
                            
                            
                        </ul>
                    </div>
                    <div class="rit-data">
                         <div class="container col-sm-8">
        <div class="accordion" id="accordionSection">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Academic Awards & Distinctions <span class="fas fa-chevron-down"></span></button>
                </h2>

                <div class="accordion-collapse collapse" id="collapseOne" data-bs-parent="#accordionSection">
                    <div class="accordion-body">
                         <ul>
                            
                            <li>

   <?php echo $row['doc_award']?>

</li>
                        </ul>
                    </div>
                </div>

            </div>
           
        </div>
    </div>
                        
                       
                    </div>


                           <div class="rit-data referencess">

                    <div class="container col-sm-8">
        <div class="accordion" id="accordionSection">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Speciality Interest<span class="fas fa-chevron-down"></span> </button>
                </h2>

                <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionSection">
                    <div class="accordion-body">
                        <ul>
                                                            <?php $int = $row['doc_interest']?>

                            <li>

                                   <?php   echo wordwrap($int,27,"<br>\n");  ?>

  
    


                            </li>
                             <!-- <li>    <b>*</b>Pericarditis

                                
                            </li>
                            <li> <b>*</b>Cyanotic Heart Disease
                            </li> -->
                            
                        </ul>
                    </div>
                </div>

            </div>
           
        </div>
    </div>
                   
                       
                        
                    </div>
                    <div class="rit-data">
                                 <div class="container col-sm-8">
        <div class="accordion" id="accordionSection">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Timing Schedule <span class="fas fa-chevron-down"></span>  </button>

                </h2>

                <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionSection">
                    <div class="accordion-body">
                        <?php
                         $quer = "SELECT * FROM doctor_schedule_table   where doctor_id = {$data} ORDER BY doctor_schedule_day ASC"   ;
                        $res = mysqli_query($conn,$quer) or die("query failed");
     if(mysqli_num_rows($res)>0)
{






   
?>
                        <ul>
                            <?php
                            while($roww = mysqli_fetch_assoc($res))
{ ?>
                            <li ><?php echo  $roww['doctor_schedule_day'] ?><span><?php echo  $roww['doctor_schedule_start_time'] ?>  - <?php echo  $roww['doctor_schedule_end_time'] ?></span></li>
                          
                             <?php } ?>
 <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>
           
        </div>
    </div>
                       
                        

                    </div>

                  
                </div>
            </div>
        </div>
    </div>


                
    
 
  <?php } ?>
  <?php } ?>             
    


    <!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
                <h3>Quick links</h3>     
            <a href="index.html"> <i class="fas fa-chevron-right"></i> Home </a>
            <a href="services.html"> <i class="fas fa-chevron-right"></i> Services </a>
                 <a href="treatment.html"> <i class="fas fa-chevron-right"></i> Treatment </a>
            <a href="about us.html"> <i class="fas fa-chevron-right"></i> About </a>
            <a href="contact us.html"> <i class="fas fa-chevron-right"></i> Contact Us </a>
        </div>

        <div class="box">
            <h3>Our Treatments</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Pulmonology</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Cardiology </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Orthopedic </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Kidney transplant </a>
            
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

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>

