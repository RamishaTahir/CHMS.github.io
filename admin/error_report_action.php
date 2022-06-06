<?php
$conn = mysqli_connect("localhost","root","","doctor_appointment") or die("connection failed");
  $data = $_REQUEST['idd'];
       
 echo $data;

// session_start();


   $query  = "DELETE from contact_us Where id = {$data} ";
    $result = mysqli_query($conn,$query);
header("location:error_report.php");   

?>