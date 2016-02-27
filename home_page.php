
<!DOCTYPE html>
<HTML>
<head>
   <title> Languages </title>
   <link rel="stylesheet"  href="home.css" />
</head>
<body>
    <div class="container">
    <header class="head">
        <h1> PAGE OF LANGUAGES </h1>
    </header>
    <section class="left_side">
	    <h1> MENU </h1>
	    
		<ul>
		   <li><a href="page_controller.php?record=<?php echo urlencode($found_id_first); ?>"><?php echo $found_name_first; ?></a></li>
                   <li><a href="page_controller.php?record=<?php echo urlencode($found_id_second); ?>"><?php echo $found_name_second; ?></a></li>
                   <li><a href="page_controller.php?record=<?php echo urlencode($found_id_third); ?>"><?php echo $found_name_third; ?></a></li>
                   <li><a href="page_controller.php?record=<?php echo urlencode($found_id_fourth); ?>"><?php echo $found_name_fourth; ?></a></li>
                   <li><a href="page_controller.php?record=<?php echo urlencode($found_id_fifth); ?>"><?php echo $found_name_fifth; ?></a></li>
		</ul>
	</section>
<?php require_once("footer.php"); ?>  	 		
