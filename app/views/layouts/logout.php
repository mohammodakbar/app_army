<?php
	unset($_SESSION['user']);
	session_unset();
	session_destroy();
	header("Location:".PROOT.'user/login');
