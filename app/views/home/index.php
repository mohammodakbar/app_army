<?php $this->start('head');?>
<meta charset="UTF-8" />
<?php $this->end();?>

<?php $this->start('body');?>
<?php 
	require_once(ROOT. '/core/DB.php');
	$db 	= new database;
	$snk    = "snk";
	$lcpl   = "lcpl";
	$cpl    = "cpl";
	$sgt    = "sgt";
	$wo     = "wo";
	$swo    = "swo";
	
	
	$q_snk   = $db->query("SELECT * FROM basic_info WHERE rank='$snk'");
	$q_lcpl  = $db->query("SELECT * FROM basic_info WHERE rank='$lcpl'");
	$q_cpl   = $db->query("SELECT * FROM basic_info WHERE rank='$cpl'");
	$q_sgt   = $db->query("SELECT * FROM basic_info WHERE rank='$sgt'");
	$q_wo  	 = $db->query("SELECT * FROM basic_info WHERE rank='$wo'");
	$q_swo 	 = $db->query("SELECT * FROM basic_info WHERE rank='$swo'");
	
	$c_snk 	= mysqli_num_rows($q_snk);
	$c_lcpl = mysqli_num_rows($q_lcpl);
	$c_cpl 	= mysqli_num_rows($q_cpl);
	$c_sgt 	= mysqli_num_rows($q_sgt);
	$c_wo 	= mysqli_num_rows($q_wo);
	$c_swo 	= mysqli_num_rows($q_swo);
?>
<script>
    $(document).ready(function (e){
		
        $(".modal_data").on('click',(function(e){
			 var dataType = $(this).attr('id');
			 function modalData(page, amount,active){
					$.ajax({
						url: "<?= PROOT; ?>public/ajax/modal_data.php",
						method: 'POST',
						cache: false,
						beforeSend: function() {
						$('.overlay').show();
					  },
					  complete: function(){
						 $('.overlay').hide();
					  },
						data: {
							page: page,amount: amount, dataType : dataType
						},
						success: function(res){
							$('#display_data').html(res);
							$("#edit_data").modal("show");
						}
					});
				}
			
			//Pagination click
			$(document).on('click', '.pagination', function(){
				$page = $(this).attr('id');
				modalData($page);
			});
			modalData();
        }));
		

		
	
    });
	 
	$(document).ready(function(e) {
		$(".print").click(function(){
				$("#display_data").printThis({
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
<!-- Sidebar start -->

<!-- Data palette area div starts here -->

<div class="data_palette_bar">
	
</div>
<div class="col-md-12">
	<div class="collapse data_plt" id="data_plt">
		<div class="panel panel-default ">
			<div class="panel-body small">
				<form action="" method="post">
					<div class="col-md-3">
						<ul class="nav">
							<li><input type="checkbox" value="" /> #</li>
							<li><input type="checkbox" value="" /> #</li>
							<li><input type="checkbox" value="" /> #</li>
							<li><input type="checkbox" value="" /> #</li>
							<li><input type="checkbox" value="" /> #</li>
						</ul>
					</div>

					<div class="data_buttons">
						<br />
						<a class="btn btn-danger btn-sm pull-right" type="button" role="button" data-toggle="collapse" href="#data_plt" aria-expanded="true"/>Cancel</a>
						<input type="submit" value="Submit" class="btn btn-sm btn-info pull-right"/>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<!-- Data palette area div ends here -->
<!-- Summery area start -->
<div class="divider">
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="content_counter bg_color4">
				<div class="left_icon">
					<i class="fa fa-users"></i>
				</div>
				<div class="right_content">
					<div style="font-size:25px"><?= $c_snk; ?></div>
				</div>
			</div>
			<div class="links"><a href="#" class="modal_data" id="snk" ><i class="fa fa-eye"></i> Snk</a></div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="content_counter bg_color4">
				<div class="left_icon">
					<i class="fa fa-users"></i>
				</div>
				<div class="right_content">
					<div style="font-size:25px"><?= $c_lcpl; ?></div>
				</div>
			</div>
			<div class="links"><a href="#" class="modal_data" id="lcpl"  ><i class="fa fa-eye"></i> Lcpl</a></div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="content_counter bg_color4">
				<div class="left_icon">
					<i class="fa fa-users"></i>
				</div>
				<div class="right_content">
					<div style="font-size:25px"><?= $c_cpl; ?></div>
				</div>
			</div>
			<div class="links"><a href="#" class="modal_data" id="cpl"><i class="fa fa-eye"></i> Cpl</a></div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="content_counter bg_color4">
				<div class="left_icon">
					<i class="fa fa-users"></i>
				</div>
				<div class="right_content">
					<div style="font-size:25px"><?= $c_sgt; ?></div>
				</div>
			</div>
			<div class="links"><a href="#" class="modal_data" id="sgt"><i class="fa fa-eye"></i> Sgt</a></div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="content_counter bg_color4">
				<div class="left_icon">
					<i class="fa fa-users"></i>
				</div>
				<div class="right_content">
					<div style="font-size:25px"><?= $c_wo; ?></div>
				</div>
			</div>
			<div class="links"><a href="#" class="modal_data" id="wo"><i class="fa fa-eye"></i> WO</a></div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="panel panel-default">
			<div class="content_counter bg_color4">
				<div class="left_icon">
					<i class="fa fa-users"></i>
				</div>
				<div class="right_content">
					<div style="font-size:25px"><?= $c_swo; ?></div>
				</div>
			</div>
			<div class="links"><a href="#" class="modal_data" id="swo"><i class="fa fa-eye"></i> SWO</a></div>
		</div>
	</div>
</div>
<!-- Summery area end -->

<!--  Modal for data edit -->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_data">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-th-large"></i> Soldier short info</h4>
      </div>
	 
	  <div style="width: 100%; display: inline-block; padding: 20px 0px">
		<div class="col-md-3">
			<!--
				<select name="data_per_page" id="data_per_page" class=" data_per_page form-control">
				<option value='10'>10</option>
				<option value='5'>5</option>
				<option value='20'>20</option>
				<option value='30'>30</option>
				<option value='50'>50</option>
			</select>
			-->
		</div>
		<div class="col-md-9 ">
			 <span class="pull-right" style=""><i class='fa fa-print btn btn-large btn-danger print '></i></span>
		</div>
	  </div>
	  <div id="display_data"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal for data edit -->


<?php $this->end();?>
