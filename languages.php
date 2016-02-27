<?php include("header.php"); ?>
   
   <div class="container">
	<header>
	        <image src="logo/<?php echo $image_name; ?>" class="logo" />
            
	      <nav class="nav">
		    <ul>
			   <li><a href="home_controller.php"> HOME </a></li>
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
		    <h1><?php echo $record_name; ?></h1>
			</header>
                <p><?php echo $record_discrip; ?></p>		
		</article>
	</section>
	<aside class="right_side">
	    <div>
		    <h1> SOCIAL LINKS </h1>
			    <ul>
			        <li><a href=""><?php echo $link[0]; ?></a></li>
					<li><a href=""><?php echo $link[1]; ?></a></li>
					<li><a href=""><?php echo $link[2]; ?></a></li>
					<li><a href=""><?php echo $link[3]; ?></a></li>
                </ul>
		</div>
		
		<div>
	        <h1> STUDY MATERIAL </h1>
			<ul>
			    <li><a href=""><?php echo $study[0]; ?></a></li>
				<li><a href=""><?php echo $study[1]; ?></a></li>
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
	
 <?php require_once("footer.php"); ?>  	 
