<?php
date_default_timezone_set('Asia/Karachi');
$userid="";
$html='';
if(!isset($_COOKIE["user"])) {
 $user = date('Y/m/d/ h:i:sa :ss');

setcookie("user", $user, time() + (86400 * 60), "/");
}else
{
		$userid = $_COOKIE["user"];
}



	
include('database.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   	<style type="text/css">
   		#getVoice {
				display: inline-block;
				border: none;
				padding: inherit 20px;
				cursor: pointer;
				background: white;
				border: 1px solid #ced4da;
				border-right: none;
			} 
			#input-me {
				border-left: none;
			}
   	</style>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>PHP Chatbot</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-md-center mb-4">
            <div class="col-md-6">
               <!--start code-->
               <div class="card">
                  <div class="card-body messages-box">
					 <ul class="list-unstyled messages-list">
							<?php
							$res=mysqli_query($con,"select * from message where id = '".$userid."'");
							if(mysqli_num_rows($res)>0){
								
								while($row=mysqli_fetch_assoc($res)){
									$message=$row['message'];
									$added_on=$row['added_on'];
									$strtotime=strtotime($added_on);
									$time=date('h:i A',$strtotime);
									$type=$row['type'];
									if($type=='user'){
										$class="messages-me";
										$imgAvatar="user_avatar.png";
										$name="Me";
									}else{
										$class="messages-you";
										$imgAvatar="bot_avatar.png";
										$name="Chatbot";
									}
									$html.='<li class="'.$class.' clearfix"><span class="message-img"><img src="image/'.$imgAvatar.'" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">'.$name.'</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'.$time.'</span></small> </div><p class="messages-p">'.$message.'</p></div></li>';
								}
								echo $html;
							}else{

								?>
								<li class="messages-you clearfix start_chat">
								 
								  	<span class="message-img">
								  		<img src="image/bot_avatar.png" class="avatar-sm rounded-circle">
								  	</span>
								  	<div class="message-body clearfix">
								  		<div class="message-header">
								  			<strong class="messages-title">Chatbot</strong> 
								  			<small class="time-messages text-muted">
								  				<span class="fas fa-time"></span> 
								  				<span class="minutes"></span></small>
								  				 </div
								  				 ><p class="messages-p">Welcome to CHMS  Tell me your symptoms OR which specialist You want to consult
							 </p>
							</div>
						
								</li>
								<?php

							}

							?>
                    
                     </ul>
                  </div>
                  <div class="card-header">
                    <div class="input-group">
                    	<button id="getVoice" class="fa-solid fa-microphone"></button>
					   <input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />
					   <span class="input-group-append">
					   <input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
					   </span>
					</div> 
                  </div>
               </div>
               <!--end code-->
            </div>
         </div>
      </div>
      <script type="text/javascript">
			/* Voice Code Starts */
      	let isMicListning = false;
      	let SpeechRecognition = window.webkitSpeechRecognition;
			let voiceSpeech = new SpeechRecognition();
			let Textbox = $('#input-me');

			let Content = '';

			voiceSpeech.continuous = true;

			voiceSpeech.onresult = function(event) {
				console.log(event);
			  let index = event.resultIndex;

			  let word = event.results[index][0].transcript;
			 
			    Content += word;
			    Textbox.val(Content);
			  
			};


			/* Voice Code Ends */
		 function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
			var time = hh+":"+min+" "+ampm;
			return time;
		 }
		 function send_msg(){
		 	if (isMicListning) {
		 		voiceSpeech.stop();
		 		isMicListning = false;
		 		Content = '';
		 		$(this).css('color','black');
		 	}
			jQuery('.start_chat').hide();
			var txt=jQuery('#input-me').val();
			var html='<li class="messages-me clearfix"><span class="message-img"><img src="image/user_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+txt+'</p></div></li>';
			jQuery('.messages-list').append(html);
			jQuery('#input-me').val('');
			if(txt){
				jQuery.ajax({
					url:'get_bot_message.php',
					type:'post',
					data:'txt='+txt,
					success:function(result){
						var html='<li class="messages-you clearfix"><span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+result+'</p></div></li>';
						jQuery('.messages-list').append(html);
						jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
					}
				});
			}
		 }
		 $('#getVoice').on('click',function(){
		 	if (isMicListning) {
		 		voiceSpeech.stop();
		 		isMicListning = false;
		 		Content = '';
		 		$(this).css('color','black');
		 	}
		 	else {
		 		voiceSpeech.start();
		 		isMicListning = true;
		 		$(this).css('color','blue');
		 	}
		 })
      </script>
   </body>
</html>