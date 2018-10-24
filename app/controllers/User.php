<?php

	class User extends Controller{
		public function __construct ($controller,$action){
			parent::__construct($controller,$action);
			$this->view->setLayout('login');
			if(isset($_SESSION['user'])){
				header('location:'.PROOT.'dashboard');
			}
		}
		
		public function loginAction(){
			$this->view->render('user\login');
		}
		
	}