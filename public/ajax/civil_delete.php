<?php
	require_once("..\../config/config.php");
	require_once("..\../core/DB.php");

	$db 		   = new database;
	$del_id        = $_POST['del_id'];
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['del_id'])){
			$succcs = [];
			$del      = $db->query("DELETE FROM civil_basic_info WHERE cs_no='$del_id'");
			if(!$del){
					$succcs['scsmsg'] = "Failed to delete data";
			}else{
					$succcs['scsmsg'] = "Data  deleted";
			}
			echo json_encode(['code'=>200, 'scsmsg'=>$succcs]);
			exit;
		}

	}


?>
