<?php
namespace Controller;

use \W\Controller\Controller;
use Model\StepsModel;

class StepsController extends Controller {

//ajout dans la BDD des STEPS
	public function step(){
		
		$ajout = new StepsModel(); 
	
		$ajout->ajouterStep('something', 5); 
		//($_POST['step'])
	
		$this->show('default/home');
	}

//update dans la BDD STEP
	public function upStep(){
	
		$up = new StepsModel(); 
		
		$up->updateStep(9, "updating");
	
		$this->show('default/home'); 
	}

//delete STEP
	public function delStep(){
	
		$del = new StepsModel(); 
		
		$del->deleteStep(11);
	
		$this->show('default/home');
	}

//select STEPS
	public 	function showSteps(){
		$select = new StepsModel(); 
		
		$retour = $select->selectSteps(8);
		print_r($retour);
		die();
		$this->show('default/home');
	}

}







 ?>