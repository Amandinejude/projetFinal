<?php 

namespace Controller; 

use \W\Controller\Controller;
use Model\UsersModel;

class UsersController extends Controller{

	/**
	 * Page d'accueil par défaut
	 */
	public function accueil()
	{
		$this->show('default/home');
	}

//ajout USER
	public function user(){
		//créer une nouvelle instance avec 	NEW, on precise le model que l'on appel
		$ajout = new UsersModel(); 
	 
		//on reprend cette meme variable pour preciser la function du model dont on a besoin (new / model / function, on crée le chemin)
		$ajout->ajouterUser($_POST['name'], $_POST['firstname'], $_POST['pwd'], $_POST['email']
			);
		$this->show('default/home');
	}

//select USER
	public 	function showUser(){
		$select = new UsersModel(); 
		
		$retour = $select->selectUser(17);
		print_r($retour);
		die();
		$this->show('default/home');
	}

//update USER
	public function upUser(){
		
	
		$up = new UsersModel(); 
		
		$retour = $up->updateUser($id, $_POST['name'], $_POST['firstname'], $_POST['password'], $_POST['email']
			);

		$this->show('default/home'); 
	}

//delete USER
	public function delUser(){
	
		$del = new UsersModel(); 
		
		$del->deleteUser(17);
	
		$this->show('default/home'); 
	}



//login USER
	public function login(){
		/*$_POST['email'] = "new3@hashage.com";
		$_POST['pwd'] = "testhash";*/
		if (empty($_POST['email']) | empty($_POST['pwd'])){	
			$reponse = [
				'message' => "Vous devez saisir un email et un mot de passe valide !",
				'type' => 'error'
			];
			$this->showJson($reponse);

	 		//return "Vous devez saisir un email et un mot de passe valide !";
		}else{
			$log = new UsersModel();
			$user = $log->logUser($_POST['pwd'], $_POST['email']);
			if($user){
				$reponse = [
				'message' => "Vous êtes bien connecté(e)",
				'type' => 'success'
				];
			}else{
				$reponse = [
					'message' => "Email ou Mot de passe invalide.",
					'type' => 'error'
				];
			}
			$this->showJson($reponse);
		}

	}

//logout Users

	public function logout(){
		$log = new UsersModel();
		$log->logOut();
	}

}

 ?>