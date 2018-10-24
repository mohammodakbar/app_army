<?php
	require_once( '..\../config/config.php' );
	require_once( '..\../core/DB.php' );

	sleep(2);
	$db = new database;
	$errorMSG = "";
	ob_start();
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//email validation
		$email    = trim($_POST['user_email']);
		$email    = strip_tags($email);
		$email    = htmlspecialchars($email);

		//password validation
		$pass     = trim($_POST['user_pass']);
		$pass     = strip_tags($pass);
		$pass     = htmlspecialchars($pass);
		$password = md5($pass);
		//conditional validation
		if(empty($email)){
			$errorMSG = "<li>Please enter your email address</li>";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$errorMSG  = "<li>Please enter valid email address</li>";
		}

		if(empty($pass)){
			$errorMSG = "<li>Please enter your password</li>";
		}

		//$password         = hash('sha256', $pass);

			$sql              = $db->query("SELECT * FROM army_users WHERE user_email='$email' AND user_pass='$password'");
			$row              = $db->fetch($sql);
			$count            = mysqli_num_rows($sql);
			$_SESSION['user'] = $row['user_role'];
			//$_SESSION['role']       = $row['focus_users_type'];
			if($count != 0 )
			{
				$ret = array();
				$ret['response'] = 1;
				$ret['success'] = "Login Successful...";
				$ret['redirecturl'] = 'index.php';

			}else{
				$errorMSG   .= "<li>Your email or password is incorrect</li>";

			}
			
			if(empty($errorMSG)){
			echo json_encode($ret);
			exit;
			}

			echo json_encode(['code'=>404, 'msgs'=>$errorMSG]);
			exit;

	}



?>
