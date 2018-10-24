<?php $this->start('body');?>
<?php 
	require_once(ROOT. '/core/DB.php');
	$db 	= new database;
	$show = $_GET['show'];
	$sel	= $db->query("SELECT * FROM basic_info  WHERE army='$show'");
	$count  = mysqli_num_rows($sel);
	$profile = $db->fetch($sel);
	if($count == 0){
		die('Invalid data');
		
	}
	
?>
<script type="text/javascript">
$(document).ready(function(e) {
	$(".print").click(function(){
			$("#DivIdToPrint").printThis({
			debug: false,               // show the iframe for debugging
			importCSS: true,            // import parent page css
			importStyle: true,         // import style tags
			printContainer: true,       // print outer container/$.selector
			loadCSS: "",                // path to additional css file - use an array [] for multiple
			pageTitle: "",              // add title to print page
			removeInline: false,        // remove inline styles from print elements
			removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
			printDelay: 333,            // variable print delay
			header: null,               // prefix to html
			footer: null,               // postfix to html
			base: false,                // preserve the BASE tag or accept a string for the URL
			formValues: true,           // preserve input/form values
			canvas: false,              // copy canvas content
			doctypeString: '...',       // enter a different doctype for older markup
			removeScripts: false,       // remove script tags from print content
			copyTagClasses: false,      // copy classes from the html & body tag
			beforePrintEvent: null,     // function for printEvent in iframe
			beforePrint: null,          // function called before iframe is filled
			afterPrint: null            // function called before iframe is removed
		});
	});


});

</script>
<div class="col-md-12">
	<div class="bread">
        <i class="fa fa-user"></i>  <span class="big_font"> Army Profile
			<span style="font-size:13px;font-weight:300"> | Explore  army profile</span>
            <div class="pull-right">
				
                <a href="#" class="btn btn-danger btn-sm print" > <i class="fa fa-print"></i> Print</a>
               
				<a href="<?= PROOT; ?>soldier" class="btn btn-info btn-sm"> <i class="fa fa-angle-left"></i> Back</a>
            </div>
    </div>
</div>
<div class="col-md-12">
	<div class="data_palette_bar">
		<span  class="brdcumb_btn"><i class="fa fa-home"></i> Home	</span>
		<div id="loader" class="" style=""><img src="preloader.gif" alt="" /></div>

	</div>
</div>
<div class="col-md-12">
	<div class="display-error hide" >
		<div class="alert ">

		</div>
		<span class='my_style'><i class='fa fa-times'></i></span>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
	</div>
</div>
<div class="col-md-12 " id='DivIdToPrint'>
    <div class="panel panel-default" >
        <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-5">
                <div class="thumbnail" style="background: #ddd;height:240px" >
                  <img src="<?= PROOT;?>public/uploads/<?= $profile['picture'];?>" alt="">
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
							 <tr  class="success">
                                <td colspan="2"><h5>Basic information</h5></td>
                            </tr>
                            <tr>
                                <th width="30%">Army No</th>
                                <td>: <?= $profile['army'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Rank</th>
                                <td>: <?= $profile['rank'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Trade</th>
                                <td>: <?= $profile['trade'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Full Name</th>
                                <td>: <?= $profile['name'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Gender</th>
                                <td>: <?= $profile['gender'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Birthday</th>
                                <td>: <?= $profile['birthday'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Height</th>
                                <td>:  <?= $profile['height'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Weight</th>
                                <td>: <?= $profile['weight'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Blood Group</th>
                                <td>: <?= $profile['blood_group'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Mobile Number</th>
                                <td>: <?= $profile['mobile'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Driving License No</th>
                                <td>: <?= $profile['driving_license'];?></td>
                            </tr>
							<tr>
                                <th width="30%">NID No</th>
                                <td>: <?= $profile['nid'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Passport No</th>
                                <td>: <?= $profile['passport'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Permanent Village</th>
                                <td>: <?= $profile['perm_village'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Permanent PO </th>
                                <td>: <?= $profile['perm_poffice'];?></td>
                            </tr>
                            <tr>
                                <th width="30%">Permanent Thana </th>
                                <td>: <?= $profile['perm_pstation'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Permanent District</th>
                                <td>: <?= $profile['perm_district'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Present Village</th>
                                <td>: <?= $profile['pres_village'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Present PO</th>
                                <td>: <?= $profile['pres_poffice'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Present Thana</th>
                                <td>: <?= $profile['pres_pstation'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Present District</th>
                                <td>: <?= $profile['pres_district'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Date of Enrollment</th>
                                <td>: <?= $profile['date_of_enrollment'];?></td>
                            </tr>
							<tr>
                                <th width="30%">DOP Rank</th>
                                <td>: <?= $profile['dop_rank'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Unit Employment (Branch)</th>
                                <td>: <?= $profile['ueb'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Job Condition</th>
                                <td>: <?= $profile['job_condition'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Service Age</th>
                                <td>: <?= $profile['service_age'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Remaining Service</th>
                                <td>: <?= $profile['remaining_service'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Date of Join</th>
                                <td>: <?= $profile['date_of_join'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Retirement Date</th>
                                <td>: <?= $profile['retirement_date'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Snk</th>
                                <td>: <?= $profile['snk'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Lpcl</th>
                                <td>: <?= $profile['lpcl'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Cpl</th>
                                <td>: <?= $profile['spl'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Sgt</th>
                                <td>: <?= $profile['sgt'];?></td>
                            </tr>
							<tr>
                                <th width="30%">WO</th>
                                <td>: <?= $profile['wo'];?></td>
                            </tr>
							<tr>
                                <th width="30%">SWO</th>
                                <td>: <?= $profile['swo'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Marital Status</th>
                                <td>: <?= $profile['marital_status'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Child</th>
                                <td>: <?= $profile['child'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Personal Problems</th>
                                <td>: <?= $profile['personal_problems'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Hobby</th>
                                <td>: <?= $profile['hobby'];?></td>
                            </tr>
							<tr>
                                <th width="30%">Signature</th>
                                <td>: <img src="<?= PROOT;?>public/uploads/<?= $profile['signature'];?>" alt="" width="80px;height:80px"/></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
			<div class="col-md-6">
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Previous Unit</h5></td>
						</tr>
						<tr>
							<th>Unit</th>
							<th>From</th>
							<th>To</th>
							<th>App</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM previous_unit WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['p_unit']?></td>
								<td><?= $data['p_from']?></td>
								<td><?= $data['p_to']?></td>
								<td><?= $data['p_app']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>GSBP (Good Service Basic Pay)</h5></td>
						</tr>
						<tr>
							<th>Step</th>
							<th>Date</th>
							<th>Rmks</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM gsbp WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['step']?></td>
								<td><?= $data['date']?></td>
								<td><?= $data['rmks']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Punishment Description</h5></td>
						</tr>
						<tr>
							<th>Description</th>
							<th>Type</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM punishment_description WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['description']?></td>
								<td><?= $data['type']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Civil Education</h5></td>
						</tr>
						<tr>
							<th>Exam</th>
							<th>Year</th>
							<th>Division</th>
							<th>GPA</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM civil_education WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['exam']?></td>
								<td><?= $data['year']?></td>
								<td><?= $data['division']?></td>
								<td><?= $data['gpa']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Army Training</h5></td>
						</tr>
						<tr>
							<th>Course</th>
							<th>Year</th>
							<th>Result</th>
							<th>Name of Ins</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM army_training WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['course']?></td>
								<td><?= $data['year']?></td>
								<td><?= $data['result']?></td>
								<td><?= $data['name_of_ins']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>UN-Mission</h5></td>
						</tr>
						<tr>
							<th>From</th>
							<th>to</th>
							<th>name of country</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM un_mission WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['unm_from']?></td>
								<td><?= $data['unm_to']?></td>
								<td><?= $data['unm_country']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Games</h5></td>
						</tr>
						<tr>
							<th>Name of Games</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM games WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['name_of_games']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>NOK</h5></td>
						</tr>
						<tr>
							<th>Name</th>
							<th>Relations</th>
							<th>%</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM nok WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['name']?></td>
								<td><?= $data['relations']?></td>
								<td><?= $data['percent']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Close relatives: (Any five)</h5></td>
						</tr>
						<tr>
							<th>Name</th>
							<th>Relation</th>
							<th>Mobile</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM close_relatives WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['name']?></td>
								<td><?= $data['relation']?></td>
								<td><?= $data['mobile']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Social Network ID</h5></td>
						</tr>
						<tr>
							<th>Profile Link</th>
							<th>Name on ID</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM social_id WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['link']?></td>
								<td><?= $data['username']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
					<table class="table table-bordered">
						<tr class="success">
							<td colspan="4"><h5>Used Devices IMEI Numbers</h5></td>
						</tr>
						<tr>
							<th>Device Name</th>
							<th>IMEI Number</th>
						</tr>
						<tr>
							<?php 
								$sel = $db->query("SELECT * FROM device_imei WHERE rel_id='$show' ");
								//$count = mysqli_num_rows($sel);
								while($data = $db->fetch($sel)){
							?>
							<tr>
								<td><?= $data['device_name']?></td>
								<td><?= $data['imei']?></td>
							</tr>
							<?php }?>
						</tr>
					</table>
              </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>