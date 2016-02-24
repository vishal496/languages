 <?php
require_once("database.php");
?>
 
 <?php $image_set = $database->find_all_images(); ?>
            <?php while($image = mysqli_fetch_assoc($image_set)) { ?>
            <?php if($image["record_id"] == $_GET["record"]) {
                    $image_name = $image["image_name"]; ?>  
            <?php } ?>
            <?php }?>

<?php $record_set = $database->find_all_record(); ?>
            <?php while ($record = mysqli_fetch_assoc($record_set)) { ?>
            <?php if($record["id"] == $_GET["record"]){
			       $record_name = $record["name"] ;
				   $record_discrip = $record["discrip"]; ?>
            <?php } ?>
            <?php } ?>

<?php $social_set = $database->find_all_social_link(); ?>
			<?php while($social = mysqli_fetch_assoc($social_set)){ ?>
			<?php if($social["record_id"]== $_GET["record"]){
                   $social_discrip = $social["discrip"]; ?>
			<?php } ?>
            <?php } ?>

<?php $study_set = $database->find_all_study_material(); ?>
			<?php while($study = mysqli_fetch_assoc($study_set)){ ?>
			<?php if($study["record_id"]== $_GET["record"]){
			      $study_discrip = $study["discrip"]; ?>
			<?php } ?>
            <?php } ?>			
       						