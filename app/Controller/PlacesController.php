<?php 

namespace Controller;

use \W\Controller\Controller;
use Model\PlacesModel;

class PlacesController extends Controller{

//ajout PLACE
	public function place(){
		
		$ajout = new  PlacesModel(); 
	
		$ajout->ajouterPlace("Café test", "2458745896", "test test", "Paris", "14", "http://test.fr", "@test", "cheminimage", "1"
			//$_POST["place"], $_POST['tel'], $_POST['address'], $_POST['city'], $_POST['website'], $_POST['instagram'], $_POST['picture']
			); 
	
		$this->show('default/home');
	}

//update PLACE
	public function upPlace(){
	
		$up = new PlacesModel(); 
		
		$up->updatePlace(11,"testupdate", "7896541231", "update", "Paris", "11", "http://update.com", "@update", "update");
			//$id, $_POST["place"], $_POST['tel'], $_POST['address'], $_POST['city'], $_POST['district'], $_POST['website'], $_POST['instagram'], $_POST['picturePlace']
			
	
		$this->show('default/home'); 
	}

//delete PLACE
	public function delPlace(){
	
		$del = new PlacesModel(); 
		
		$del->deletePlace(30);
	
		$this->show('default/home');
	}

//select 1 PLACE
	public 	function showPlace(){
	$select = new PlacesModel(); 
	
	$retour = $select->selectPlace(29);
	$this->show('default/home');
	}


//select ALL PLACES en fonction de la recipe
	public 	function showPlaces(){
		$select = new PlacesModel(); 
		// 
		$retour = $select->selectPlaces(4); //id de la recette qui correspond
		print_r($retour);
		die();
		$this->show('default/home');
	}
	
//select ALL PLACES pour la partie admin pour pouvoir les modifier
	public 	function showAllPlaces(){
		$select = new PlacesModel(); 
		// 
		$retour = $select->selectAllPlaces(); 
		$this->show('admin/places', ["places" => $retour]);
	}

}













 ?>