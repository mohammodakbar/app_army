<?php

	class Logout extends Controller{
		public function __construct($controller, $action){
			parent::__construct($controller, $action);
			if(!isset($_SESSION['user'])){
				header('location:'.PROOT."user/login" );
			}
			$this->view->setLayout('logout');
		}
		
		public function indexAction(){
			$this->view->render('user\logout');
		}
		
		
	}