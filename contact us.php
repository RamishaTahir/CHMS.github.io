<?php
  $conn = mysqli_connect("localhost","root","","my_db");
  if(!$conn)
  {
      echo "Not Connected";
  }
//   else
//   {
//       echo "Connnected";
//   }
$insert=false;
$notinsert=false;
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $query="INSERT INTO `contact`( `name`, `email`, `msg`) VALUES ('$name','$email','$msg')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
       $insert=true;
    }
    else
    {
        $notinsert=true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="css/sty.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="php/contactdata.php" type="text/php">
</head>
<body>
    <!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Civil Hospital. </a>

    <nav class="navbar">
        <a href="index.html">home</a>
        <a href="services.html">services</a>
        <a href="about us.html">about</a>
      
        <a href="contact us.html">Contact Us</a>
         
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

    <section class="contact">
           <div class="content">
               <h2>Contact</h2>
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
                  </div> </div>

                <div class="contactForm">
                    <?php
                    if($insert)
                    {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data Inserted</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Not Inserted</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                    ?>
                    <form  action="" method="post">
                        <h2>Send Message</h2>
                        <span><h3 style="font-size:14px;">Full Name</h3></span>
                        <div class="inputBox">
                            
                            <input type="text" name="name" required="required"  placeholder="Enter the name">
                           
                        </div><br>
                        <span ><h3 style="font-size:14px;">Email</h3></span>
                        <div class="inputBox">
                            
                            <input type="text" name="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" placeholder="" >
                            
                        </div><br>
                        <span><h3 style="font-size:14px;">Type Your Message</h3></span>
                        <div class="inputBox">
                           
                            <textarea required="required" name="msg"  placeholder="Type your message"></textarea>
                           
                        </div><br>
                        <div class="inputBox">
                            <input type="submit" name="submit" value="Send" id="submit">
                        </div>
                    </form>
                </div>
              
           </div>

    </section>

    

    <!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
            <a href="index.html"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="services.html"> <i class="fas fa-chevron-right"></i> services </a>
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
    
</body>
</html>