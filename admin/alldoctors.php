<?php
    

    include('header1.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/orhto.css">
    <title>Orthopedic</title

    >
   



 

<?php
include('search.php');
?>






</div>






<!--<div id="searchresult"></div>  -->
<?php 

$conn = mysqli_connect("localhost","root","","doctor_appointment") or die("connection failed");
 $query = "SELECT * FROM doctor_table  where doctor_expert_in = 'Surgeon' order by rand() " ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{


?>

<article id="">
    <h2 style="text-align: center;">Surgeon</h2>

<div class="container " >


            <div class="row " >
                 <?php 
while($row = mysqli_fetch_assoc($result))
{
?>

                
                <div class="col-lg-4 col-md-6 col-sm-6">




<div class="card" style="width: 28rem; margin-left: 2rem;font-size: 15px;margin-top: 105px;">
        <div class="text-center"> 
          
 
             <img class="card-img-top rounded"   src="<?php echo $row['doctor_profile_image'] ?>" alt="Card image cap" style="width: 120px; height:130px"  >    
  

 <h3 style="width:40rem; margin-left: -60px "> <?php echo $row['doctor_degree']?></h3><br>
  <div class="card-body">
    <p class="card-text"><?php echo $row['doctor_expert_in']?> </p>
            <a href="Cardiologydoctor1.php?id=<?php echo $row['doctor_id']?>" class="btn"> Learn More  <span class="fas fa-chevron-right"></span> </a>

  </div>
</div>
</div>


</div>
<?php  }?>


</div>
</div>


      </article> 



   <?php } 

  else
    echo "data not found" ;?>



    







<?php 

 $query = "SELECT * FROM doctor_table  where doctor_expert_in = 'Cardiologist' order by rand() " ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{


?>

<article id="">
    <h2 style="text-align: center;">Cardiologist</h2>

<div class="container " >


            <div class="row " >
                 <?php 
while($row = mysqli_fetch_assoc($result))
{
?>

                
                <div class="col-lg-4 col-md-6 col-sm-6">




<div class="card" style="width: 28rem; margin-left: 2rem;font-size: 15px;margin-top: 105px;">
        <div class="text-center"> 
          
 
             <img class="card-img-top rounded"   src="<?php echo $row['doctor_profile_image'] ?>" alt="Card image cap" style="width: 120px; height:130px"  >    
  

 <h3 style="width:40rem; margin-left: -60px "> <?php echo $row['doctor_degree']?></h3><br>
  <div class="card-body">
    <p class="card-text"><?php echo $row['doctor_expert_in']?> </p>
            <a href="Cardiologydoctor1.php?id=<?php echo $row['doctor_id']?>" class="btn"> Learn More  <span class="fas fa-chevron-right"></span> </a>

  </div>
</div>
</div>


</div>
<?php  }?>


</div>
</div>


      </article> 



   <?php } 

  else
    echo "data not found" ;?>



    







<?php 

 $query = "SELECT * FROM doctor_table  where doctor_expert_in = 'Gynaecologist ' order by rand() " ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{


?>

<article id="">
    <h2 style="text-align: center;">Gynaecologist </h2>

<div class="container " >


            <div class="row " >
                 <?php 
while($row = mysqli_fetch_assoc($result))
{
?>

                
                <div class="col-lg-4 col-md-6 col-sm-6">




<div class="card" style="width: 28rem; margin-left: 2rem;font-size: 15px;margin-top: 105px;">
        <div class="text-center"> 
          
 
             <img class="card-img-top rounded"   src="<?php echo $row['doctor_profile_image'] ?>" alt="Card image cap" style="width: 120px; height:130px"  >    
  

 <h3 style="width:40rem; margin-left: -60px "> <?php echo $row['doctor_degree']?></h3><br>
  <div class="card-body">
    <p class="card-text"><?php echo $row['doctor_expert_in']?> </p>
            <a href="Cardiologydoctor1.php?id=<?php echo $row['doctor_id']?>" class="btn"> Learn More  <span class="fas fa-chevron-right"></span> </a>

  </div>
</div>
</div>


</div>
<?php  }?>


</div>
</div>


      </article> 



   <?php } 

  else
    echo "data not found" ;?>



    





 



<?php 

 $query = "SELECT * FROM doctor_table  where doctor_expert_in = 'Neurologist ' order by rand() " ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{


?>

<article id="">
    <h2 style="text-align: center;">Neurologist </h2>

<div class="container " >


            <div class="row " >
                 <?php 
while($row = mysqli_fetch_assoc($result))
{
?>

                
                <div class="col-lg-4 col-md-6 col-sm-6">




<div class="card" style="width: 28rem; margin-left: 2rem;font-size: 15px;margin-top: 105px;">
        <div class="text-center"> 
          
 
             <img class="card-img-top rounded"   src="<?php echo $row['doctor_profile_image'] ?>" alt="Card image cap" style="width: 120px; height:130px"  >    
  

 <h3 style="width:40rem; margin-left: -60px "> <?php echo $row['doctor_degree']?></h3><br>
  <div class="card-body">
    <p class="card-text"><?php echo $row['doctor_expert_in']?> </p>
            <a href="Cardiologydoctor1.php?id=<?php echo $row['doctor_id']?>" class="btn"> Learn More  <span class="fas fa-chevron-right"></span> </a>

  </div>
</div>
</div>


</div>
<?php  }?>


</div>
</div>


      </article> 



         <?php } 

  else
    echo "data not found" ;?>



    











<?php 

 $query = "SELECT * FROM doctor_table  where doctor_expert_in = 'General Physician  ' order by rand() " ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{


?>


<article id="">
    <h2 style="text-align: center;">General Physician </h2>

<div class="container " >


            <div class="row " >
                 <?php 
while($row = mysqli_fetch_assoc($result))
{
?>

                
                <div class="col-lg-4 col-md-6 col-sm-6">




<div class="card" style="width: 28rem; margin-left: 2rem;font-size: 15px;margin-top: 105px;">
        <div class="text-center"> 
          
 
             <img class="card-img-top rounded"   src="<?php echo $row['doctor_profile_image'] ?>" alt="Card image cap" style="width: 120px; height:130px"  >    
  

 <h3 style="width:40rem; margin-left: -60px "> <?php echo $row['doctor_degree']?></h3><br>
  <div class="card-body">
    <p class="card-text"><?php echo $row['doctor_expert_in']?> </p>
            <a href="Cardiologydoctor1.php?id=<?php echo $row['doctor_id']?>" class="btn"> Learn More  <span class="fas fa-chevron-right"></span> </a>

  </div>
</div>
</div>


</div>
<?php  }?>


</div>
</div>


      </article> 



       <?php } 

  else
    echo "data not found" ;?>



    
<?php
mysqli_close($conn);


?>
























 <!-- footer section starts  -->

<?php
include('footer1.php');
?>

<!-- footer section ends -->
</body>
</html>