 <?php
require_once("database.php");

$record_set = $database->find_all_record();
    $found_id_first = $record_set[0][0];
	$found_id_second = $record_set[1][0];
	$found_id_third = $record_set[2][0];
	$found_id_fourth = $record_set[3][0];
	$found_id_fifth = $record_set[4][0];
	
	$found_name_first = $record_set[0][1];
	$found_name_second = $record_set[1][1];
	$found_name_third = $record_set[2][1];
	$found_name_fourth = $record_set[3][1];
	$found_name_fifth = $record_set[4][1];
	
	include("home_page.php");
	
?>			
       						