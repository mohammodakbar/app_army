	function autoFill(f) {
	  if(f.fill_thebox.checked == true) {
		f.pres_village.value  = f.perm_village.value;
		f.pres_poffice.value  = f.perm_poffice.value;
		f.pres_pstation.value = f.perm_pstation.value;
		f.pres_district.value = f.perm_district.value;
	  }
	}
	// Slim Scroll for sidebar nav
	$(function(){
		$('#sidebar').slimScroll({
		height: '600px'
		});
	});

	//Window load
	$(window).load(function(){
		$(".preloader").delay(2000).fadeOut();
	});

	$(window).load(function(){
		$(".spn_body").delay(1000).fadeOut();
	});

	//All Toggle class goes here
	$(document).ready(function(){
	//sidebar toggle class
	$(".toggle_icon").click(function(){$(".sidebar_wrapper").toggleClass("narrow");});
	$(".toggle_icon").click(function(){$(".sidebar_wrapper").toggleClass("mobile");});
	$('.sidebar_wrapper').hover(
		   function(){ $(this).removeClass('narrow') }
	)
	//Alert MSG hiding script
	$(".my_style").click(function(){
		$(".display-error").removeClass("show");
		$(".display-error").addClass("hide");
	});
	$(".my_style").click(function(){
		$(".error_msg").removeClass("show");
		$(".error_msg").addClass("hide");
	});
	
	$(".temp_msg").fadeOut(4000);
	//$(".display-error>.alert").fadeOut(20000);
	$('.datePicker input').datepicker({
		format: 'mm/dd/yyyy',
		todayHighlight: true
	});
	
	//$(".display-error").hide(100);

});

$(document).ready(function(e) {
   //select all checkboxes
	$("#select_all").change(function(){  //"select all" change
		$(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status
	});
	//Date Pciker JS


	$(function(){

	//".checkbox" change
	$('.checkbox').change(function(){
		//uncheck "select all", if one of the listed checkbox item is unchecked
		if(false == $(this).prop("checked")){ //if this item is unchecked
			$("#select_all").prop('checked', false); //change "select all" checked status to false
		}
		//check "select all" if all checkbox items are checked
		if ($('.checkbox:checked').length == $('.checkbox').length ){
			$("#select_all").prop('checked', true);
		}
	});

});

	// Confirm	Delete
	function checkDelete(){
	    return confirm('Are you sure?');
	}



 });

 function mark_all_present() {
	 var count = 300;

	 for(var i = 0; i < count; i++)
		 $('#status_' + i).val("1");
 }
 function mark_all_absent() {
	var count = 300;

	for(var i = 0; i < count; i++)
		$('#status_' + i).val("2");
  }
