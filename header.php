<?php
require_once("database.php");
require_once("form_entry.php");
?>
<?php $all_record = $database->find_selected_record(); ?>

<!DOCTYPE html>
<html>
<head>
     <title> Languages </title>
	 <link rel="stylesheet"  href="main.css" />
</head>
<body>