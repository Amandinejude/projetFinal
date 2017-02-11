<?php 

namespace Controller;

use \W\Controller\Controller;
use Model\PlacesModel;

class PlacesController extends Controller{

//ajout PLACE
	public function place(){
		
		$ajout = new  PlacesModel(); 
	
		$ajout->ajouterPlace($_POST["place"], $_POST['tel'], $_POST['address'], $_POST['city'], $_POST['website'], $_POST['instagram'], $_POST['picture']
			); 
	
		$this->show('admin/placeedit');
	}

//update PLACE
	public function upPlace($id){
		
		$select = new PlacesModel(); // Instanciation de la class PlacesModel
		
		$place = $select->selectPlace($id); // Renvoie les données de la place - paramètre id de la place

		if(!empty($_POST)){
			$select->updatePlace($id, $_POST["place"], $_POST['tel'], $_POST['address'], $_POST['city'], $_POST['district'], $_POST['website'], $_POST['instagram'], $_POST['pic']);	
		};
		
		// $up->updatePlace($id, $_POST["place"], $_POST['tel'], $_POST['address'], $_POST['city'], 
		// $_POST['district'], $_POST['website'], $_POST['instagram'], $_POST['picturePlace']);			 
	
		$this->show('admin/placesedit',["place" => $place]);  
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
		if(!empty($_GET)){
			$pl_name = $_GET["nom"];
			$retour = $select->searchPlace($pl_name);
		}else{
			$retour = $select->selectAllPlaces(); 
			$pl_name = "";
		}
		$this->show('admin/places', ["places" => $retour, "pl_name"=>$pl_name]);
	}
}













 ?>