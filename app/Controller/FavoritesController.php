<?php  

namespace Controller;

use \W\Controller\Controller;
use Model\FavoritesModel;

class FavoritesController extends Controller{

//ajout dans la BDD des favorites
	public function favorite(){
		
		$ajout = new FavoritesModel(); 
	
		$ajout->ajouterFav(14, 44); 
	
		$this->show('default/home');
	}

//select FAV
	public 	function showFav(){
		$select = new FavoritesModel(); 
		
		$retour = $select->selectFav(14);
		print_r($retour);
		die();
			$this->show('default/home');
	}

//delete FAV
	public function delFav(){
	
		$del = new FavoritesModel(); 
		
		$del->deleteFav(14);
	
		$this->show('default/home');
	}
}

?>