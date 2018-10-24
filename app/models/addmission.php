<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$errorMSG  	   	    = "";
		$name 	  	        =  htmlentities($_POST['name'],ENT_QUOTES);
		$picture 	  	    =  htmlentities($_POST['picture'],ENT_QUOTES);
		$army_number        =  htmlentities($_POST['army_number'],ENT_QUOTES);
		$rank_number	    =  htmlspecialchars($_POST["rank_number"],ENT_QUOTES);
		$trade_number	    =  htmlspecialchars($_POST["trade_number"],ENT_QUOTES);
		
		$perm_village	    =  htmlspecialchars($_POST["perm_village"],ENT_QUOTES);
		$perm_postoffice	=  htmlspecialchars($_POST["perm_postoffice"],ENT_QUOTES);
		$perm_pstation	    =  htmlspecialchars($_POST["perm_pstation"],ENT_QUOTES);
		$perm_dist	  	    =  htmlspecialchars($_POST["perm_dist"],ENT_QUOTES);
		
		$pres_village	    =  htmlspecialchars($_POST["pres_village"],ENT_QUOTES);
		$pres_postoffice	=  htmlspecialchars($_POST["pres_postoffice"],ENT_QUOTES);
		$pres_pstation	    =  htmlspecialchars($_POST["pres_pstation"],ENT_QUOTES);
		$pres_dist	  	    =  htmlspecialchars($_POST["pres_dist"],ENT_QUOTES);

		foreach ($filed as $fied){
			
		}
		if ($validate->emptyString($name)) {
			$errorMSG .= "<li>Class name is required</<li>";
		}
		elseif (strlen($name) < 3) {
			$errorMSG .= "<li>Class name is less than 3 letters</<li>";
		}

		if(!empty($classname)){
			if($validate->validString($classname)){
				$errorMSG .= "<li>Only alphabets,numbers,space and (-) are allowed (Class Name field)</<li>";
			}
		}


		/* CLASS ID */
		if ($validate->emptyString($class_id)) {
			$errorMSG .= "<li>Class id  is required</li>";
		}

		if(!empty($class_id)){
			if($validate->validString($classname)){
				$errorMSG .= "<li>Only alphabets,numbers,space and (-) are allowed (Class Name field)</<li>";
			}
		}
		/*Shift  */
		if ($validate->emptyString($_POST["shift"])) {
			$errorMSG .= "<li>Choose a shift</li>";
		}

		//Class name availability
		$class_qri      = $db->query("SELECT * FROM focus_classinfo WHERE focus_classname='".$_POST['className']."' AND focus_class_shiftname='".$_POST['shift']."'");
		$class_name_avl = mysqli_num_rows($class_qri);

		//Class id availability
		$class_id_qri   = $db->query("SELECT * FROM focus_classinfo WHERE focus_class_id='".$_POST['class_id']."' AND focus_class_shiftname='".$_POST['shift']."'");
		$class_id_avl   = mysqli_num_rows($class_id_qri);


		if($class_name_avl != 0){
			$errorMSG .= "<li>Class name is already taken</li>";
		}

		if($class_id_avl != 0 ){
			$errorMSG  .= "<li>Class ID is already taken</li>";
		}

		echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
		
	}else{
		header("index.html");
	}