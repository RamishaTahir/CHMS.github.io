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
    <div class="container-fluid">
    <div class="row ">
      <form class="col-lg-12 md-6   ">
  <div id="iconn" style="text-align:center;" >  <i class="fas fa-heartbeat">Institute of Heart and Vascular Sciences </i></div>
<span id="h11">
   </span>
   
    	           
	
</form>
</div>
</div>

 <div class="container">
            <div class="row">
                <div class="lg-12 sm-4">


	<div id="child">
        <h2>Overview</h2>
       
<p style="text-align:justify;">The Institute of Heart and Vascular Sciences provides round-the-clock, comprehensive Diagnostic and Therapeutic Cardiology services, according to evidence based protocols set as per internationally accepted guidelines. Our casualty services are available round-the-clock for diagnosis and early management of Cardiological emergencies like Status Angina, Heart attack , Cholesterol, Rheumatic Heart Disease, other Cardioinfectious diseases.</p>
<ul>
  <p>The Institute Houses Four Departments: </p>
  <li> Institute of Heart and Vascular Sciences</li>
  <li>Department of cardiosurgery</li>
  <li>Rehabilitation Services and Behavioural Sciences</li>
  <li>Department of Cardiological Care</li>
</ul>
<br><br>


</div>
</div>
<h2>Institute of Heart and Vascular Sciences</h2><br>
<p style="font-size: 15px; text-align:justify;">
  
 Cardiosurgery deals with diseases of heart defects, congenital heart disease, pulmonary heart failure, and coronary artery diseases. If these are not diagnosed and treated properly and timely, they may result in severe disability and even death. We at Institute of Heart and Vascular Sciences , have a team of dedicated, highly qualified and experienced Cardiosurgeons, Cardioanaesthetists, Intensive Care Specialists and other technical support staff. The department has all the latest equipment for successfully carrying out Cardiosurgical operations 
 Hospitals are equipped with state of the art Cath Labs, operation theatres, and several other heart care technologies.</p>
 <br>
<ul>
  <h3>Services:</h3>
  <li>Management and treatment </li>
  <li>Diagnosis and management of various Seizure Disorders and Refractory</li>
  <li>Epilepsies</li>
  <li>Management of Neuromuscular Disorders, Peripheral Neuropathies, Headaches and Chronic Pains Neuro Rehabilitation including Physiotherapy and Occupational Therapy for all kinds of Neuromuscular and Post-Stroke cases ·</li>
</ul>
 
<br>

<h2> Department of cardiosurgery</h2><br>

<p style="font-size: 15px;text-align:justify;">Cardiosurgery deals with diseases of heart defects, congenital heart disease, pulmonary heart failure, and coronary artery diseases. If these are not diagnosed and treated properly and timely, they may result in severe disability and even death. We at Institute of Heart and Vascular Sciences , have a team of dedicated, highly qualified and experienced Cardiosurgeons, Cardioanaesthetists, Intensive Care Specialists and other technical support staff. The department has all the latest equipment for successfully carrying out Cardiosurgical operations </p>
<br>
<ul>
  <h3>Services:</h3>
  <li>Head and Spinal Trauma </li>
  <li>Micro Surgical Excision of Brain Tumours </li>
  <li>Trans Sphenoidal Endoscopic/Microscopic Pituitary Surgery </li>
  <li>Key Hole Surgery </li>
  <li>Endoscopic Cranial Surgery </li>
  <li>Micro Discectomy of Cervical and Lumbar Disc </li>
  <li>Minimally Invasive Spinal Surgery for Spondylolisthesis</li>
  <li>Peripheral Nerve Injury Surgery and Carpal Tunnel Syndrome Surgery</li>
</ul>
<div class="container">
    <div class="row  ">

<div class=" Spondylitis d-flex bd-highlight justify-content-center align-item-center ">
  <div class="p-2 w-50 bd-highlight">




<h2>Department of Cardiological Care</h2><br>

<p style="font-size: 15px;text-align:justify;">The Department of Cardiological Care, promises to provide a solution to most of the complicated Heart diseases in a minimally invasive way. The team is enriched with specialists skilled to do delicate and high precision procedures through the intra-arterial/intravenous route, providing no trauma, fast recovery, and minimal post surgery complications.  Department of Interventional Cardiology, we ensure deliverance of international class patient centric service. Where ethics and morality are the guiding principles on which the foundation of the department is laid.Our hospitals are equipped with state of the art Cath Labs, operation theatres, and several other heart care technologies.


<!-- </div>
 --></div>
<div class="p-2 w-50 bd-highlight">
   
      <iframe width="416" height="211" style="margin-top: 30px; margin-left: 20px;" src="https://www.youtube.com/embed/YY-VWsW299Y?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

</div>
</div>

</div>
</div>





 

<?php
include('search.php');
?>






</div>

<div style="width: 99%; height: 7rem ; background-color:#f5f5f5;">
<h1 style="text-align: center; font-size: 40px;margin-top: 80px;margin-bottom: 50px"> Our Experts</h1>
</div>

      <article id="a">
      <div class="searchBox">
            
          <div class="search-box">
    <button class="btn-search"><i class="fas fa-search"></i></button>
    <input type="text" class="input-search" placeholder="Type to Search..." autocomplete="off" id="input">
  </div>


            
     <br>
     
      <ul class="dropdown" id="dropdown"></ul>
        </div>
    </article>

<!--<div id="searchresult"></div>  -->
<?php 

$conn = mysqli_connect("localhost","root","","doctor_appointment") or die("connection failed");
 $query = "SELECT * FROM doctor_table Limit 6" ;
 $result = mysqli_query($conn,$query) or die("query failed");
     if(mysqli_num_rows($result)>0)
{


?>

<article id="a">
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


      <?php } ?>
 <!-- footer section starts  -->

<?php
include('footer1.php');
?>

<!-- footer section ends -->
</body>
</html>