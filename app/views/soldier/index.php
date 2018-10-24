<?php $this->start('body');?>
<?php
	require_once(ROOT. '/core/DB.php');
	$db = new database;
	$qri = $db->query("SELECT * FROM basic_info ORDER BY id DESC");
	$count = mysqli_num_rows($qri);
	
?>
<script>


    $(document).ready(function (e){

        //Auto Load data after page loaded
        function load_data(page, amount,active){
            var amount = $("#data_per_page").val();
            var studentType = $("#studentType").val();
            $.ajax({
                url: "<?= PROOT; ?>public/ajax/load_soldier.php",
                method: 'POST',
                cache: false,
                beforeSend: function() {
                $('.overlay').show();
              },
              complete: function(){
                 $('.overlay').hide();
              },
                data: {
                    page: page,amount: amount, studentType:studentType
                },
                success: function(res){
                    $('#display_data').html(res);
                }
            });
        }

        load_data();

        //Pagination click
        $(document).on('click', '.pagination', function(){
            $page = $(this).attr('id');
            load_data($page);
        });


        //Manually refresh
         $('#data_refresh').click(function(e){

            $.ajax({
                type: "POST",
                url: "<?= PROOT; ?>public/ajax/load_soldier.php",
                dataType: "html",
                cache: false,
                beforeSend: function() {
                    $('.overlay').show();
                  },
                  complete: function(){
                     $('.overlay').hide();
                  },
                success : function(response){
                    $('#students_data').html(response);
                    load_data();
                }
            });

        });
        //Data Per page


        function dataPerPage(page, amount){
            $('#data_per_page').change(function(){
                var amount = $(this).val();
                //alert(cls);
                $.ajax({
                    url: "<?= PROOT;?>public/ajax/load_soldier.php",
                    method: "POST",
                    data: {amount: amount,page: page},
                    dataType: "html",
                    cache: false,
                    beforeSend: function() {
                        $('.overlay').show();
                      },
                      complete: function(){
                         $('.overlay').hide();
                      },
                    success: function(data){
                        //alert(data)
                        $('#display_data').html(data);
                    }
                });
            });
        }

        dataPerPage();

		
    });

</script>
<script>

	$(function(){
		$(document).on('click','.trash',function(){

			var conf = confirm("Are you sure?");

			if(conf == true){
			var del_id= $(this).attr('id');
			var $ele = $(this).parent().parent();

			$.ajax({
				type:'POST',
				url: "<?= PROOT;?>public/ajax/delete.php",
				dataType: 'JSON',
				data:{'del_id':del_id},
				cache: false,
				success: function(data){
					if (data.code == "200"){
						$(".display-error>.alert").html("<ul class='nav'>"+data.scsmsg['scsmsg']+"</ul>");
						$(".display-error").removeClass('bg_color4');
						$(".display-error").addClass('bg_color2');
						$(".display-error").removeClass('hide');
						$(".display-error").addClass('show');
						function reload(){
							 $.ajax({
								type: "POST",
								url: "<?= PROOT;?>public/ajax/load_soldier.php",
								beforeSend: function() {
									$('.overlay').show();
								  },
								  complete: function(){
									 $('.overlay').hide();
								  },
								 success : function(response){
								$('#display_data').html(response);
								}
							})
						}
						reload();

					} else {

						$(".display-error>.alert").html("<ul class='nav'>"+data.scsmsg['scsmsg']+"</ul>");
						$(".display-error").removeClass('bg_color2');
						$(".display-error").addClass('bg_color4');
						$(".display-error").removeClass('hide');
						$(".display-error").addClass('show');

					}


				 }

				});
			}
		});
	});

</script>

<!--  Inner breadcrumb start -->
<div class="col-md-12">
	<div class="bread">
        <i class="fa fa-th-large"></i>  <span class="big_font">Soldier </span>
		<span style="font-size:13px;font-weight:300"> | All soldier info </span>
            <a href="<?= PROOT;?>soldier/admission/step-1/" class="btn btn-info btn-sm pull-right">Add Soldier</a>
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
					<div class="row well " style="margin-top:-15px">
						<div class="col-md-2 ">
							<span>Data Amount</span>
							<select name="data_per_page" id="data_per_page" style="border: 1px solid #eee; padding: 5px "
								<option value='10'>10</option>
								<option value='5'>5</option>
								<option value='20'>20</option>
								<option value='30'>30</option>
								<option value='50'>50</option>
							</select>
						</div>
                        <div class="col-md-2 ">
							<span>Age :</span>
							<select name="data_per_page" id="data_per_page" style="border: 1px solid #eee; padding: 5px "
								<option value='25'>25 Yrs</option>
								<option value='30'>30 Yrs</option>
								<option value='35'>35 Yrs</option>
								<option value='40'>40 Yrs</option>
								<option value='45'>45 Yrs</option>
							</select>
						</div>
                        <div class="col-md-3 ">
							<span>Service Age :</span>
							<select name="data_per_page" id="data_per_page" style="border: 1px solid #eee; padding: 5px "
								<option value='5'>05 Yrs</option>
								<option value='10'>10 Yrs</option>
								<option value='15'>15 Yrs</option>
								<option value='20'>20 Yrs</option>
								<option value='25'>25 Yrs</option>
								<option value='30'>30 Yrs</option>
								<option value='35'>35 Yrs</option>
							</select>
						</div>
	
						<div class="col-md-2 col-md-offset-3">
							<span id="data_refresh" class="pull-right"><i class="fa fa-refresh" style="font-size: 23px;margin-right:30px;margin-top:10px"></i></span>
						</div>
					</div>
					<br />
					<div id="display_data">
						
					</div>
				</div>
			</div>
		</div>
		<!--  Create class ends here -->
		<!-- Class list start -->
		
		<!-- Class list end -->
	</div>

</div>



<?php $this->end()?>