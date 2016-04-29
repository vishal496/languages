<?php
require_once("database.php");


  class PagesController{
    public function home() {
      $database = new MySQLDatabase();
	  $record_set = $database->find_all_record();
      $array = array();
      while($row = mysqli_fetch_assoc($record_set)){
      $array[] = $row;
      }
	  $array_length = count($array);
      require_once('index_languages.php');
    }
	public function PYTHON() {
	  $database = new MySQLDatabase();
      $image_set = $database->find_images('PYTHON');   // image search from database.
	  $record_set = $database->find_all_record_discrip('PYTHON');  // Language discription search from database.
	  $link_set = $database->find_all_social_link('PYTHON');  // Social Link search from database.
	  $study_set = $database->find_all_study_material('PYTHON');  // Study Material search from database.
	  $array_image = array(); // Array for image record.
	  while($row_image = mysqli_fetch_assoc($image_set)){
	    $array_image[] = $row_image;
		}
	  $array_record_set = array(); // Array for record data.
	  while($row_record_set = mysqli_fetch_assoc($record_set)){
	    $array_record_set[] = $row_record_set;
		}
	  $array_social_links = array(); // Array for social link data.
      while($row_social_link = mysqli_fetch_assoc($link_set)){
	    $array_social_links[] = $row_social_link;
		}
        $array_social_links_length = count($array_social_links); // Length of array for social link.
      $array_study_set = array(); // array for study set data.
      while($row_study_set = mysqli_fetch_assoc($study_set)){
	    $array_study_set[] = $row_study_set;
		}
        $array_study_set_length = count($array_study_set);// Length of array for study set.
		
        $record_discrip = $array_record_set[0]['discrip'];		
		$image_name = $array_image[0]['image_name'];
		$record_name = 'PYTHON';
      require_once('languages.php');
    }
	public function JAVA() {
	  $database = new MySQLDatabase();
      $image_set = $database->find_images('JAVA'); // image search from database.
	  $record_set = $database->find_all_record_discrip('JAVA'); // Language discription search from database.
	  $link_set = $database->find_all_social_link('JAVA'); // Social Link search from database.
	  $study_set = $database->find_all_study_material('JAVA'); // Study Material search from database.
	  $array_image = array();
	  while($row_image = mysqli_fetch_assoc($image_set)){
	    $array_image[] = $row_image;
		}
	  $array_record_set = array();
	  while($row_record_set = mysqli_fetch_assoc($record_set)){
	    $array_record_set[] = $row_record_set;
		}
	  $array_social_links = array();
      while($row_social_link = mysqli_fetch_assoc($link_set)){
	    $array_social_links[] = $row_social_link;
		}
        $array_social_links_length = count($array_social_links);
      $array_study_set = array();
      while($row_study_set = mysqli_fetch_assoc($study_set)){
	    $array_study_set[] = $row_study_set;
		}
        $array_study_set_length = count($array_study_set);
		
        $record_discrip = $array_record_set[0]['discrip'];		
		$image_name = $array_image[0]['image_name'];
		$record_name = 'JAVA';
      require_once('languages.php');
    }
	public function C() {
	  $database = new MySQLDatabase();
      $image_set = $database->find_images('C'); // image search from database.
	  $record_set = $database->find_all_record_discrip('C'); // Language discription search from database.
	  $link_set = $database->find_all_social_link('C'); // Social Link search from database.
	  $study_set = $database->find_all_study_material('C'); // Study Material search from database.
	  $array_image = array();
	  while($row_image = mysqli_fetch_assoc($image_set)){
	    $array_image[] = $row_image;
		}
	  $array_record_set = array();
	  while($row_record_set = mysqli_fetch_assoc($record_set)){
	    $array_record_set[] = $row_record_set;
		}
	  $array_social_links = array();
      while($row_social_link = mysqli_fetch_assoc($link_set)){
	    $array_social_links[] = $row_social_link;
		}
        $array_social_links_length = count($array_social_links);
      $array_study_set = array();
      while($row_study_set = mysqli_fetch_assoc($study_set)){
	    $array_study_set[] = $row_study_set;
		}
        $array_study_set_length = count($array_study_set);
		
        $record_discrip = $array_record_set[0]['discrip'];		
		$image_name = $array_image[0]['image_name'];
		$record_name = 'C';
      require_once('languages.php');
    }
	public function LISP() {
	  $database = new MySQLDatabase();
      $image_set = $database->find_images('LISP'); // image search from database.
	  $record_set = $database->find_all_record_discrip('LISP'); // Language discription search from database.
	  $link_set = $database->find_all_social_link('LISP'); // Social Link search from database.
	  $study_set = $database->find_all_study_material('LISP'); // Study Material search from database.
	  $array_image = array();
	  while($row_image = mysqli_fetch_assoc($image_set)){
	    $array_image[] = $row_image;
		}
	  $array_record_set = array();
	  while($row_record_set = mysqli_fetch_assoc($record_set)){
	    $array_record_set[] = $row_record_set;
		}
	  $array_social_links = array();
      while($row_social_link = mysqli_fetch_assoc($link_set)){
	    $array_social_links[] = $row_social_link;
		}
        $array_social_links_length = count($array_social_links);
      $array_study_set = array();
      while($row_study_set = mysqli_fetch_assoc($study_set)){
	    $array_study_set[] = $row_study_set;
		}
        $array_study_set_length = count($array_study_set);
		
        $record_discrip = $array_record_set[0]['discrip'];		
		$image_name = $array_image[0]['image_name'];
		$record_name = 'LISP';
      require_once('languages.php');
    }
	public function PERL() {
$database = new MySQLDatabase();
      $image_set = $database->find_images('PERL'); // image search from database.
	  $record_set = $database->find_all_record_discrip('PERL'); // Language discription search from database.
	  $link_set = $database->find_all_social_link('PERL'); // Social Link search from database.
	  $study_set = $database->find_all_study_material('PERL'); // Study Material search from database.
	  $array_image = array();
	  while($row_image = mysqli_fetch_assoc($image_set)){
	    $array_image[] = $row_image;
		}
	  $array_record_set = array();
	  while($row_record_set = mysqli_fetch_assoc($record_set)){
	    $array_record_set[] = $row_record_set;
		}
	  $array_social_links = array();
      while($row_social_link = mysqli_fetch_assoc($link_set)){
	    $array_social_links[] = $row_social_link;
		}
        $array_social_links_length = count($array_social_links);
      $array_study_set = array();
      while($row_study_set = mysqli_fetch_assoc($study_set)){
	    $array_study_set[] = $row_study_set;
		}
        $array_study_set_length = count($array_study_set);
		
        $record_discrip = $array_record_set[0]['discrip'];		
		$image_name = $array_image[0]['image_name'];
		$record_name = 'PERL';
      require_once('languages.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
