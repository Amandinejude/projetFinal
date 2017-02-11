<?php 
//page servant à ajouter un nouveau lieu + modifier un lieu existant (form addplaces)

//view\abonne-edit.php
require('layouts/top.php'); ?>
    <h2>Editer un lieu</h2>
 
     <section>
      <div class="container text-center wow fadeIn">
            <div class="row content-row">
                <div class="col-lg-12">
                    <form method="post" action="<?= $this->url('testUpplace') ?>">

                        <label>Place Name</label> <br>
                        <input type="text" name="place" placeholder="Enter the place name here" value=<?= $place['pl_name'] ?> ><br>

                        <label>Place Téléphone</label> <br>
                        <input type="text" name="tel" placeholder="Enter the place name here" value=<?= $place['pl_name'] ?> ><br>

                        <label>Place Adress</label><br>
                        <input type="text" name="address" placeholder="Enter the place address here" value=<?= $place['pl_address'] ?> ><br>

                        <!-- enum donc select avec menu déroulant -->
                        <label>City</label><br>
                        <input type="text" name="city" placeholder="Enter the city" value=<?= $place['pl_city'] ?> ><br>

                        <label>District</label><br>
                        <input type="text" name="district" placeholder="Enter the district" value=<?= $place['pl_district'] ?> ><br>

                        <label>Website</label><br>
                        <input type="text" name="website" placeholder="Enter the website" value=<?= $place['pl_website'] ?> ><br>
                        
                        <label>Instagram</label><br>
                        <input type="text" name="instagram" placeholder="Enter the instagram" value=<?= $place['pl_instagram'] ?> ><br>

                        <label>Picture</label><br>
                        <input type="image" name="pic" src=<?= $place['pl_picture'] ?>  width=""><br>

                        <input type="submit" name="addPlace" value="Add a new place">
            
                    </form>
                  
                </div>
            </div>
            
    </section>

   
    
<?php require('layouts/bottom.php'); ?>
