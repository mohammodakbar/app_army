<?php $this->start('body');?>
<?php 
	require_once(ROOT. '/core/DB.php');
	$db 	= new database;
	$rel_id = $_GET['rel_id'];
	$sel	= $db->query("SELECT * FROM civil_basic_info  WHERE cs_no='$rel_id'");
	$count  = mysqli_num_rows($sel);
	if($count == 0){
		die('Invalid data');
		
	} 
	
?>
<script>


    $(document).ready(function (e){
        $("#form_step_2").on('submit',(function(e){
        e.preventDefault();
        $.ajax({
            url: "<?php echo PROOT;?>public/ajax/civil_step-2.php?rel_id=<?= $rel_id; ?>",
            type: "POST",
            dataType: 'JSON',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
			beforeSend: function() {
				$('.overlay').show();
			  },
			  complete: function(){
				 $('.overlay').hide();
			  },
				success : function(data){

					if (data.code == "200"){
						$(".display-error>.alert").html("<ul class='nav'>"+data.msg['scsmsg']+"</ul>");
						$(".display-error").removeClass('bg_color4');
						$(".display-error").addClass('bg_color2');
						$(".display-error").removeClass('hide');
						$(".display-error").addClass('show');
						var link =  data.msg['post_data'];
						//setTimeout(' window.location.href = "<?= PROOT;?>civil"; ',1000);

					} else {

						$(".display-error>.alert").html("<ul class='nav'>"+data.msg+"</ul>");
						$(".display-error").removeClass('bg_color2');
						$(".display-error").addClass('bg_color4');
						$(".display-error").removeClass('hide');
						$(".display-error").addClass('show');

					}

				}
            });
        }));
    });
</script>

<!--  Inner breadcrumb start -->
<div class="col-md-12">
	<div class="bread">
        <i class="fa fa-th-large"></i>  <span class="big_font">Add Civil </span>
		<span style="font-size:13px;font-weight:300"> | Add civil information </span>
            <a href="<?= PROOT;?>civil/add/step-1/" class="btn btn-info btn-sm pull-right">New Form</a>
    </div>
	<br />
	<br />
	<br />
</div>

<div class="col-md-12">
	<div class="overlay" ><span id="wloader"></span></div>
	<div class="row">
		<!--  Create class start from here -->
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-plus"></i> Addmission Form (Step-2)</div>
				<div class="panel-body">
					
					<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" id="form_step_2">
						
						<div class="col-md-6 ln">
							<h4 class="form_header">Job Description</h4>
							<h5 class="sub_head">Previous Jobs</h5>
							<div class="input_fields_wrap" >
								<div class="row" >
									<div class="field">
										<div class="col-md-3">
											<div class="form-group">
												<label for="class_name">Coy/Ins</label>
												<input type="text"  class="form-control" name="unit[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="class_name">From</label>
												<input type="text"  class="form-control" name="from[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="class_name">To</label>
												<input type="text"  class="form-control" name="to[]" id="className"/>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="class_name">App</label>
												<input type="text"  class="form-control" name="app[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<a href="" class="add_field_button btn btn-info" id="addScnt" style="margin-top:20px ">
                                                    <i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h4 class="form_header">Educational Qualification</h4>
							<h5 class="sub_head">Civil Education</h5>
							<div class="input_fields_wrap4" >
								<div class="row" >
									<div class="field">
										<div class="col-md-3">
											<div class="form-group">
												<label for="class_name">Exam</label>
												<input type="text"  class="form-control" name="exam[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="class_name">Yrs</label>
												<input type="text"  class="form-control" name="year[]" id="className"/>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="class_name">Division</label>
												<input type="text" placeholder="" class="form-control" name="division[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="class_name">GPA</label>
												<input type="text"  class="form-control" name="gpa[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<a href="" class="add_field_button4 btn btn-info" id="addScnt" style="margin-top:20px ">
                                                    <i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
	
                            <h5 class="sub_head">Travelling</h5>
							<div class="input_fields_wrap6" >
                                <div class="row" >
									<div class="field">
										<div class="col-md-3">
											<div class="form-group">
												<label for="class_name">From</label>
												<input type="text"  class="form-control" name="unm_from[]" id="className"/>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="class_name">To</label>
												<input type="text"  class="form-control" name="unm_to[]" id="className"/>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="class_name">Name of Country</label>
												<input type="text"  class="form-control" name="unm_name_of_country[]" id="className"/>
											</div>
										</div>
										
										<div class="col-md-2">
											<div class="form-group">
												<a href="" class="add_field_button6 btn btn-info" id="addScnt" style="margin-top:20px "><i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
                            
						</div>
						<div class="col-md-6">
                            <h5 class="sub_head">Games</h5>
							<div class="input_fields_wrap7" >
                                <div class="row" >
									<div class="field">
										<div class="col-md-10">
											<div class="form-group">
												<label for="class_name">Name of Games</label>
												<input type="text"  class="form-control" name="name_of_games[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<a href="" class="add_field_button7 btn btn-info" id="addScnt" style="margin-top:20px "><i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>

				            <h5 class="sub_head">Close relatives: (Any five)</h5>
							<div class="input_fields_wrap9" >
                                <div class="row" >
									<div class="field">
										<div class="col-md-4">
											<div class="form-group">
												<label for="class_name">Name</label>
												<input type="text"  class="form-control" name="rel_name[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="class_name">Relations</label>
												<input type="text"  class="form-control" name="rel_relations[]" id="className"/>
											</div>
										</div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label for="class_name">Mobile No</label>
												<input type="text"  class="form-control" name="rel_mobile[]" id="className"/>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<a href="" class="add_field_button9 btn btn-info" id="addScnt" style="margin-top:20px "><i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
                            
                            <h5 class="sub_head">Social Network ID</h5>
							<div class="input_fields_wrap10" >
                                <div class="row" >
									<div class="field">
										<div class="col-md-4">
											<div class="form-group">
												<label for="class_name">Profile Link</label>
												<input type="text"  class="form-control" name="profile_link[]" id="className"/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="class_name">Name on ID</label>
												<input type="text"  class="form-control" name="id_name[]" id="className"/>
											</div>
										</div>
														
										<div class="col-md-2">
											<div class="form-group">
												<a href="" class="add_field_button10 btn btn-info" id="addScnt" style="margin-top:20px "><i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
                            
                            
                            
                            <h5 class="sub_head">Used Devices IMEI Numbers</h5>
							<div class="input_fields_wrap11" >
                                <div class="row" >
									<div class="field">
										<div class="col-md-4">
											<div class="form-group">
												<label for="class_name">Device Name</label>
												<input type="text"  class="form-control" name="device_name[]" id="className"/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="class_name">IMEI Number</label>
												<input type="text"  class="form-control" name="device_imei[]" id="className"/>
											</div>
										</div>
														
										<div class="col-md-2">
											<div class="form-group">
												<a href="" class="add_field_button11 btn btn-info" id="addScnt" style="margin-top:20px "><i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
                            
                            
							   <!-- Signature Upload System Start-->
                            
							
                            <!-- Signature Upload End-->

							<div class="form-group text-right">
								<br /><br /><br />
								<input type="submit" value="Submit Data"  class="btn btn-success" name="only_save" id="className"/>
								<br /><br />
							</div>
							
						</div>
						
					</form>
				</div>
			</div>
		</div>
		<!--  Create class ends here -->
		<!-- Class list start -->
		
		<!-- Class list end -->
	</div>

</div>


<!--  Modal for data edit -->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_data">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit a class info</h4>
      </div>
	  <div class="modal_animation">
		  <div class="well well-sm alert-info">
		  	Please be careful while editing a class name/id and make sure that it wont make any conflicting to the existing class/id name into this shift.
		</div>
		<div class="error_msg hide" style="position:relative">
			<span class='my_style'><i class='fa fa-times'></i></span>
			<div class="alert"></div>

		</div>
	  </div>
	  <form action="#" method="post" id="update_class">
	      <div class="modal-body" id="load_data" style="position:relative">
			<div id="loader" class="" style=""><img src="preloader.gif" alt="" /></div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" id="">Save changes</button>
	      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal for data edit -->

<script type="text/javascript" src="<?= PROOT; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-3"><div class="form-group"><label for="class_name">Unit</label><input type="text"  class="form-control" name="unit[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">From</label><input type="text"  class="form-control" name="from[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">To</label><input type="text"  class="form-control" name="to[]" id="className"/></div></div><div class="col-md-3"><div class="form-group"><label for="class_name">App</label><input type="text"  class="form-control" name="app[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"></div></div><a href="#" class="remove_field btn btn-danger" style=""><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
$(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap2"); //Fields wrapper
    var add_button      = $(".add_field_button2"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-3"><div class="form-group"><label for="class_name">Step</label><input type="text"  class="form-control" name="step[]" id="className"/></div></div><div class="col-md-4"><div class="form-group"><label for="class_name">Date</label><input type="text"  class="form-control" name="date[]" id="className"/></div></div><div class="col-md-3"><div class="form-group"><label for="class_name">Rmks</label><input type="text"  class="form-control" name="rmks[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
$(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap3"); //Fields wrapper
    var add_button      = $(".add_field_button3"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-6"><div class="form-group"><label for="class_name">Desciption</label><input type="text"  class="form-control" name="description[]" id="className"/></div></div><div class="col-md-4"><div class="form-group"><label for="class_name">Type</label><input type="text"  class="form-control" name="type[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
$(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap4"); //Fields wrapper
    var add_button      = $(".add_field_button4"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-3"><div class="form-group"><label for="class_name">Exam</label><input type="text"  class="form-control" name="exam[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">Yrs</label><input type="text"  class="form-control" name="year[]" id="className"/></div></div><div class="col-md-3"><div class="form-group"><label for="class_name">Division</label><input type="text"  class="form-control" name="division[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">GPA</label><input type="text"  class="form-control" name="gpa[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
$(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap5"); //Fields wrapper
    var add_button      = $(".add_field_button5"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-3"><div class="form-group"><label for="class_name">Course</label><input type="text"  class="form-control" name="course[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">Yrs</label><input type="text"  class="form-control" name="year[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">Result</label><input type="text"  class="form-control" name="result[]" id="className"/></div></div><div class="col-md-3"><div class="form-group"><label for="class_name">Name of Ins</label><input type="text"  class="form-control" name="name_of_ins[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    
    
    
    
    $(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap6"); //Fields wrapper
    var add_button      = $(".add_field_button6"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-3"><div class="form-group"><label for="class_name">From</label><input type="text"  class="form-control" name="unm_from[]" id="className"/></div></div><div class="col-md-3"><div class="form-group"><label for="class_name">To</label><input type="text"  class="form-control" name="unm_to[]" id="className"/></div></div><div class="col-md-4"><div class="form-group"><label for="class_name">Name of Country</label><input type="text"  class="form-control" name="unm_name_of_country[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    
    
  
 $(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap7"); //Fields wrapper
    var add_button      = $(".add_field_button7"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-10"><div class="form-group"><label for="class_name">Name of Play</label><input type="text"  class="form-control" name="name_of_games[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});  
    


$(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap8"); //Fields wrapper
    var add_button      = $(".add_field_button8"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-6"><div class="form-group"><label for="class_name">Name</label><input type="text"  class="form-control" name="nok_name[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">Relations</label><input type="text"  class="form-control" name="nok_relation[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">%</label><input type="text"  class="form-control" name="nok_parcent[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});    

    
    $(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap9"); //Fields wrapper
    var add_button      = $(".add_field_button9"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-4"><div class="form-group"><label for="class_name">Name</label><input type="text"  class="form-control" name="rel_name[]" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">Relations</label><input type="text"  class="form-control" name="rel_relations[]" id="className"/></div></div><div class="col-md-4"><div class="form-group"><label for="class_name">Mobile No</label><input type="text"  class="form-control" name="rel_mobile[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});  
    
    
        $(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap10"); //Fields wrapper
    var add_button      = $(".add_field_button10"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-4"><div class="form-group"><label for="class_name">Profile Link</label><input type="text"  class="form-control" name="profile_link[]" id="className"/></div></div><div class="col-md-6"><div class="form-group"><label for="class_name">Name on ID</label><input type="text"  class="form-control" name="id_name[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});  
    
    
    $(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap11"); //Fields wrapper
    var add_button      = $(".add_field_button11"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-4"><div class="form-group"><label for="class_name">Device Name</label><input type="text"  class="form-control" name="device_name[]" id="className"/></div></div><div class="col-md-6"><div class="form-group"><label for="class_name">IMEI Number</label><input type="text"  class="form-control" name="device_imei[]" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user 	click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
}); 
    
    
    
    $(document).ready(function() {
    var max_fields      = 30; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap12"); //Fields wrapper
    var add_button      = $(".add_field_button12"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-8"><div class="form-group"><label for="class_name">Country Name </label><input type="text"  class="form-control" name="className" id="className"/></div></div><a href="#" class="remove_field btn btn-danger" style="margin-top:20px"><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    
    
</script>
<?php $this->end()?>