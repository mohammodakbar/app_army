<?php
	class Soldier extends Controller {
		
		public function __construct($controller,$action){
			parent::__construct($controller,$action);
			if(!isset($_SESSION['user'])){
				header('location:'.PROOT."user/login" );
			}
		}
		
		public function indexAction(){
			$this->view->render('soldier\index');
		}
		public function admissionAction($step,$identify){
			if($step == ''){
				header('location:'.PROOT.'soldier/admission/step-1/' );
			}elseif($step == 'step-1'){
				$this->view->render('soldier\step-1');
			}elseif($step == 'step-2'){
				$this->view->render('soldier\step-2');
			}else{
				echo "Invalid Parameter";
			}
		}
		public function profileAction(){
			$this->view->render('soldier\profile');
		}
		public function edit_step_1Action(){
			$this->view->render('soldier\edit_1');
		}
		public function edit_step_2Action(){
			$this->view->render('soldier\edit_2');
		}
		
	}