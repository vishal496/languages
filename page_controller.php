<?php
require_once("database.php");

$image_set = $database->find_all_images();
$all_record = $database->find_all_record();
$link_set = $database->find_all_social_link();
$study_set = $database->find_all_study_material();

for($i=0;$i<=4;$i++){
    if($image_set[$i][1] == $_GET["record"]){
	    $image_name = $image_set[$i][2];
		}
	}

for($i=0;$i<=4;$i++){
    if($all_record[$i][0] == $_GET["record"]){
	    $record_name = $all_record[$i][1];
		$record_discrip = $all_record[$i][2];
		}
	}
	
for($i=0;$i<=19;$i++){
    if($link_set[$i][1] == $_GET["record"]){
	     $link[] = $link_set[$i][2];
		 }
	}	 

for($i=0;$i<=9;$i++){
    if($study_set[$i][1] == $_GET["record"]){
	     $study[] = $study_set[$i][2];
		 }
	}	
include("languages.php");	
?>