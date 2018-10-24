<?php $this->start('body');?>
<?php 
	require_once(ROOT. '/core/DB.php');
	$db 	= new database;
	$show   = $_GET['profile'];
	$sel	= $db->query("SELECT * FROM basic_info WHERE army='$show'");
	$data	= $db->fetch($sel);	
	$count  = mysqli_num_rows($sel);
	$profile = $db->fetch($sel);
	if($count == 0){
		die('Invalid data');
		
	}
	
?>
<script>
    
    function pic(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(40)
                        .height(50);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		    
	function signature(input) {
            if (input.files && input.files[0]) {
                var sig = new FileReader();

                reader.onload = function (e) {
                    $('#signature')
                        .attr('src', e.target.result)
                        .width(40)
                        .height(50);
                };

                sig.readAsDataURL(input.files[0]);
            }
        }
    
   

    
    
    $(document).ready(function (e){
        $("#form_step_1").on('submit',(function(e){
        e.preventDefault();
        $.ajax({
            url: "<?= PROOT;?>public/ajax/edit_1.php?profile=<?= $show; ?>",
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
						window.location.href = '<?= PROOT;?>soldier';

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
        <i class="fa fa-th-large"></i>  <span class="big_font">Edit Army </span>
		<span style="font-size:13px;font-weight:300"> | Edit soldier information </span>
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
				<div class="panel-heading"><i class="fa fa-pencil"></i> Edit Form (Step-1)</div>
				<div class="panel-body">
					
					<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" id="form_step_1">
						
						<div class="col-md-6 ln">
							<h4 class="form_header">Personal Information </h4>
								<label><span class="req">* Compulsory Field</span></label> </br></br>
								<input type="hidden" value="<?= $data['army']; ?>" name="army"/>
							
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Rank</label>
								<select name="rank" id="" class="form-control">
									<option value="<?= $data['rank']; ?>"><?= $data['rank']; ?></option>
									<option value="Snk">Snk</option>
									<option value="Lcpl">Lcpl</option>
									<option value="Cpl">Cpl</option>
									<option value="Sgt">Sgt</option>
									<option value="WO">WO</option>
									<option value="SWO">SWO</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Trade</label>
								<input type="text"  class="form-control" name="trade" id="className" value="<?= $data['trade']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name" class="special"><span class="req">*</span> Name </label>
								<input type="text"  class="form-control" name="name" id="className" value="<?= $data['name']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Gender</label>
								<select name="gender" id="" class="form-control" >
									<option value="<?= $data['gender']?>"><?= $data['gender']; ?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Date of birthday</label>
								<input type="text"  class="form-control" name="birthday" id="className" value="<?= $data['birthday']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Height</label>
								<input type="text"  class="form-control" name="height" id="className" value="<?= $data['height']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Weight</label>
								<input type="text"  class="form-control" name="weight" id="className" value="<?= $data['weight']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Blood Group</label>
								<input type="text"  class="form-control" name="blood_group" id="className" value="<?= $data['blood_group']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Personal Mobile Number</label>
								<input type="text"  class="form-control" name="mobile" id="className" value="<?= $data['mobile']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Driving License</label>
								<input type="text"  class="form-control" name="driving_license" value="<?= $data['driving_license']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">NID No</label>
								<input type="text"  class="form-control" name="nid" value="<?= $data['nid']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Passport No</label>
								<input type="text"  class="form-control" name="passport" value="<?= $data['passport']; ?>"/>
							</div>
							<h5 class="sub_head">Permanent Address</h5>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Village</label>
								<input type="text"  class="form-control" name="perm_village" value="<?= $data['perm_village']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> PO</label>
								<input type="text"  class="form-control" name="perm_poffice" value="<?= $data['perm_poffice']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Thana</label>
								<input type="text"  class="form-control" name="perm_pstation" value="<?= $data['perm_pstation']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> District</label>
								<input type="text"  class="form-control" name="perm_district" id="className" value="<?= $data['perm_district']; ?>"/>
							</div>
							
							<h5 class="sub_head">Present Address</h5>
							<div class="form-group">
								<input type="checkbox" name ="fill_thebox" onclick="autoFill(this.form)" /> <span style="margin-left: 30px">Same as above</span>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Village</label>
								<input type="text"  class="form-control" name="pres_village" value="<?= $data['pres_village']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> PO</label>
								<input type="text"  class="form-control" name="pres_poffice" value="<?= $data['pres_poffice']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Thana</label>
								<input type="text"  class="form-control" name="pres_pstation" value="<?= $data['pres_pstation']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> District</label>
								<input type="text"  class="form-control" name="pres_district" value="<?= $data['pres_district']; ?>"/>
							</div>
						</div>
						<div class="col-md-6">
                            
                            
                            <!-- Picture Upload System Start-->
                            
							<div class="form-group">
								<label for="class_name">Picture Upload</label>
								 <img id="blah" src="#" alt="" class="pull-right"/>
								<input type='file' onchange="pic(this);" name="picture" />
								<span><?= $data['picture']; ?></span>
                               
							</div>
                            <!-- Picture Upload End-->
                            
							<h4 class="form_header">Job Information</h4>
							<div class="form-group">
								<label for="class_name">Date of Enrolment</label>
								<input type="text"  class="form-control" name="date_of_enrollment" value="<?= $data['date_of_enrollment']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Date of Present Rank </label>
								<input type="text"  class="form-control" name="dop_rank" value="<?= $data['dop_rank']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Unit Employment (Branch)</label><br>
								<select name="ueb" id="" class="form-control">
									<option value="<?= $data['ueb']; ?>"><?= $data['ueb']; ?></option>
									<option value="Admin">Admin</option>
									<option value="BANet">BA_Net</option>
									<option value="Wifi">Wifi</option>
									<option value="RES_Net">RES_Net</option>
									<option value="IT_Palace">IT_Palace</option>
									<option value="Data_Center">Data_Center</option>
									<option value="RP_Det">RP_Det</option>
									<option value="Centeen">Centeen</option>
									<option value="Garden_Pond">Garden/Pond</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name">Job Condition 1/2013</label>
								<select name="job_condition" id="" class="form-control">
									<option value="<?= $data['job_condition']; ?>"><?= $data['job_condition']; ?></option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name">Service Age</label>
								<input type="text"  class="form-control" name="service_age" value="<?= $data['service_age']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Remaining Service</label>
								<input type="text"  class="form-control" name="remaining_service" value="<?= $data['remaining_service']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Medical Cat</label>
								<input type="text"  class="form-control" name="medical_cat" value="<?= $data['medical_cat']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Date of join (Present Unit)</label>
								<input type="text"  class="form-control" name="date_of_join" value="<?= $data['date_of_join']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Retirement Date </label>
								<input type="text"  class="form-control" name="retirement_date" value="<?= $data['retirement_date']; ?>"/>
							</div>
							<h4 class="form_header">Date of Promotion in Different Rank</h4>
							<div class="form-group">
								<label for="class_name">Snk</label>
								<input type="text"  class="form-control" name="snk" value="<?= $data['snk']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Lcpl</label>
								<input type="text"  class="form-control" name="lpcl" value="<?= $data['lpcl']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Cpl</label>
								<input type="text"  class="form-control" name="spl" value="<?= $data['spl']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Sgt</label>
								<input type="text"  class="form-control" name="sgt" value="<?= $data['sgt']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">WO</label>
								<input type="text"  class="form-control" name="wo" value="<?= $data['wo']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">SWO</label>
								<input type="text"  class="form-control" name="swo" value="<?= $data['swo']; ?>"/>
							</div>
														
							<h4 class="form_header">Family Details</h4>
							<div class="form-group">
								<label for="class_name">Marital Status</label>
								<select name="marital_status" id="" class="form-control" >
									<option value="<?= $data['marital_status']; ?>"><?= $data['marital_status']; ?></option>
									<option value="Married">Married</option>
									<option value="Un-Married">Un-Married</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name">Child</label>
								<input type="text"  class="form-control" name="child" value="<?= $data['child']; ?>"/>
							</div>
							<div class="form-group">
								<label for="class_name">Personel Problems (If any)</label>
								<textarea name="personal_problems" id=""  class="form-control"><?= $data['personal_problems'];?></textarea>
							</div>
							 <h4 class="form_header">Other Information</h4>
							<div class="form-group">
								<label for="class_name">Hobby</label>
								<input type="text"  class="form-control" name="hobby" value="<?= $data['hobby']; ?>"/>
							</div>
							<div class="form-group text-center">
								<br /><br /><br />
								<input type="submit" value="Save and Next" class="btn btn-info" name="save_and_next" id="save_and_next"/>
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



<?php $this->end()?>