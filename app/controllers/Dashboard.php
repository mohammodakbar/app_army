<?php

	class Dashboard extends Controller{
		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			if(!isset($_SESSION['user'])){
				header('location:'.PROOT."user/login" );
			}
		}
		
		public function indexAction(){
			$this->view->render('home\index');
		}
		
		
	}