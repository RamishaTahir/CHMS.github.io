<?php 

include ('../assets/db_conn.php');

if (isset($_POST['s'])) {
	
	$key = "%{$_POST['s']}%";

	$sql = "SELECT * FROM doctor_table
	        WHERE doctor_name 
	        LIKE ?  
	        OR doctor_expert_in LIKE ?
	        LIMIT 3";

	$stmt = $conn->prepare($sql);
	$stmt->execute([$key, $key]);

	if ($stmt->rowCount() > 0) {
		$results = $stmt->fetchAll();
		foreach ($results as $result) { ?>
		<li>
		  <a href="Cardiologydoctor1.php?id=<?=$result['doctor_id']?>"><?=$result['doctor_name']?><br> <font style="font-size: 13px; font-style: italic;"><?=$result['doctor_expert_in']?></font></a>
		</li>
	   <?php
       }
	}else echo "not found";
}
