<?php
    

    include('header1.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="s384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/orhto.css">
    <title>Orthopedic</title

    >
    <div class="container-fluid">
    <div class="row ">
      <form class="col-lg-12 md-6   ">
  <div id="iconn" > <i class="fas fa-kidney">Institute of Musculoskeletal Science & Orthopaedics </i></h></div>
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
       
<p style="text-align:justify;">Kidneys are very versatile organs, and most people can manage perfectly well with only 15% kidney function. However, in the case of complete kidney failure, our kidneys are no longer able to excrete the toxic waste products into the urine. The constant ratios of the waste products in the bloodstream increases and we become ill. There are two types of kidney failure. In acute kidney failure, which can occur because of a sudden trauma to the kidneys, the kidneys may stop working for a short while and then partly or wholly recover. Chronic renal failure is a progressive condition where the kidneys become irreversibly damaged over a long period, often many years. This condition can develop because of an infection, diabetes, hypertension, or inherited abnormalities. Advanced chronic renal failure is known as end-stage renal disease, where your kidneys are no longer able to function.</p>
<ul>
  <p>Symptoms of Kidney Failure </p>
  <li> Itching</li>
  <li>Nausea, vomiting, pigmentation and easy bruising</li>
  <li>Reduced sexual function</li>
  <li>Abnormal build-up of fluid in the ankles and legs</li>
  <li> Chest pain</li>
  <li> Breathlessness</li>
  <li> Cramps and twisting</li>
</ul>
<br>
<p style="text-align:justify;">When your kidneys are no longer working properly, there are treatments such as hemodialysis and peritoneal dialysis which can filter the waste products from your body. However, dialysis does not perform many of the other vital functions such as stimulating the production of red blood cells. In this case, only a kidney transplant can work. </p>
<br><br>

<h2> Dietary Management</h2><br>
<p  style="text-align:justify;">
  Five main constituents of the diet have to be included while planning the diet for a patient with chronic renal failure. These are fluid (water), protein, sodium, potassium (salts), and phosphorus.</p>
 
<br>
<h2> Physiotherapy</h2><br>

<p  style="text-align:justify;"> The goals of physiotherapy for organ transplant patients are to: Minimize post-operative pulmonary <br>complications; Minimize the deconditioning effects of bed rest; Increase general<br> strength, endurance and flexibility; Develop and reinforce a habit of regular exercise.</p>

<br>
<p  style="text-align:justify;">When your kidneys are no longer working properly, there are treatments such as hemodialysis and peritoneal dialysis which can filter the waste products from your body. However, dialysis does not perform many of the other vital functions such as stimulating the production of red blood cells. In this case, only a kidney transplant can work. </p>
</div>
</div>
<h2>Dietray Management</h2><br>
<p style="font-size: 15px; text-align: justify;">
  
  Five main constituents of the diet have to be included while planning the diet for a patient with chronic renal failure. These are fluid (water), protein, sodium, potassium (salts), and phosphorus.</p>
 
<br>
<div class="container">
    <div class="row  ">

<div class=" Spondylitis d-flex bd-highlight justify-content-center align-item-center ">
  <div class="p-2 w-50 bd-highlight">




<h2> Physiotherapy</h2><br>

 <p style="font-size:14px;text-align: justify;"> The goals of physiotherapy for organ transplant patients are to: Minimise post-operative pulmonary complications; Minimise the deconditioning effects of bed rest; Increase general strength, endurance and flexibility; Develop and reinforce a habit of regular exercise.</p>


<!-- </div>
 --></div>
<div class="p-2 w-50 bd-highlight">
   
      <iframe 
     width="348" height="191" src="https://www.youtube.com/embed/AjCWCsbr3DE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<h2> Dialysis</h2><br>

 <p style="font-size:14px;text-align: justify;"> 


A patient with end-stage kidney failure has DIALYSIS and TRANSPLANTATION as the only options available for his/her survival. As and when the patients reach a stage, where their kidneys fail to sustain body functions they have to be put on regular dialysis for keeping them alive. Even if the patient decides to have a transplant, he will need the support of dialysis till the preparations for kidney transplantation are made. Dialysis is a substitute for failed kidneys but does not replace kidney function. Patients on dialysis do not do well in the long run and develop some complications, which are not seen after transplantation. Patients live longer after transplantation than on dialysis. </p>

</div>
</div>

</div>
</div>


<?php
include('search.php');
?>
 <?php 
include('search1.php');
 ?>
<div style="width: 99%; height: 7rem ; background-color:#f5f5f5;">
<h1 style="text-align: center; font-size: 40px;margin-top: 80px;margin-bottom: 50px"> Our Experts</h1>
</div>

      <article id="a">
      <div class="searchBox">
            <!-- <input class="searchInput"type="text" name="" placeholder="Search"  id="input" 
                               autocomplete="off">
            <button class="searchButton" href="#">
                <i class="material-icons">
                    search
                </i>
            </button> -->
          <div class="search-box">
    <button class="btn-search"><i class="fas fa-search"></i></button>
    <input type="text" class="input-search" placeholder="Type to Search..." autocomplete="off" id="inp">
  </div>


            
     <br>
     
      <ul class="dropdown" id="dropdo"></ul>
        </div>
    </article>





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
