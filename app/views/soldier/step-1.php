<?php $this->start('body');?>
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
            url: "<?= PROOT;?>public/ajax/step-1.php",
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
						window.location.href = '<?= PROOT;?>soldier/admission/step-2/?rel_id='+link;

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
				<div class="panel-heading"><i class="fa fa-plus"></i> Addmission Form (Step-1)</div>
				<div class="panel-body">
					
					<form action="<?php $SERVER['PHP_SELF'];?>" method="post" id="form_step_1">
						
						<div class="col-md-6 ln">
							<h4 class="form_header">Personal Information </h4>
								<label><span class="req">* Compulsory Field</span></label> </br></br>
							<div class="form-group">
								<label for="army" class="special"><span class="req">*</span> Army No</label>
								<input type="text"  class="form-control" name="army" id="army"/>
							</div>
							<div class="form-group">
								<label for="class_name"><span class="req">*</span> Rank</label>
								<select name="rank" id="" class="form-control">
									<option value="">-- Select --</option>
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
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							<div class="form-group datePicker">
								<label for="class_name"><span class="req">*</span> Date of birthday</label>
								<input type="text" placeholder="DD/MM/YYYY" class="form-control datepicker" name="birthday" id="className" readonly=""/>
							</div>
							<div class="form-group">
								<label for="class_name">Height</label>
								<input type="text" placeholder="5' 6''" class="form-control" name="height" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Weight</label>
								<input type="text" placeholder="61 KG/ 135 Pounds" class="form-control" name="weight" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Blood Group</label>
								<input type="text" placeholder="O+" class="form-control" name="blood_group" id="className"/>
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
								<label for="class_name">NID No</label>
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
                            
                            
                            <!-- Picture Upload System Start-->
                            
							<div class="form-group">
								<label for="class_name">Picture Upload</label>
								 <img id="blah" src="#" alt="" class="pull-right"/>
								<input type='file' onchange="pic(this);" name="picture" />
                               
							</div>
                            <!-- Picture Upload End-->
                            
							<h4 class="form_header">Job Information</h4>
							<div class="form-group">
								<label for="class_name">Date of Enrolment</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="date_of_enrollment" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Date of Present Rank </label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="dop_rank" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Unit Employment (Branch)</label><br>
								<select name="ueb" id="" class="form-control">
									<option value="">-- Select --</option>
									<option value="Admin">Admin</option>
									<option value="BA_Net">BA_Net</option>
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
									<option value="">--Select--</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
							<div class="form-group">
								<label for="class_name">Service Age</label>
								<input type="text" placeholder="00" class="form-control" name="service_age" id=""/>
							</div>
							<div class="form-group">
								<label for="class_name">Remaining Service</label>
								<input type="text" placeholder="00" class="form-control" name="remaining_service" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Medical Cat</label>
								<input type="text" placeholder="A Ayee" class="form-control" name="medical_cat" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Date of join (Present Unit)</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="date_of_join" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Retirement Date </label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="retirement_date" id="className"/>
							</div>
							<h4 class="form_header">Date of Promotion in Different Rank</h4>
							<div class="form-group">
								<label for="class_name">Snk</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="snk" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Lcpl</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="lpcl" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Cpl</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="spl" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">Sgt</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="sgt" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">WO</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="wo" id="className"/>
							</div>
							<div class="form-group">
								<label for="class_name">SWO</label>
								<input type="text" placeholder="DD-MM-YYYY" class="form-control" name="swo" id="className"/>
							</div>
                            
				            <!-- start -->						
							<h4 class="form_header">Family Details</h4>
							<div class="form-group">
								<label for="class_name">Marital Status</label>
								<select name="marital_status" id="marital_status" class="form-control" >
                                    <option value="">-- Select --</option>
									<option value="Married">Married</option>
									<option value="Un-Married">Un-Married</option>
								</select>
							</div>
							<div class="form-group child_div hidden">
								<label for="class_name">Child</label>
								<input type="text"  class="form-control" name="child" id="child"/>
							</div><!-- end -->
                            
							<div class="form-group">
								<label for="class_name">Personel Problems (If any)</label>
								<textarea name="personal_problems" id=""  class="form-control"></textarea>
							</div>
							 <h4 class="form_header">Other Information</h4>
							<div class="form-group">
								<label for="class_name">Hobby</label>
								<input type="text"  class="form-control" name="hobby" id="hobby"/>
							</div>
							<div class="form-group">
								<label for="class_name">Signature Upload</label>
								 <img  id="signature" src="#" alt="" class="pull-right"/>
								<input type='file' onchange="signature(this);" name="signature"/>
                               
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
<script>
    $(document).ready(function(){
     
    
    $('body').on('change','#marital_status',function(){
        
      
    var maritStatus= $('#marital_status').val();
         
        if(maritStatus =='Married'){
            
            
            $('.child_div').removeClass('hidden');
            $('#child').val('');
            
            
        
        }else{
          $('.child_div').addClass('hidden');
             $('#child').val('');
        }
        
        
    
    });
    });

</script>



<?php $this->end()?>