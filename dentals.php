<?php
    

    include('../header.php');
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
  <div id="iconn" style="text-align: center;" > <i class="fas fa-tooth">Dental care</i></h></div>
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
       
<p>A good dental care means regularly brushing and flossing your teeth, going for frequent dental check-ups, and consuming a healthy diet. Practicing these habits will prevent your gums from getting damaged, control bad breath, and increase the life of your teeth.</p>
<p>
The common ailments that require dental care are bad breath, caries or cavities, gingivitis or gum diseases, abscesses, loosening of tooth, leukoplakia or white patches and cancer of the mouth. At Max Healthcare, we offer dental care with Implantology, Invisible Braces, Laser Dentistry (painless soft tissue treatment), Paediatric Dentistry, and a painless root canal treatment to patients.</p>
<h3>What is Plaque?</h3>
<p>The main factor which causes tooth decay and gum disease is plaque. Plaque is a sticky combination of bacteria and food which starts to build up on teeth within 20 minutes after a person eats. If teeth are not cleaned well each day, plaque then causes tooth decay. If a person fails to remove plaque, it turns into a hard deposit known as tartar that becomes trapped at the base of the tooth. Plaque and tartar, inflame and irritate the gums. Bacteria and the toxins they produce can cause the gums to become infected, swollen, and tender.</p>
<ul>
    <br>
   <p>The formation of plaque and tartar leads to several other problems such as:</p>
   <br>
   <li>Cavities - which are holes that destroy the structure of the teeth</li>
       <li>Gingivitis - causes inflammation and bleeding gums and is usually a result of a bacterial infection</li>
          <li>Bad breath - which is also known as halitosis</li>
          <li>Periodontitis - the destruction of the bone and ligaments that support the teeth, often leading to tooth loss</li>
           <li>Abscesses, pain, and inability to use teeth</li>
          <li>Health issues outside the mouth, ranging from preterm labour to heart disease</li>
</ul>
<br>
<p>By taking good care of gums and teeth, the formation of plaque can be prevented, thereby keeping diseases of teeth away.</p>
<br>
<h2> Why Is Basic Dental Care Important?</h2><br>
<br>
<ul >
      <li>
        Prevents tooth decay</li>
      <li> Makes smile attractive</li>
       <li> Avoids gum disease, which can cause damage to the gum tissue and the bones that support<br> teeth, and in the long term can lead to the loss of teeth.</li>
      <li>   Shortens time with the dentist and dental hygienist and makes the trip more pleasant.</li>
      <li>  By avoiding tooth decay and gum disease, one can reduce the requirement for fillings <br>and other costly procedures.</li>
        <li>  Brushing and flossing regularly helps getting rid of the bacteria that lead to bad breath.</li>
        <li>  Keeps teeth white by avoiding staining from food, drinks, and tobacco.</li>
        <li>  Makes the teeth last a lifetime.</li>
          <li> Improves overall health.</li>

       </ul> 
 
<br>
<div class="container">
    <div class="row  ">

<div class=" Spondylitis d-flex bd-highlight justify-content-center align-item-center ">
  <div class="p-2 w-50 bd-highlight">




<h2> Dental Treatment Options</h2><br>

 <p style="font-size:14px;text-align: justify;">we offer dental treatment with Implantology, invisible braces, laser dentistry (painless soft tissue treatment), paediatric dentistry, and a painless root canal to patients. Our dental clinic in India has the best doctors and state-of-the-art technologies like Dental RVG, Digital Orthopantomogram and Dental Implants, we cater to patients’ preventive and primary healthcare requirements. Our dental hospital offers the best dental treatment our hospital</p>


<!-- </div>
 --></div>
<div class="p-2 w-50 bd-highlight">
   
      <iframe 
      width="346" height="211" style="margin-top: 30px; margin-left:30px" src="https://www.youtube.com/embed/WK6JMAcfpH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>


</div>
</div>

</div>
</div>





 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>







<!-- seach code for first search bar ---->
<script>
      $(document).ready(function(){
          
          function fetchData(){
            var s = $("#input").val();

            if (s == '') {
               $('#dropdown').css('display', 'none');
            }
            $.post("assets/auto_complet.php", 
                  {
                    s:s
                  },
                  function(data, status){
                      if (data != "not found") {
                        $('#dropdown').css('display', 'block');
                        $('#dropdown').html(data);
                      }
                  });
          }
           $('#input').on('input', fetchData);
           $("body").on('click', () => {
             $('#dropdown').css('display', 'none');
          });


      });
</script>

<!--- end ----->






</div>


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
include('footer.php');
?>

<!-- footer section ends -->
</body>
</html>