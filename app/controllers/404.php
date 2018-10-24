<?php 
	class 404 extends Controller{
		public function __construct($controller,$action){
			parent::__construct($controller,$action);
		}
		public function indexAction(){
			$this->view->render('soldier\index');
		}
	}