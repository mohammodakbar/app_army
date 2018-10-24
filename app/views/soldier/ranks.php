<?php $this->start('body');?>
<!--  Inner breadcrumb start -->
<div class="col-md-12">
	<div class="bread">
        <i class="fa fa-th-large"></i>  <span class="big_font">Soldier </span>
		<span style="font-size:13px;font-weight:300"> | All soldier info </span>
            <a href="<?= PROOT;?>army/profile" class="btn btn-info btn-sm pull-right">See Profile</a>
    </div>
	<br />
	<br />
	<br />
</div>
<!--  Inner breadcrumb end -->

<!--  Global Breadcrumb -->
<!--  Global Breadcrumb end-->
<div class="col-md-12">
	<div class="row">
		<!--  Create class start from here -->
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-condensed">
						<thead>
							<th>Photo</th>
							<th>Name</th>
							<th>Action</th>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="public/images/army-logo.png" alt="" style="width: 40px;height: 40px;"/>
								</td>
								<td>
									hello 
								</td>
								<td >
									<a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
									<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>

						</tbody>
					</table>
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

<?php $this->end()?>