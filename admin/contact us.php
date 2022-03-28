<?php
    

    include('header1.php');
?>
    <title>Contact Us</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="../css/sty.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script> -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/orhto.css">


     <link rel="stylesheet" type="text/css" href="assets/parsley/parsley.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"> </script>
  <script type="text/javascript" src="assets/parsley/dist/parsley.min.js"></script>

    <!-- header section starts  -->



<!-- header section ends -->

    <section class="contact" style="background-color: #16a085; margin-top: 230px; margin-right: 9px;">
           <div class="content">
               <h2>Contact Us</h2>
                   <p>
                       Hey! we are here to provide you help regarding the issues you are facing .
                   </p>
           </div>
           <div class="container">
               <div class="contactInfo">
                 <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                           <div class="text">
                               <h3>Address</h3>
                               <p>Khushab Road Sargodha - District Head Quarters<br> Punjab</p>
                           </div>
                 </div>
                   <div class="box">
                     <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>(048)9230764</p>
                        </div>
                   </div>
                   <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>dhq_teaching@yahoo.com</p>
                        </div>
                  </div> 


              </div>
                <div class="contactForm lg-4 sm-12" >
                    <section class="book" id="book" >

    <h1 class="heading"> <span>Contact Us</span> now </h1>    

    <div class="row" >

        <div class="image">
            <img src="../img/home-img.svg" alt="">
        </div>

        <form action="">
            <h3>Write Message</h3>
            
            <div class="form-group ">
                            <label style="font-size: 18px;">Patient Email Address<span class="text-danger">*</span></label>
                            <input type="text" name="patient_email_address" id="patient_email_address" class="form-control input-lg" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" style="height:40px;font-size: 16px;" />
                        </div>
                        <div class="form-group">
                            <label style="font-size: 18px;">Patient Complete Address<span class="text-danger">*</span></label>
                            <textarea name="patient_address" id="patient_address" class="form-control" required data-parsley-trigger="keyup"  style="height:80px;font-size: 16px;"></textarea>
                        </div>
            <input type="submit" value="Submit" class="btn">
        </form>

    </div>

</section>
                </div>
              
           </div>

    </section>

<?php
include('search.php');
?>    

    <!-- footer section starts  -->
<?php
include('footer1.php');
?>

<!-- footer section ends -->
<script src="js/script.js"></script>


</body>
</html>