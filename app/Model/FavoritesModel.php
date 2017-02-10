<?php 
 
namespace Model;


class FavoritesModel extends \W\Model\Model {

//insert Fav
	public function ajouterFav($user, $place){

		$data = array("users_us_id" =>$user, "places_pl_id" =>$place);
		$this->insert($data);
		return "favoris enregistré";
	}

//select TOUS les favoris de tel user
	public function selectFav(){

		$data = array("places_pl_id" =>$place, "users_us_id" =>$user);
		return $this->findAll($data);
	}

//delete fav
	public function deleteFav($user, $place){
		
		$data = array("users_us_id" =>$user, "places_pl_id" =>$place);
		return $this->delete($data);
	}

}

?> 