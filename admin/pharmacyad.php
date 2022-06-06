<?php

//doctor.php

include('../class/Appointment.php');

$object = new Appointment;

if(!$object->is_login())
{
    header("location:".$object->base_url."admin");
}

if($_SESSION['type'] != 'Admin')
{
    header("location:".$object->base_url."");
}

include('header.php');

?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Pharmacy Management</h1>

                    <!-- DataTales Example -->
                    <span id="message"></span>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h6 class="m-0 font-weight-bold text-primary">Medicine List</h6>
                            	</div>
                            	<div class="col" align="right">
                            		<button type="button" name="add_doctor" id="add_doctor" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                            	</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="doctor_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            
                                            <th>Medicine Name</th>
                                            <th>Medicine Detail</th>
                                            <th>Medicine Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <?php
                include('footer.php');
                ?>

<div id="doctorModal" class="modal fade">
  	<div class="modal-dialog">
    	<form method="post" id="doctor_form">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h4 class="modal-title" id="modal_title">Add Medicine</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        		<div class="modal-body">
        			<span id="form_message"></span>
		          	
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Medicine Name </label>
                                <input type="text" name="Medicine_name" id="Medicine_name" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label>Medicine Detail </label>
                                <input type="text" name="Medicine_detail" id="Medicine_detail" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Medicine Type </label>
                                <input type="text" name="Medicine_type" id="Medicine_type" class="form-control" />
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label>Medicine Image <span class="text-danger">*</span></label>
                        <br />
                        <input type="file" name="Medicine_profile_image" id="Medicine_profile_image" />
                        <div id="uploaded_image"></div>
                        <input type="hidden" name="hidden_Medicine_profile_image" id="hidden_Medicine_profile_image" />
                    </div>
        		</div>
        		<div class="modal-footer">
          			<input type="hidden" name="hidden_id" id="hidden_id" />
          			<input type="hidden" name="action" id="action" value="Add" />
          			<input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		</div>
      		</div>
    	</form>
  	</div>
</div>

<div id="viewModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_title">View Medicine Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="pharmacy_details">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    
$('#Medicine_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        $("#Medicine_err").html("Alphabets Only").show().fadeOut("slow");
        return false;
        }
    });


</script>


<script type="text/javascript">
    
$('#Medicine_type').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        $("#Medicine_type_err").html("Alphabets Only").show().fadeOut("slow");
        return false;
        }
    });


</script>

<script type="text/javascript">
    
$('#Medicine_detail').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        $("#Medicine_detail_err").html("Alphabets Only").show().fadeOut("slow");
        return false;
        }
    });


</script>










<script>
$(document).ready(function(){

	var dataTable = $('#doctor_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"pharmacy_action.php",
			type:"POST",
			data:{action:'fetch'}
		},
		"columnDefs":[
			{
				"targets":[0, 1, 2, 4, 5],
				"orderable":false,
			},
		],
	});

    $('#doctor_date_of_birth').datepicker({
        format: "yyyy-mm-dd",
        
        autoclose: true
    });

	$('#add_doctor').click(function(){
		
		$('#doctor_form')[0].reset();

		$('#doctor_form').parsley().reset();

    	$('#modal_title').text('Add Doctor');

    	$('#action').val('Add');

    	$('#submit_button').val('Add');

    	$('#doctorModal').modal('show');

    	$('#form_message').html('');

	});

	$('#doctor_form').parsley();

	$('#doctor_form').on('submit', function(event){
		event.preventDefault();
		if($('#doctor_form').parsley().isValid())
		{		
			$.ajax({
				url:"pharmacy_action.php",
				method:"POST",
				data: new FormData(this),
				dataType:'json',
                contentType: false,
                cache: false,
                processData:false,
				beforeSend:function()
				{
					$('#submit_button').attr('disabled', 'disabled');
					$('#submit_button').val('wait...');
				},
				success:function(data)
				{
					$('#submit_button').attr('disabled', false);
					if(data.error != '')
					{
						$('#form_message').html(data.error);
						$('#submit_button').val('Add');
					}
					else
					{
						$('#doctorModal').modal('hide');
						$('#message').html(data.success);
						dataTable.ajax.reload();

						setTimeout(function(){

				            $('#message').html('');

				        }, 5000);
					}
				}
			})
		}
	});

	$(document).on('click', '.edit_button', function(){

		var pharmacy_id = $(this).data('id');

		$('#doctor_form').parsley().reset();

		$('#form_message').html('');

		$.ajax({

	      	url:"pharmacy_action.php",

	      	method:"POST",

	      	data:{pharmacy_id:pharmacy_id, action:'fetch_single'},

	      	dataType:'JSON',

	      	success:function(data)
	      	{

	        	$('#Medicine_name').val(data.pharmacy_name);


                $('#Medicine_detail').val(data.pharmacy_detail);
                $('#Medicine_type').val(data.pharmacy_type);
              
                $('#uploaded_image').html('<img src="'+data.pharmacy_image+'" class="img-fluid img-thumbnail" width="150" />')
               
                

	        	$('#modal_title').text('Edit Doctor');

	        	$('#action').val('Edit');

	        	$('#submit_button').val('Edit');

	        	$('#doctorModal').modal('show');

	        	$('#hidden_id').val(pharmacy_id);

	      	}

	    })

	});

	$(document).on('click', '.status_button', function(){
		var id = $(this).data('id');
    	var status = $(this).data('status');
		var next_status = 'Active';
		if(status == 'Active')
		{
			next_status = 'Inactive';
		}
		if(confirm("Are you sure you want to "+next_status+" it?"))
    	{

      		$.ajax({

        		url:"pharmacy_action.php",

        		method:"POST",

        		data:{id:id, action:'change_status', status:status, next_status:next_status},

        		success:function(data)
        		{

          			$('#message').html(data);

          			dataTable.ajax.reload();

          			setTimeout(function(){

            			$('#message').html('');

          			}, 5000);

        		}

      		})

    	}
	});

    $(document).on('click', '.view_button', function(){
        var pharmacy_id = $(this).data('id');

        $.ajax({

            url:"pharmacy_action.php",

            method:"POST",

            data:{pharmacy_id:pharmacy_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
                var html = '<div class="table-responsive">';
                html += '<table class="table">';

                html += '<tr><td colspan="2" class="text-center"><img src="'+data.pharmacy_image+'" class="img-fluid img-thumbnail" width="150" /></td></tr>';

                html += '<tr><th width="40%" class="text-right">Medicine_name</th><td width="60%">'+data.pharmacy_name+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Medicine_type</th><td width="60%">'+data.pharmacy_type+'</td></tr>';

               html += '<tr><th width="40%" class="text-right">Medicine_detail</th><td width="60%">'+data.pharmacy_detail+'</td></tr>';
                html += '</table></div>';

                $('#viewModal').modal('show');

                $('#pharmacy_details').html(html);

            }

        })
    });

	$(document).on('click', '.delete_button', function(){

    	var id = $(this).data('id');

    	if(confirm("Are you sure you want to remove it?"))
    	{

      		$.ajax({

        		url:"pharmacy_action.php",

        		method:"POST",

        		data:{id:id, action:'delete'},

        		success:function(data)
        		{

          			$('#message').html(data);

          			dataTable.ajax.reload();

          			setTimeout(function(){

            			$('#message').html('');

          			}, 5000);

        		}

      		})

    	}

  	});



});
</script>