<?php

//pharmacy_action.php

include('../class/Appointment.php');

$object = new Appointment;

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('pharmacy_name', 'pharmacy_status');

		$output = array();

		$main_query = "
		SELECT * FROM pharmacy ";

		$search_query = '';

		if(isset($_POST["search"]["value"]))
		{
			$search_query .= 'WHERE pharmacy_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$search_query .= 'OR pharmacy_type LIKE "%'.$_POST["search"]["value"].'%" ';
			// $search_query .= 'OR pharmacy_phone_no LIKE "%'.$_POST["search"]["value"].'%" ';
			// $search_query .= 'OR pharmacy_date_of_birth LIKE "%'.$_POST["search"]["value"].'%" ';
			// $search_query .= 'OR pharmacy_degree LIKE "%'.$_POST["search"]["value"].'%" ';
			// $search_query .= 'OR pharmacy_expert_in LIKE "%'.$_POST["search"]["value"].'%" ';
			// $search_query .= 'OR pharmacy_status LIKE "%'.$_POST["search"]["value"].'%" ';
		}

		if(isset($_POST["order"]))
		{
			$order_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_query = 'ORDER BY pharmacy_id DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$object->query = $main_query . $search_query . $order_query;

		$object->execute();

		$filtered_rows = $object->row_count();

		$object->query .= $limit_query;

		$result = $object->get_result();

		$object->query = $main_query;

		$object->execute();

		$total_rows = $object->row_count();

		$data = array();

		foreach($result as $row)
		{
			$sub_array = array();
			$sub_array[] = '<img src="'.$row["pharmacy_image"].'" class="img-thumbnail" width="75" />';
			$sub_array[] = $row["pharmacy_name"];
			$sub_array[] = $row["pharmacy_type"];
			$sub_array[] = $row["pharmacy_detail"];
			
			$status = '';
			if($row["pharmacy_status"] == 'Active')
			{
				$status = '<button type="button" name="status_button" class="btn btn-primary btn-sm status_button" data-id="'.$row["pharmacy_id"].'" data-status="'.$row["pharmacy_status"].'">Active</button>';
			}
			else
			{
				$status = '<button type="button" name="status_button" class="btn btn-danger btn-sm status_button" data-id="'.$row["pharmacy_id"].'" data-status="'.$row["pharmacy_status"].'">Inactive</button>';
			}
			$sub_array[] = $status;
			$sub_array[] = '
			<div align="center">
			<button type="button" name="view_button" class="btn btn-info btn-circle btn-sm view_button" data-id="'.$row["pharmacy_id"].'"><i class="fas fa-eye"></i></button>
			<button type="button" name="edit_button" class="btn btn-warning btn-circle btn-sm edit_button" data-id="'.$row["pharmacy_id"].'"><i class="fas fa-edit"></i></button>
			<button type="button" name="delete_button" class="btn btn-danger btn-circle btn-sm delete_button" data-id="'.$row["pharmacy_id"].'"><i class="fas fa-times"></i></button>
			</div>
			';
			$data[] = $sub_array;
		}

		$output = array(
			"draw"    			=> 	intval($_POST["draw"]),
			"recordsTotal"  	=>  $total_rows,
			"recordsFiltered" 	=> 	$filtered_rows,
			"data"    			=> 	$data
		);
			
		echo json_encode($output);

	}

	if($_POST["action"] == 'Add')
	{
		$error = '';

		$success = '';

		$data = array(
			':pharmacy_name'	=>	$_POST["Medicine_name"]
		);

		$object->query = "
		SELECT * FROM pharmacy 
		WHERE pharmacy_name = :pharmacy_name
		";

		$object->execute($data);

		if($object->row_count() > 0)
		{
			$error = '<div class="alert alert-danger">Medicine Already Exists</div>';
		}
		else
		{
			$pharmacy_name_image = '';
			if($_FILES['Medicine_profile_image']['name'] != '')
			{
				$allowed_file_format = array("jpg", "png");

	    		$file_extension = pathinfo($_FILES["Medicine_profile_image"]["name"], PATHINFO_EXTENSION);

	    		if(!in_array($file_extension, $allowed_file_format))
			    {
			        $error = "<div class='alert alert-danger'>Upload valiid file. jpg, png</div>";
			    }
			    else if (($_FILES["Medicine_profile_image"]["size"] > 2000000))
			    {
			       $error = "<div class='alert alert-danger'>File size exceeds 2MB</div>";
			    }
			    else
			    {
			    	$new_name = rand() . '.' . $file_extension;

					$destination = '../images/' . $new_name;

					move_uploaded_file($_FILES['Medicine_profile_image']['tmp_name'], $destination);

					$pharmacy_profile_image = $destination;
			    }
			}
			else
			{
				$character = $_POST["Medicine_name"][0];
				$path = "../images/". time() . ".png";
				$image = imagecreate(200, 200);
				$red = rand(0, 255);
				$green = rand(0, 255);
				$blue = rand(0, 255);
			    imagecolorallocate($image, 230, 230, 230);  
			    $textcolor = imagecolorallocate($image, $red, $green, $blue);
			    imagettftext($image, 100, 0, 55, 150, $textcolor, '../font/arial.ttf', $character);
			    imagepng($image, $path);
			    imagedestroy($image);
			    $pharmacy_profile_image = $path;
			}

			if($error == '')
			{
				$data = array(
					':pharmacy_name'			=>	$object->clean_input($_POST["Medicine_name"]),
					':pharmacy_type'				=>	$_POST["Medicine_type"],
					':pharmacy_detail'					=>	$object->clean_input($_POST["Medicine_detail"]),
					':pharmacy_profile_image'			=>	$pharmacy_profile_image,
					
					
					':pharmacy_status'				=>	'Active',
					
				);
				
					$object->query = "
					INSERT INTO pharmacy
					(pharmacy_name, pharmacy_type, pharmacy_detail, pharmacy_image, pharmacy_status) 
					VALUES (:pharmacy_name, :pharmacy_type, :pharmacy_detail, :pharmacy_profile_image, :pharmacy_status)
					";

					$object->execute($data);
				
				
				}
				$success = '<div class="alert alert-success">Medicine Added</div>';
			
		}

		$output = array(
			'error'		=>	$error,
			'success'	=>	$success
		);

		echo json_encode($output);

	}

	if($_POST["action"] == 'fetch_single')
	{
		$object->query = "
		SELECT * FROM pharmacy
		WHERE pharmacy_id = '".$_POST["pharmacy_id"]."'
		";

		$result = $object->get_result();

		$data = array();

		foreach($result as $row)
		{
			
			$data['pharmacy_name'] = $row['pharmacy_name'];
			$data['pharmacy_image'] = $row['pharmacy_image'];
			
			$data['pharmacy_type'] = $row['pharmacy_type'];
			$data['pharmacy_detail'] = $row['pharmacy_detail'];
		}

		echo json_encode($data);
	}

	if($_POST["action"] == 'Edit')
	{
		
		$error = '';

		$success = '';

		$pharmacy_image = $_POST["hidden_Medicine_profile_image"];

		if($_FILES['Medicine_profile_image']['name'] != '')
		{
			$allowed_file_format = array("jpg", "png");

    		$file_extension = pathinfo($_FILES["Medicine_profile_image"]["name"], PATHINFO_EXTENSION);

    		if(!in_array($file_extension, $allowed_file_format))
		    {
		        $error = "<div class='alert alert-danger'>Upload valiid file. jpg, png</div>";
		    }
		    else if (($_FILES["Medicine_profile_image"]["size"] > 2000000))
		    {
		       $error = "<div class='alert alert-danger'>File size exceeds 2MB</div>";
		    }
		    else
		    {
		    	$new_name = rand() . '.' . $file_extension;

				$destination = '../images/' . $new_name;

				move_uploaded_file($_FILES['Medicine_profile_image']['tmp_name'], $destination);

				$pharmacy_image = $destination;
		    }

		}
		if($error == '' && $_FILES['Medicine_profile_image']['name'] != '')
		{
			$data = array(
				
				':pharmacy_name'					=>	$object->clean_input($_POST["Medicine_name"]),
				':pharmacy_image'			=>	$pharmacy_image,
				
				':pharmacy_type'				=>	$object->clean_input($_POST["Medicine_type"]),
				
				':pharmacy_detail'				=>	$object->clean_input($_POST["Medicine_detail"])
			);

			$object->query = "
			UPDATE pharmacy
			SET 
			
			pharmacy_name = :pharmacy_name, 
			pharmacy_image = :pharmacy_image, 
			
			pharmacy_type = :pharmacy_type,  
			pharmacy_detail = :pharmacy_detail 
			WHERE pharmacy_id = '".$_POST['hidden_id']."'
			";
			$object->execute($data);

			$success = '<div class="alert alert-success">pharmacy Data Updated</div>';
		}			
		else {
			$data = array(
				
				':pharmacy_name'					=>	$object->clean_input($_POST["Medicine_name"]),
				
				':pharmacy_type'				=>	$object->clean_input($_POST["Medicine_type"]),
				
				':pharmacy_detail'				=>	$object->clean_input($_POST["Medicine_detail"])
			);

			$object->query = "
			UPDATE pharmacy
			SET 
			
			pharmacy_name = :pharmacy_name,  
			
			pharmacy_type = :pharmacy_type,  
			pharmacy_detail = :pharmacy_detail 
			WHERE pharmacy_id = '".$_POST['hidden_id']."'
			";
			$object->execute($data);

			$success = '<div class="alert alert-success">pharmacy Data Updated</div>';
		}
		$output = array(
			'error'		=>	$error,
			'success'	=>	$success
		);

		echo json_encode($output);

	}

	if($_POST["action"] == 'change_status')
	{
		$data = array(
			':pharmacy_status'		=>	$_POST['next_status']
		);

		$object->query = "
		UPDATE pharmacy 
		SET pharmacy_status = :pharmacy_status 
		WHERE pharmacy_id = '".$_POST["id"]."'
		";

		$object->execute($data);

		echo '<div class="alert alert-success">Class Status change to '.$_POST['next_status'].'</div>';
	}

	if($_POST["action"] == 'delete')
	{
		$object->query = "
		DELETE FROM pharmacy 
		WHERE pharmacy_id = '".$_POST["id"]."'
		";

		$object->execute();

		echo '<div class="alert alert-success">pharmacy Data Deleted</div>';
	}
}

?>