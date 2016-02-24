<?php 
require_once("database.php");
?>
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
	    <?php 
        $result = $database->find_all_record();
        ?>
		<ul>
		   <?php while($found_result = mysqli_fetch_assoc($result)) {
		    ?>
			<li><a href="languages.php?record=<?php echo urlencode($found_result["id"]); ?>"><?php echo $found_result["name"]; ?></a></li>
			<?php
			  }
			 ?> 
		</ul>
	</section>
	<footer class="page_footer">
	    &copy Copyright PARASHAR
	</footer>
    </div>	
</body>
</HTML>		