<?php
	
	require_once("..\../config/config.php");
	require_once("..\../core/DB.php");
	$db = new database;
	$profile = $_GET['profile'];
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$errorMSG  	   	    = "";
		$name 	  	        =  htmlentities($_POST['name'],ENT_QUOTES);
		$gender 	  	    =  htmlentities($_POST['gender'],ENT_QUOTES);
		$birthday 	  	    =  htmlentities($_POST['birthday'],ENT_QUOTES);
		
		$army 	  	        =  htmlentities($_POST['army'],ENT_QUOTES);
		$desgination 	  	=  htmlentities($_POST['desgination'],ENT_QUOTES);
		$trade 	  	        =  htmlentities($_POST['trade'],ENT_QUOTES);
		
		$height				=  htmlentities($_POST['height'],ENT_QUOTES);
		$weight				=  htmlentities($_POST['weight'],ENT_QUOTES);
		$blood_group		=  htmlentities($_POST['blood_group'],ENT_QUOTES);
		$mobile				=  htmlentities($_POST['mobile'],ENT_QUOTES);		
		$driving_license	=  htmlentities($_POST['driving_license'],ENT_QUOTES);	
		$nid				=  htmlentities($_POST['nid'],ENT_QUOTES);
		$passport			=  htmlentities($_POST['passport'],ENT_QUOTES);
		
		$perm_village 	  	=  htmlentities($_POST['perm_village'],ENT_QUOTES);
		$perm_poffice 	  	=  htmlentities($_POST['perm_poffice'],ENT_QUOTES);
		$perm_pstation 	  	=  htmlentities($_POST['perm_pstation'],ENT_QUOTES);
		$perm_district 	  	=  htmlentities($_POST['perm_district'],ENT_QUOTES);
		
		$pres_village 	  	=  htmlentities($_POST['pres_village'],ENT_QUOTES);
		$pres_poffice 	  	=  htmlentities($_POST['pres_poffice'],ENT_QUOTES);
		$pres_pstation 	  	=  htmlentities($_POST['pres_pstation'],ENT_QUOTES);
		$pres_district 	  	=  htmlentities($_POST['pres_district'],ENT_QUOTES);
		
		$getpic				=  $_FILES['picture'];
		$picture			=  rand(1,1000).time().$getpic['name'];
		
		$date_of_enrollment =  htmlentities($_POST['date_of_enrollment'],ENT_QUOTES);
		$dop_rank			=  htmlentities($_POST['dop_rank'],ENT_QUOTES);
		$ueb			    =  htmlentities($_POST['ueb'],ENT_QUOTES);
		$job_condition		=  htmlentities($_POST['job_condition'],ENT_QUOTES);
		$service_age		=  htmlentities($_POST['service_age'],ENT_QUOTES);
		$remaining_service	=  htmlentities($_POST['remaining_service'],ENT_QUOTES);
		$medical_cat     	=  htmlentities($_POST['medical_cat'],ENT_QUOTES);
		$date_of_join		=  htmlentities($_POST['date_of_join'],ENT_QUOTES);
		$retirement_date	=  htmlentities($_POST['retirement_date'],ENT_QUOTES);
		$snk				=  htmlentities($_POST['snk'],ENT_QUOTES);
		$lpcl				=  htmlentities($_POST['lpcl'],ENT_QUOTES);
		$spl				=  htmlentities($_POST['spl'],ENT_QUOTES);
		$sgt				=  htmlentities($_POST['sgt'],ENT_QUOTES);
		$wo					=  htmlentities($_POST['wo'],ENT_QUOTES);
		$swo				=  htmlentities($_POST['swo'],ENT_QUOTES);
		$marital_status		=  htmlentities($_POST['marital_status'],ENT_QUOTES);
		$child				=  htmlentities($_POST['child'],ENT_QUOTES);
		$personal_problems	=  htmlentities($_POST['personal_problems'],ENT_QUOTES);
		$hobby				=  htmlentities($_POST['hobby'],ENT_QUOTES);
		
		
		//$get_signature				=  $_FILES['signature'];
		//$signature			        =  rand(1,1000).time().$get_signature['name'];

		if(empty($name)){
			$errorMSG .= "<li> Name is required</<li>";
		}
		if(empty($gender)){
			$errorMSG .= "<li> Gender is required</<li>";
		}
		if(empty($birthday)){
			$errorMSG .= "<li> Birthday is required</<li>";
		}
	
		if(empty($rank)){
			$errorMSG .= "<li> Rank is required</<li>";
		}
		if(empty($trade)){
			$errorMSG .= "<li> Trade is required</<li>";
		}
		
		if(empty($perm_village)){
			$errorMSG .= "<li> Permanent village is required</<li>";
		}
		if(empty($perm_poffice)){
			$errorMSG .= "<li> Permanent post office is required</<li>";
		}
		if(empty($perm_pstation)){
			$errorMSG .= "<li> Permanent police station is required</<li>";
		}
		if(empty($perm_district)){
			$errorMSG .= "<li> Permanent district is required</<li>";
		}
		
		if(empty($pres_village)){
			$errorMSG .= "<li> Present village is required</<li>";
		}
		if(empty($pres_poffice)){
			$errorMSG .= "<li> Present post office is required</<li>";
		}
		if(empty($pres_pstation)){
			$errorMSG .= "<li> Present police station is required</<li>";
		}
		if(empty($pres_district)){
			$errorMSG .= "<li> Present district is required</<li>";
		}
		
		
		
		//String validation 
		
		if(!$errorMSG){
			$succcs = [];
			if(!empty($_FILES['picture']['name'])){
				$insert = $db->query("UPDATE ciivl_basic_info SET `name`='$name', `gender`='$gender', `birthday`='$birthday', `desgination`='$desgination', `trade`='$trade', `height`='$height', `weight`='$weight', `blood_group`='$blood_group', `mobile`='$mobile', `driving_license`='$driving_license', `nid`='$nid', `passport`='$passport', `perm_village`='$perm_village', `perm_poffice`='$perm_poffice', `perm_pstation`='$perm_pstation', `perm_district`='$perm_district', `pres_village`='$pres_village', `pres_poffice`='$pres_poffice', `pres_pstation`='$pres_pstation', `pres_district`='$pres_district', `picture`='$picture', `date_of_enrollment`='$date_of_enrollment', `dop_rank`='$dop_rank', `ueb`='$ueb', `job_condition`='$job_condition', `service_age`='$service_age', `remaining_service`='$remaining_service',`medical_cat`='$medical_cat', `date_of_join`='$date_of_join', `retirement_date`='$retirement_date', `snk`='$snk', `lpcl`='$lpcl', `spl`='$spl', `sgt`='$sgt', `wo`='$wo', `swo`='$swo', `marital_status`='$marital_status', `child`='$child', `personal_problems`='$personal_problems', `hobby`='$hobby' WHERE army='$profile'");
			}else{
				$insert = $db->query("UPDATE basic_info SET `name`='$name', `gender`='$gender', `birthday`='$birthday', `desgination`='$desgination', `trade`='$trade', `height`='$height', `weight`='$weight', `blood_group`='$blood_group', `mobile`='$mobile', `driving_license`='$driving_license', `nid`='$nid', `passport`='$passport', `perm_village`='$perm_village', `perm_poffice`='$perm_poffice', `perm_pstation`='$perm_pstation', `perm_district`='$perm_district', `pres_village`='$pres_village', `pres_poffice`='$pres_poffice', `pres_pstation`='$pres_pstation', `pres_district`='$pres_district', `date_of_enrollment`='$date_of_enrollment', `dop_rank`='$dop_rank', `ueb`='$ueb', `job_condition`='$job_condition', `service_age`='$service_age', `remaining_service`='$remaining_service',`medical_cat`='$medical_cat', `date_of_join`='$date_of_join', `retirement_date`='$retirement_date', `snk`='$snk', `lpcl`='$lpcl', `spl`='$spl', `sgt`='$sgt', `wo`='$wo', `swo`='$swo', `marital_status`='$marital_status', `child`='$child', `personal_problems`='$personal_problems', `hobby`='$hobby' WHERE army='$profile'");
			}
			if(!$insert){
					$succcs['scsmsg'] = "Failed to store data";
			}else{
					$succcs['scsmsg'] = "Data successfully stored in database";
					$succcs['post_data'] = $army;
					move_uploaded_file($getpic['tmp_name'],'../uploads/'.$picture);
					//move_uploaded_file($get_signature['tmp_name'],'../uploads/'.$signature);
			}
			
		
			echo json_encode(['code'=>200, 'msg'=>$succcs]);
			exit;
			
		}else{
			echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
		}
		
	}else{
		header("index.html");
	}
?>