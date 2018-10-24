<?php
	require_once("..\../config/config.php");
	require_once("..\../core/DB.php");
	$db = new database;
	$get_rel_id = $_GET['rel_id'];
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$errorMSG  	   	    = "";
		$insert = true;

		foreach ($_POST['unit'] as $index => $val){
			
			if(!empty($_POST['unit'][$index])){
				
				$unit	 = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM previous_unit WHERE p_unit='$unit'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This unit is already added" ."</li>";
				}else{
					$from 	 = htmlentities($_POST['from'][$index] ,ENT_QUOTES);
					$to 	 = htmlentities($_POST['to'][$index],ENT_QUOTES);
					$app	 = htmlentities($_POST['app'][$index] ,ENT_QUOTES);
					$rel_id  = $get_rel_id;
					$insert = $db->query("INSERT INTO previous_unit (`id`, `p_unit`, `p_from`, `p_to`, `p_app`, `rel_id`) VALUES (NULL,'$unit','$from','$to','$app','$rel_id')");
				}
				
				
			}
			
		}
		
		
		foreach ($_POST['step'] as $index => $val){
			
			if(!empty($_POST['step'][$index])){
				$step	 = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM gsbp WHERE step='$step'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This step is already added" ."</li>";
				}else{
					$date 	 = htmlentities($_POST['date'][$index] ,ENT_QUOTES);
					$rmks 	 = htmlentities($_POST['rmks'][$index] ,ENT_QUOTES);
					$rel_id  = $get_rel_id;
					$insert = $db->query("INSERT INTO gsbp (`id`, `step`, `date`, `rmks`, `rel_id`) VALUES (NULL,'$step','$date','$rmks','$rel_id')");
				}
			}
			
		}
		
		foreach ($_POST['description'] as $index => $val){
			
			if(!empty($_POST['description'][$index])){
				$description	 = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM punishment_description WHERE description='$description'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This step is already added" ."</li>";
				}else{
					$type 	 		 = htmlentities($_POST['type'][$index] ,ENT_QUOTES);
					$rel_id  		 = $get_rel_id;
					$insert			 = $db->query("INSERT INTO punishment_description (`id`, `description`, `type`, `rel_id`) VALUES (NULL,'$description','$type','$rel_id')");
				}
			}
		}
		
		
		foreach ($_POST['exam'] as $index => $val){
			
			if(!empty($_POST['exam'][$index])){
				$exam	     = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM civil_education WHERE exam='$exam'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This step is already added" ."</li>";
				}else{
					$year 	     = htmlentities($_POST['year'][$index] ,ENT_QUOTES);
					$division 	 = htmlentities($_POST['division'][$index] ,ENT_QUOTES);
					$gpa	     = htmlentities($_POST['gpa'][$index] ,ENT_QUOTES);
					$insert 	 = $db->query("INSERT INTO civil_education (`id`, `exam`, `year`, `division`, `gpa`, `rel_id`) VALUES (NULL,'$exam','$year','$division','$gpa','$rel_id')");
				}
			}
			
		}
		foreach ($_POST['course'] as $index => $val){
			
			if(!empty($_POST['course'][$index])){
				$course	     = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM army_training WHERE course='$course'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This course is already added" ."</li>";
				}else{
					$year 	     = htmlentities($_POST['year'][$index] ,ENT_QUOTES);
					$result 	 = htmlentities($_POST['result'][$index] ,ENT_QUOTES);
					$name_of_ins = htmlentities($_POST['name_of_ins'][$index] ,ENT_QUOTES);
					$rel_id  	 = $get_rel_id;
					$insert 	 = $db->query("INSERT INTO army_training (`id`, `course`, `year`, `result`, `name_of_ins`, `rel_id`) VALUES (NULL,'$course','$year','$result','$name_of_ins','$rel_id')");
				}
			}
			
		}
		
		foreach ($_POST['unm_from'] as $index => $val){
			
			if(!empty($_POST['unm_from'][$index])){
				$unm_from	     = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM un_mission WHERE unm_from='$unm_from'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This mission is already added" ."</li>";
				}else{
					$unm_to 	     = htmlentities($_POST['unm_to'][$index] ,ENT_QUOTES);
					$unm_country 	 = htmlentities($_POST['unm_name_of_country'][$index] ,ENT_QUOTES);
					$rel_id 		 = $get_rel_id;
					$insert 	 = $db->query("INSERT INTO un_mission (`id`, `unm_from`, `unm_to`, `unm_country`, `rel_id`) VALUES (NULL,'$unm_from','$unm_to','$unm_country','$rel_id')");
				}
			}
			
		}
		
		foreach ($_POST['name_of_games'] as $index => $val){
			
			if(!empty($_POST['name_of_games'][$index])){
				$name_of_games	  = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM games WHERE name_of_games='$name_of_games'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This games is already added" ."</li>";
				}else{
					$rel_id 		  = $get_rel_id;
					$insert 	 = $db->query("INSERT INTO games (`id`, `name_of_games`, `rel_id`) VALUES (NULL,'$name_of_games','$rel_id')");
				}
			}
			
		}
		foreach ($_POST['nok_name'] as $index => $val){
			
			if(!empty($_POST['nok_name'][$index])){
				$nok_name	     = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM nok WHERE name='$nok_name'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This nok is already added" ."</li>";
				}else{
					$nok_relation 	 = htmlentities($_POST['nok_relation'][$index] ,ENT_QUOTES);
					$nok_parcent 	 = htmlentities($_POST['nok_parcent'][$index] ,ENT_QUOTES);
					$rel_id  		 = $get_rel_id;
					$insert 	 = $db->query("INSERT INTO nok (`id`, `name`, `relations`, `percent`, `rel_id`) VALUES (NULL,'$nok_name','$nok_relation','$nok_parcent','$rel_id')");
				}
			}
			
		}
		foreach ($_POST['rel_name'] as $index => $val){
			
			if(!empty($_POST['rel_name'][$index])){
				$rel_name	     = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM close_relatives WHERE name='$rel_name'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This relative is already added" ."</li>";
				}else{
					$rel_relations 	 = htmlentities($_POST['rel_relations'][$index] ,ENT_QUOTES);
					$rel_mobile 	 = htmlentities($_POST['rel_mobile'][$index] ,ENT_QUOTES);
					$rel_id  		 = $get_rel_id;
					$insert 	 = $db->query("INSERT INTO close_relatives (`id`, `name`, `relation`, `mobile`, `rel_id`) VALUES (NULL,'$rel_name','$rel_relations','$rel_mobile','$rel_id')");
				}
			}
			
		}
		foreach ($_POST['profile_link'] as $index => $val){
			
			if(!empty($_POST['profile_link'][$index])){
				$profile_link	 = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM close_relatives WHERE name='$rel_name'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This relative is already added" ."</li>";
				}else{
					$id_name 	     = htmlentities($_POST['id_name'][$index] ,ENT_QUOTES);
					$rel_id  		 = $get_rel_id;
					$insert 	 = $db->query("INSERT INTO social_id (`id`, `link`, `username`, `rel_id`) VALUES (NULL,'$profile_link','$id_name','$rel_id')");
				}
			}
			
		}
		
		foreach ($_POST['device_name'] as $index => $val){
			
			if(!empty($_POST['device_name'][$index])){
				$device_name	     = $val;
				//Preventing data duplication
				$qri = $db->query("SELECT * FROM device_imei WHERE device_name='$device_name'");
				$count = mysqli_num_rows($qri);
				if($count != 0){
					$errorMSG .="<li>". "This device is already added" ."</li>";
				}else{
					$device_imei 	     = htmlentities($_POST['device_imei'][$index] ,ENT_QUOTES);
					$rel_id  			 = $get_rel_id;
					$insert 	 = $db->query("INSERT INTO device_imei (`id`, `device_name`, `imei`, `rel_id`) VALUES (NULL,'$device_name','$device_imei','$rel_id')");
				}
			}
			
		}
		
		
		
		//String validation 
		
		if(!$errorMSG){
			$succcs = "";
			if(!$insert){
					$succcs['scsmsg'] = "Failed to store data";
			}else{
					$succcs['scsmsg'] = "Data successfully stored in database";
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