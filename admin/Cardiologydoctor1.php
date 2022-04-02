<?php
    

    include('header1.php');
?>
         <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

        <link rel="stylesheet" href="../css/orhto.css">
  
    
    

<?php 
$data = $_GET['id'];
if($data == null)
 {
header("Location: home.php");
exit();
 }


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
        <div class="container profile-box " style="margin-top: 270px;">
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
                            <div class="col-12 no-padding" style="font-size: 17px;">
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
    <?php
include('search.php');
?>
<?php 
include('footer1.php');
?>

<!-- footer section ends -->

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>

