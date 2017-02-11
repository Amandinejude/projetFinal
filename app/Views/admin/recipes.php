<?php 
//view\places.php


//Page d'accueil du dashbord admin qui affiche l'état de la  base de données et qui permet d'ajouter, de modifier ou de supprimer des recettes

require('layouts/top.php');


 ?>

<h2>Recipes</h2>

<p><a href="placesedit.php">Ajouter une recette</a></p>
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
        <th>Picture</th>
        <th>Steps</th>
    </tr>

    <?php foreach ($recipes as $recipe) { ?>
 
     <tr>
        <td><?php echo $recipe['re_id'];?></td>
        <td><?php echo $recipe['re_name'];?></td>
        <td><?php echo $recipe['re_picture'];?></td>

        <td><?php echo $recipe['re_steps'];?></td>        

    

        <td><a href="placesedit.php?id=<?php echo $recipe['re_id']; ?>">Modifier</a></td>
        <!-- appel au controller qui delete -->
        <td><a href="abonne-delete.php?id=<?php echo $recipe['re_id']; ?>">Supprimer</a></td>
    </tr>

    <?php } ?>


<?php require('layouts/bottom.php'); ?>