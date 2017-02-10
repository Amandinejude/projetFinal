 <?php  

namespace Controller;

use \W\Controller\Controller;
use Model\RecipesModel;

class RecipesController extends Controller{

//ajout RECIPE
	public function recipe(){
		
		$ajout = new RecipesModel(); 
	
		$ajout->ajouterRecipe("recipeTEST", "testIMGTEST"
			//$_POST['recipe'], $_POST['pictureRecipe']
			); 
	
		$this->show('default/home');
	}

//update dans la BDD RECIPE
	public function upRecipe(){
		$up = new RecipesModel(); 
		
		$up->updateRecipe(6, "update", "update"
			//$id, $_POST['recipe'], $_POST['pictureRecipe']
			);
		$this->show('default/home'); 
	}

//delete RECIPE
	public function delRecipe(){
		$del = new RecipesModel(); 
		
		$del->deleteRecipe(6);
		$this->show('default/home');
	}
//select 1 RECIPE
		public 	function showRecipe(){
		$select = new RecipesModel(); 
		
		$retour = $select->selectRecipe(3);
		print_r($retour);
		die();
		$this->show('default/home');
	}
	
//select ALL RECIPES
		public 	function showRecipes(){
		$select = new RecipesModel(); 
		
		$retour = $select->selectRecipes();
		print_r($retour);
		die();
		$this->show('default/home');
	}

}


 ?>