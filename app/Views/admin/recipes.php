<?php 
//view\places.php


//Page d'accueil du dashbord admin qui affiche l'état de la  base de données et qui permet d'ajouter, de modifier ou de supprimer des recettes

require('layouts/top.php');


 ?>

 <?php 

//view\places.php

//Page d'accueil du dashbord admin qui affiche l'état de la base de données et qui permet d'ajouter, de modifier ou de supprimer des lieux

require('layouts/top.php');?>

<h2>Places</h2>

<p><a href="placesedit.php">Ajouter un endroit</a></p>
<div class="well">
    <form>
        <div class="form-group">
            <label>Nom</label>
            <!-- version à utiliser avec la variable $nom correspondante, à checker -->
			<!-- <input type="text" name="nom" class="form-control" value="<?= $nom; ?>"/> -->           
			<input type="text" name="nom" class="form-control" value="RECHERCHER"/>    


        </div>
        <button type="submit" class="btn btn-default">Recherchez</button>    
    </form>
</div>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Téléphone</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Code Postal</th>
        <th>Site</th>
        <th>Instagram</th>
        <th>Images</th>
        <th>Recettes</th>
    </tr>


<?php require('layouts/bottom.php'); ?>