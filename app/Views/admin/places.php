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

    <?php foreach ($places as $place) { ?>

     <tr>
        <td><?php echo $place['pl_id'];?></td>
        <td><?php echo $place['pl_name'];?></td>
        <td><?php echo $place['pl_tel'];?></td>
        <td><?php echo $place['pl_address'];?></td>
        <td><?php echo $place['pl_city'];?></td>
        <td><?php echo $place['pl_district'];?></td>
        <td><?php echo $place['pl_website'];?></td>
        <td><?php echo $place['pl_instagram'];?></td>
        <td><?php echo $place['pl_picture'];?></td>


        <td><a href="placesedit.php?id=<?php echo $place['pl_id']; ?>">Modifier</a></td>
        <!-- appel au controller qui delete -->
        <td><a href="abonne-delete.php?id=<?php echo $place['pl_id']; ?>">Supprimer</a></td>
    </tr>

    <?php } ?>


    <!-- 

	//on va stockers les datas dans un tableau associatif
	while($datas=mysqli_fetch_assoc($req)) {
		// echo $datas['gr_number']." ".$datas['us_firstname']." ".$datas['su_name']."<br/>"; 

			// echo des lignes de tableau du résultat
					echo "<tr>";
					echo "<td>".$datas['su_name']." "."</td>";
					echo "<td>".$datas['us_name']."</td>";
					echo "<td>".$datas['us_firstname']."</td>";
					echo "<td>".$datas['gr_number']."</td>"; 
					$tab = getResultBySubject($datas['fk_su_id']);
					echo "<td>".$tab['avgGrade']."</td>";
					echo "<td>".$tab['minGrade']."</td>";
					echo "<td>".$tab['maxGrade']."</td>"; 
					echo "</tr>";
	
	}



     -->


<?php require('layouts/bottom.php'); ?>