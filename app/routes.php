<?php
	 
	$w_routes = array( //methode, chemin fichiers, controller, nom de la route
		['GET', '/', 'Default#home', 'default_home'], 
		['GET|POST', '/testUnitaire', 'TestUnitaire#accueil', 'test'],

/////////USERS		
		['GET|POST', '/Users/user', 'Users#user', 'testUser'], //ok
		['GET|POST', '/Users/upUser', 'Users#upUser', 'testUpuser'], //ok
		['GET|POST', '/Users/delUser', 'Users#delUser', 'testDeluser'], //ok
		['GET|POST', '/Users/showUser', 'Users#showUser', 'testShowuser'], //ok

/////////PLACES
		['GET|POST', '/Places/place', 'Places#place', 'testPlace'], //ok
		['GET|POST', '/Places/upPlace', 'Places#upPlace', 'testUpplace'], //ok
		['GET|POST', '/Places/delPlace', 'Places#delPlace', 'testDelplace'], //ok
		['GET|POST', '/Places/showPlace', 'Places#showPlace', 'testShowplace'], //ok
		['GET|POST', '/Places/showPlaces', 'Places#showPlaces', 'testShowplaces'], //ok

/////////RECIPES
		['GET|POST', '/Recipes/recipe', 'Recipes#recipe', 'testRecipe'], //ok
		['GET|POST', '/Recipes/upRecipe', 'Recipes#upRecipe', 'testUprecipe'], //ok
		['GET|POST', '/Recipes/delRecipe', 'Recipes#delRecipe', 'testDelrecipe'], //ok
		['GET|POST', '/Recipes/showRecipe', 'Recipes#showRecipe', 'testShowrecipe'], //ok
		['GET|POST', '/Recipes/showRecipes', 'Recipes#showRecipes', 'testShowrecipes'], //ok
	
/////////STEPS
		['GET|POST', '/Steps/step', 'Steps#step', 'testStep'], //ok
		['GET|POST', '/Steps/upStep', 'Steps#upStep', 'testUpstep'], //ok
		['GET|POST', '/
		', 'Steps#showSteps', 'testShowsteps'], //ok
		['GET|POST', '/Steps/delStep', 'Steps#delStep', 'testDelstep'], //ok
	
/////////FAV
		['GET|POST', '/Favorites/favorite', 'Favorites#favorite', 'testFavorite'], // ok
		['GET|POST', '/Favorites/delFav', 'Favorites#delFav', 'testDelfav'],// ok
		['GET|POST', '/Favorites/showFav', 'Favorites#showFav', 'testShowfav'],// ok
		
/////////INGREDIENTS
		['GET|POST', '/Ingredients/ingredient', 'Ingredients#ingredient', 'testIngredient'], //ok

		['GET|POST', '/Ingredients/showIngredients', 'Ingredients#showIngredients', 'testShowingredients'],// ok

////////LOGIN
		['GET|POST', '/Users/login', 'Users#login', 'testLogin'],


// ADMIN accueil
		['GET', '/admin', 'default#admin', 'adminHome'], //ok


// ADMIN places
		// // route pour la page  admin place -> accès au dashboard places + recherche
		['GET|POST', '/admin/places', 'Places#showAllPlaces', 'adminPlace'], //ok
		//route pour placeedit => le form pour la modification de lieu
		['GET|POST', '/admin/places/edit/[:id]', 'Places#upPlace', 'adminPlacesEdit'], //ok
		//methode,        URL 		, Controller (nomdeclass#fonction), nom de la route

		//route pour placeedit => le form pour l'ajout de lieu (pas d'id en paramètre parce qu'on ne veut pas que ça soit prérempli comme pour modifier) A REGLER
		['GET|POST', '/admin/places/edit', 'Places#place', 'adminPlacesEdit1'], 


		// route pour placedelete
		['GET|POST', '/admin/places/delete/[:id]', 'Places#delPlace', 'adminPlacesDelete'], //ok


// ADMIN recipes
 
		// // route pour la page  recipes -> acces au dashboard recipes
		['GET|POST', '/admin/recipes', 'Recipes#showAllRecipes', 'adminRecipes'],

	);
