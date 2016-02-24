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
    <div class="container">
	<header>
	      <nav class="nav">
		    <ul>
			   <li><a href="home_page.php"> HOME </a></li>
			   <li><a href=""> TUTORIAL </a></li>
			   <li><a href=""> ABOUT </a></li>
			   <li><a href=""> CONTACT </a></li>
			</ul>
		  </nav>
		  <div class="clear"></div>
	</header>
    <section class="left_side">
	    <article>
		    <header>
		    <?php $record_set = $database->find_all_record(); ?>
            <?php while ($record = mysqli_fetch_assoc($record_set)) { ?>
            <?php if($record["id"] == $selected_record_id){ ?>			
       			<h1><?php echo $record["name"]; ?></h1>
			</header>
                <p><?php echo $record["discrip"]; ?></p>			
				<?php } ?>
            <?php } ?>				
		</article>
	</section>
	<aside class="right_side">
	    <div>
		    <h1> SOCIAL LINKS </h1>
			<?php $social_set = $database->find_all_social_link(); ?>
			<?php while($social = mysqli_fetch_assoc($social_set)){ ?>
			<?php if($social["record_id"]== $selected_record_id){ ?>
            <ul>
			    <li><a href=""><?php echo $social["discrip"]; ?></a></li>
            <?php } ?>
            <?php } ?>
			</ul>
		</div>
		
		<div>
	        <h1> STUDY MATERIAL </h1>
			<?php $study_set = $database->find_all_study_material(); ?>
			<?php while($study = mysqli_fetch_assoc($study_set)){ ?>
			<?php if($study["record_id"]== $selected_record_id){ ?>
			<ul>
			    <li><a href=""><?php echo $study["discrip"]; ?></a></li>
			<?php } ?>
            <?php } ?>			
			</ul>
		</div>
		<div>
		    <form action="form_entry.php" method="post">
			    <fieldset class="entries">
				    <h2>ENQUIRY:</h2>
				    <br><label for="first_name">First Name:</label> <input type="text" name="first_name"  id="first_name" /></br>
				    <br><label for="last_name">Last Name:</label> <input type="text" name="last_name" id="last_name" /></br>
				    <br><label for="email">Email:</label> <input type="text" name="email"  id="email" /></br>
				    <br><label for="phone">Phone No.:</label> <input type="text" name="phone_no"  id="phone" /></br>
					</br>
					Course:
					    <select name="course">
						    <option value="b.tech">B.TECH</option>
						    <option value="b.e">B.E</option>
						    <option value="M.tech">M.TECH</option>
						    <option value="b.c.a">B.C.A</option>
						    <option value="m.c.a">M.C.A</option>
						</select>
					</br></br>
					<input type="submit" name="submit" value="submit" />					
					<input type="reset" value="reset" />					
			    </fieldset>
			</form>	
		</div>
	</aside>
	
	<footer class="page_footer">
	    &copy Copyright PARASHAR
	</footer>
	</div>
</body>
</html>   	 