<?php 

	//include le top
	require('/top.php');
?>


<!-- ici on affiche les infos de l'utilisateur
+ lien suppression
+lien modification -->

<h3>Mes infos</h3>
<?php  ?>
<a href=<?= $this->url('updateProfil', ["id" => $user['us_id']]) ?>>Modifier mes infos</a>
<a href=<?= $this->url('deleteProfil', ["id" => $user['us_id']]) ?>>Supprimer mon compte</a>

<h3>Mes favoris</h3>



<?php 
	//include le footer
	require('/footer.php');
 ?>



 