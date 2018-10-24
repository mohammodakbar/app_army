<?php
	require_once("..\../config/config.php");
	require_once("..\../core/DB.php");
    $db = new database;
	$page = "";
	$result = "";
    	if(isset($_POST['page'])){
    		$page = $_POST['page'];
    	}else{
    		$page =  1;
    	}
		if(isset($_POST['amount'])){
			$amount = $_POST['amount'];
			$record_per_page = $amount;
		}else{
			$record_per_page = 5;
		}
		$dataType = $_POST['dataType'];
		
    	$start = ($page - 1) * $record_per_page;

    	$data_qri = $db->query ("SELECT * FROM `basic_info` WHERE rank='$dataType' ORDER BY id DESC LIMIT $start, $record_per_page");
		$count = mysqli_num_rows($data_qri);
		if($count < 1){
			$result .= "<div class='well well-sm'> No Data Found</div";
		}else{
		$result .= "
			<div class='table-responsive'>
			<table class='table table-striped'>
				<thead>
						<tr>
							<th>Photo</th>
							<th>Army No</th>
							<th>Rank</th>
							<th>Name</th>
						</tr>
					</thead>
				<tbody>
		";
    	while($data = $db->fetch($data_qri)){
    		$result .= "
    			<tr>
					<td>
						<img src='".PROOT."public/uploads/".$data['picture']."' style='width: 40px;height: 40px;' />
					</td>
    				<td>".$data['army']."</td>
    				<td>".$data['rank']."</td>
    				<td>".$data['name']."</td>
    			</tr>

    		";
    	}

		$result .= "
				</tbody>
			</table>
			</div>
		";
		//End of count satement
		}
		$result .= "
				<div class='panel-footer'>
				";
				$q_page = $db->query("SELECT * FROM basic_info WHERE rank='$dataType'");
				$v_page = $q_page->num_rows;
				$total_pages = ceil($v_page/$record_per_page);
				for($i = 1; $i <= $total_pages; $i++){
					$result .="<span class = 'pagination' style = 'cursor:pointer; margin:1px; padding:8px; border:1px solid #ccc;' id = '".$i."'>".$i."</span>";
				}
				$result .="
					<span class = 'pull-right'>Page of ".$page." out of ".$total_pages."</span>
				";
				$result .= "
				</div>

    	";

    	echo $result;

?>
