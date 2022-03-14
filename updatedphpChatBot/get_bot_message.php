<?php
date_default_timezone_set('Asia/Kolkata');
if(isset($_COOKIE["user"])) {
$userid = $_COOKIE["user"];
}
include('database.inc.php');
$txt=mysqli_real_escape_string($con,$_POST['txt']);
$sql="select reply from chatbot_hints where question like '%$txt%'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$html=$row['reply'];
}else{
	$html="Sorry not be able to understand you";
}
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(message,added_on,type,userid) values('$txt','$added_on','user','$userid')");
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(message,added_on,type,userid) values('$html','$added_on','bot','$userid')");
echo $html;
?>