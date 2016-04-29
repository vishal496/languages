<?php
  require_once('database.php');
    
	global $action;
	$controller = 'page';
  if ( isset($_GET['action'])) {
    $action  = $_GET['action'];
  } else {
    $action  = 'home';
  }

  require_once('layout.php');
?>