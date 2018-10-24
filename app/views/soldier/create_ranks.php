<?php $this->start('body');?>
<script>
    $(document).ready(function (e){
        $("#form_step_1").on('submit',(function(e){
        e.preventDefault();
        $.ajax({
            url: "<?php echo PROOT;?>public/ajax/step-1.php",
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
						$(".display-error>.alert").html("<ul class='nav'>"+data.msg+"</ul>");
						$(".display-error").removeClass('bg_color4');
						$(".display-error").addClass('bg_color2');
						$(".display-error").removeClass('hide');
						$(".display-error").addClass('show');
						setTimeout(' window.location.href = "<?= PROOT;?>soldier/admission/step-2"; ',100);

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
	function autoFill(f) {
	  if(f.fill_thebox.checked == true) {
		f.pres_village.value  = f.perm_village.value;
		f.pres_poffice.value  = f.perm_poffice.value;
		f.pres_pstation.value = f.perm_pstation.value;
		f.pres_district.value = f.perm_district.value;
	  }
	}
</script>

<!--  Inner breadcrumb start -->
<div class="col-md-12">
	<div class="bread">
        <i class="fa fa-th-large"></i>  <span class="big_font">Add Army </span>
		<span style="font-size:13px;font-weight:300"> | Add soldier information </span>
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
				<div class="panel-heading"><i class="fa fa-plus"></i> Addmission From(Step-1)</div>
				<div class="panel-body">
					
					<form action="<?php $SERVER['PHP_SELF'];?>" method="post" id="form_step_1">
						
						<div class="col-md-6 ">
							<h4 class="form_header">Personal Information</h4>
							<div class="form-group">
								<label for="class_name" class="special"><span class="req">*</span> Army No</label>
								<input type="text"  class="form-control" name="army" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Rank</label>
								<input type="text"  class="form-control" name="rank" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Trade</label>
								<input type="text"  class="form-control" name="trade" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name" class="special"><span class="req">*</span> Name </label>
								<input type="text"  class="form-control" name="name" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Gender</label>
								<select name="gender" id="" class="form-control" >
									<option value="">--Select--</option>
									<option value="1">Male</option>
									<option value="0">Female</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Date of birthday</label>
								<input type="text"  class="form-control" name="birthday" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Height</label>
								<input type="text"  class="form-control" name="height" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Weight</label>
								<input type="text"  class="form-control" name="weight" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Blood Group</label>
								<input type="text"  class="form-control" name="blood_group" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Personal Mobile Number</label>
								<input type="text"  class="form-control" name="mobile" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Driving License</label>
								<input type="text"  class="form-control" name="driving_license" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">NID no</label>
								<input type="text"  class="form-control" name="nid" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Passport No</label>
								<input type="text"  class="form-control" name="passport" id="className"/>
							</div>
							<h5 class="sub_head">Permanent Address</h5>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Village</label>
								<input type="text"  class="form-control" name="perm_village" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> PO</label>
								<input type="text"  class="form-control" name="perm_poffice" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Thana</label>
								<input type="text"  class="form-control" name="perm_pstation" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> District</label>
								<input type="text"  class="form-control" name="perm_district" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Picture Upload</label>
								<input type="file"  class="" name="photo" id=""/>
							</div>
							
							
							<h5 class="sub_head">Present Address</h5>
							<div class="form-group">
								<input type="checkbox" name ="fill_thebox" onclick="autoFill(this.form)" /> <span style="margin-left: 30px">Same as above</span>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Village</label>
								<input type="text"  class="form-control" name="pres_village" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> PO</label>
								<input type="text"  class="form-control" name="pres_poffice" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Thana</label>
								<input type="text"  class="form-control" name="pres_pstation" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> District</label>
								<input type="text"  class="form-control" name="pres_district" id="className"/>
							</div>
						</div>
						<div class="col-md-6">
							
							<h4 class="form_header">Jobs Information</h4>
							<div class="form-group">
								<label for="class_name">Date of Enrolment</label>
								<input type="text"  class="form-control" name="date_of_enrollment" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Date of Present Rank </label>
								<input type="text"  class="form-control" name="date_of_present_rank" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Branch Employment (In unit)</label><br>
								<input type="radio" name="Admin" value="Admin"> Admin<br>
								<input type="radio" name="BA_Net" value="BA_Net"> BA Net<br>
								<input type="radio" name="Wifi" value="Wifi"> Wifi<br>
								<input type="radio" name="RES_Net" value="RES_Net"> RES Net<br>
								<input type="radio" name="IT_Palace" value="IT_Palace"> IT Palace<br>
								<input type="radio" name="Data_Center" value="Data_Center"> Data Center<br>
								<input type="radio" name="RP_Det" value="RP_Det"> RP Det<br>
								<input type="radio" name="Centeen" value="Centeen"> Centeen<br>
								<input type="radio" name="Garden_Pond" value="Garden_Pond"> Garden/Pond<br>
							</div>
							<div class="form-group">
								<label for="class_name">Job Condition 1/2013</label>
								<select name="job_condition" id="" class="form-control">
									<option value="">--Select--</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name">Service Age</label>
								<input type="text"  class="form-control" name="service_age" id=""/>
							</div>
							<div class="form-group">
								<label for="class_name">Remaining Service</label>
								<input type="text"  class="form-control" name="remaining_service" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Medical Cat</label>
								<input type="text"  class="form-control" name="medical_cat" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Date of join (Present Unit)</label>
								<input type="text"  class="form-control" name="date_of_join" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Retirement Date </label>
								<input type="text"  class="form-control" name="retirement_date" id="className"/>
							</div>
							<h4 class="form_header">Date of promotion in different designations</h4>
							<div class="form-group">
								<label for="class_name">Snk</label>
								<input type="text"  class="form-control" name="snk" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Lcpl</label>
								<input type="text"  class="form-control" name="lpcl" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Cpl</label>
								<input type="text"  class="form-control" name="spl" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Sgt</label>
								<input type="text"  class="form-control" name="sgt" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">WO</label>
								<input type="text"  class="form-control" name="wo" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">SWO</label>
								<input type="text"  class="form-control" name="swo" id="className"/>
							</div>
														
							<h4 class="form_header">Family Details</h4>
							<div class="form-group">
								<label for="class_name">Marital Status</label>
								<select name="marital_status" id="" class="form-control" >
									<option value="Married">Married</option>
									<option value="Un-Married">Un-Married</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name">Child</label>
								<input type="text"  class="form-control" name="child" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Personel Problems(If any)</label>
								<textarea name="personal_problems" id=""  class="form-control"></textarea>
							</div>
							 <h4 class="form_header">Other Information</h4>
							<div class="form-group">
								<label for="class_name">Hobby</label>
								<input type="text"  class="form-control" name="className" id="className"/>
							</div>
							<div class="form-group text-center">
								<br /><br /><br />
								<input type="submit" value="Save and Next" class="btn btn-info" name="save_and_next" id="className"/>
								<input type="submit" value="Save"  class="btn btn-success" name="only_save" id="className"/>
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