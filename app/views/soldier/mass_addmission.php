<?php $this->start('body');?>
<!--  Inner breadcrumb start -->
<div class="col-md-12">
	<div class="bread">
        <i class="fa fa-th-large"></i>  <span class="big_font">Add Army </span>
		<span style="font-size:13px;font-weight:300"> | Add multiple soldier information </span>
            <a href="<?= PROOT;?>army/profile" class="btn btn-info btn-sm pull-right">See Profile</a>
    </div>
	<br />
	<br />
	<br />
</div>

<div class="col-md-12">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-plus"></i> Massive Regsitration Form</div>
			<div class="panel-body">
				<form action="#" method="post" id="create_class">
					<div class="input_fields_wrap3" >
						<div class="row" >
							<div class="field">
								<div class="col-md-3">
									<div class="form-group">
										<label for="class_name">Name</label>
										<input type="text"  class="form-control" name="className" id="className"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="class_name">Army Number</label>
										<input type="text"  class="form-control" name="className" id="className"/>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="class_name">Rank</label>
										<select id="" required="" class="form-control" name="class_id" id="class_id">
											<option value="Snk">---Seclect---</option>
											<option value="Snk">Snk</option>
											<option value="Lcpl">Lcpl</option>
											<option value="Cpl">Cpl</option>
											<option value="Sgt">Sgt</option>
											<option value="WO">WO</option>
											<option value="SWO">SWO</option>
											<option value="MWO">MWO</option>
											<option value="2Lt">2Lt</option>
											<option value="Lt">Lt</option>
											<option value="Capt">Capt</option>
											<option value="Maj">Maj</option>
											<option value="Lt_Col">Lt Col</option>
											<option value="Col">Col</option>
											<option value="Brig">Brig</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="class_name">Trade</label>
										<select id="" required="" class="form-control" name="class_id" id="class_id">
											<option value="OP">---Seclect---</option>
											<option value="OP">OP</option>
											<option value="Techician">Techician</option>
											<option value="Line_Man">WS</option>
											<option value="Line_Man">DS/MT</option>
											<option value="Line_Man">SMT/SMS</option>
											<option value="Line_Man">DTMN</option>
											<option value="Line_Man">CNJ</option>
											<option value="Line_Man">E&BR</option>
											<option value="Line_Man">AE</option>
											<option value="Line_Man">OAP</option>
											<option value="Line_Man">DSB</option>
											<option value="Line_Man">DMT</option>
											<option value="Line_Man">Meshinist</option>
											<option value="Line_Man">Electician</option>
											<option value="Line_Man">Painter</option>
											<option value="Line_Man">Brash Band</option>
											<option value="Line_Man">Pipe Band</option>
											<option value="Line_Man">NCE</option>
											<option value="Line_Man">Cook Mess</option>
											<option value="Line_Man">Cook Unit</option>
											<option value="Clk">Clk</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<a href="" class="add_field_button3 btn btn-info" id="addScnt" style="margin-top:20px "><i class="fa fa-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br /><br />
					<div class="text-right">
						
						<input type="submit" value="Submit" class="btn btn-success" style="padding: 10px 35px"/>
					</div>
				</form>
			</div>
		</div>
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
    var wrapper         = $(".input_fields_wrap3"); //Fields wrapper
    var add_button      = $(".add_field_button3"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).on("click",function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="field"><div class="col-md-3"><div class="form-group"><label for="class_name">Name</label><input type="text"  class="form-control" name="className" id="className"/></div></div><div class="col-md-3"><div class="form-group"><label for="class_name">Army Number</label><input type="text"  class="form-control" name="className" id="className"/></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">Rank</label><select id="" required="" class="form-control" name="class_id" id="class_id"><option value="Snk">---Seclect---</option><option value="Snk">Snk</option><option value="Lcpl">Lcpl</option><option value="Cpl">Cpl</option><option value="Sgt">Sgt</option><option value="WO">WO</option><option value="SWO">SWO</option><option value="MWO">MWO</option><option value="2Lt">2Lt</option><option value="Lt">Lt</option><option value="Capt">Capt</option><option value="Maj">Maj</option><option value="Lt_Col">Lt Col</option><option value="Col">Col</option><option value="Brig">Brig</option></select></div></div><div class="col-md-2"><div class="form-group"><label for="class_name">Trade</label><select id="" required="" class="form-control" name="class_id" id="class_id"><option value="OP">---Seclect---</option><option value="OP">OP</option><option value="Techician">Techician</option><option value="Line_Man">WS</option><option value="Line_Man">DS/MT</option><option value="Line_Man">SMT/SMS</option><option value="Line_Man">DTMN</option><option value="Line_Man">CNJ</option><option value="Line_Man">E&BR</option><option value="Line_Man">AE</option><option value="Line_Man">OAP</option><option value="Line_Man">DSB</option><option value="Line_Man">DMT</option><option value="Line_Man">Meshinist</option><option value="Line_Man">Electician</option><option value="Line_Man">Painter</option><option value="Line_Man">Brash Band</option><option value="Line_Man">Pipe Band</option><option value="Line_Man">NCE</option><option value="Line_Man">Cook Mess</option><option value="Line_Man">Cook Unit</option><option value="Clk">Clk</option></select></div></div><div class="col-md-2"><div class="form-group"></div></div></div><a href="#" class="remove_field btn btn-danger" style=""><i class="fa fa-times" ></i></a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })


});
</script>
<?php $this->end()?>