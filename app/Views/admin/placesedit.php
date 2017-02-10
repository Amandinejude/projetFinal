<?php 
//page servant à ajouter un nouveau lieu + modifier un lieu existant (form addplaces)

//view\abonne-edit.php
require('layout/top.php'); ?>
    <h2>Editer un abonne</h2>

     <form method="POST">
<!--         <input type="hidden" name="id" value="<?= $abonne->getId(); ?>"/>
 -->        
 			<div class="form-group <?php if (isset($errors['prenom'])) { echo 'has-error'; } ?>">
            <label>Prenom</label>
            <input type="text" name="prenom" class="form-control" value="<?= $abonne->getPrenom(); ?>"/>
            <?php if (isset($errors['prenom'])) : ?>
            <span class="help-block"><?= $errors['prenom']; ?></span>
            <?php endif; ?>
        </div>
            <div class="form-group"<?php if (isset($errors['nom'])) { echo 'has-error'; } ?>">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" value="<?= $abonne->getNom(); ?>"/>
            <?php if (isset($errors['nom'])) : ?>
            <span class="help-block"><?= $errors['nom']; ?></span>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>            
    </form>
    
<?php require('layout/bottom.php'); ?>
